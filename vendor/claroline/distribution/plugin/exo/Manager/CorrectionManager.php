<?php

namespace UJM\ExoBundle\Manager;

use Claroline\CoreBundle\Persistence\ObjectManager;
use JMS\DiExtraBundle\Annotation as DI;
use UJM\ExoBundle\Entity\Attempt\Answer;
use UJM\ExoBundle\Entity\Exercise;
use UJM\ExoBundle\Library\Validator\ValidationException;
use UJM\ExoBundle\Manager\Attempt\AnswerManager;
use UJM\ExoBundle\Manager\Attempt\PaperManager;
use UJM\ExoBundle\Repository\PaperRepository;

/**
 * @DI\Service("ujm_exo.manager.correction")
 */
class CorrectionManager
{
    /**
     * @var ObjectManager
     */
    private $om;

    /**
     * @var PaperRepository
     */
    private $paperRepository;

    /**
     * @var AnswerManager
     */
    private $answerManager;

    /**
     * @var PaperManager
     */
    private $paperManager;

    /**
     * ExerciseManager constructor.
     *
     * @DI\InjectParams({
     *     "om"            = @DI\Inject("claroline.persistence.object_manager"),
     *     "answerManager" = @DI\Inject("ujm_exo.manager.answer"),
     *     "paperManager"  = @DI\Inject("ujm_exo.manager.paper")
     * })
     *
     * @param ObjectManager $om
     * @param AnswerManager $answerManager
     * @param PaperManager  $paperManager
     */
    public function __construct(
        ObjectManager $om,
        AnswerManager $answerManager,
        PaperManager $paperManager)
    {
        $this->om = $om;
        $this->paperRepository = $this->om->getRepository('UJMExoBundle:Attempt\Paper');
        $this->answerManager = $answerManager;
        $this->paperManager = $paperManager;
    }

    public function getToCorrect(Exercise $exercise)
    {
        $answers = [];
        $questions = [];

        // Load papers that have non noted questions
        $papers = $this->paperRepository->findPapersToCorrect($exercise);

        foreach ($papers as $paper) {
            /** @var Answer $answer */
            foreach ($paper->getAnswers() as $answer) {
                if (null === $answer->getScore()) {
                    $answers[] = $this->answerManager->export($answer);

                    // For now we only get one definition for a question
                    // As the papers are ordered by start date DESC, we will get the most recent version of the question
                    $questions[$answer->getQuestionId()] = $paper->getQuestion($answer->getQuestionId());
                }
            }
        }

        return [
            'questions' => array_values($questions),
            'answers' => $answers,
        ];
    }

    /**
     * Save scores and feedback for questions.
     *
     * @param array $correctedAnswers
     *
     * @throws ValidationException
     */
    public function save(array $correctedAnswers = [])
    {
        $updatedPapers = [];

        foreach ($correctedAnswers as $index => $correctedAnswer) {
            /** @var Answer $answer */
            $answer = $this->om->getRepository('UJMExoBundle:Attempt\Answer')->findOneBy([
                'uuid' => $correctedAnswer->id,
            ]);

            if (empty($answer)) {
                throw new ValidationException('Submitted answers are invalid', [[
                    'path' => "/{$index}",
                    'message' => 'answer does not exists',
                ]]);
            }

            // Update answer and apply hint penalties
            $this->answerManager->update($answer, $correctedAnswer, true);
            if (!empty($answer->getUsedHints())) {
                $this->applyPenalties($answer);
            }

            $updatedPapers[$answer->getPaper()->getId()] = $answer->getPaper();
        }

        // A first flush is needed because score calculation for the whole paper retrieve scores from DB
        $this->om->flush();

        // Recalculate scores for updated papers
        foreach ($updatedPapers as $paper) {
            $newScore = $this->paperManager->calculateScore($paper);
            $paper->setScore($newScore);
            $this->om->persist($paper);

            $this->paperManager->checkPaperEvaluated($paper);
        }

        $this->om->flush();
    }

    private function applyPenalties(Answer $answer)
    {
        $paper = $answer->getPaper();

        // Retrieve the def o the question which is answered
        $question = $paper->getQuestion($answer->getQuestionId());

        foreach ($answer->getUsedHints() as $usedHint) {
            foreach ($question->hints as $hint) {
                if ($usedHint === $hint->id && 0 !== $hint->penalty) {
                    $answer->setScore($answer->getScore() - $hint->penalty);
                }
            }
        }
    }
}
