<?php

namespace UJM\ExoBundle\Entity;

use Claroline\CoreBundle\Entity\Resource\AbstractResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use UJM\ExoBundle\Library\Mode\CorrectionMode;
use UJM\ExoBundle\Library\Mode\MarkMode;
use UJM\ExoBundle\Library\Model\AttemptParametersTrait;
use UJM\ExoBundle\Library\Options\ExerciseType;

/**
 * @ORM\Entity(repositoryClass="UJM\ExoBundle\Repository\ExerciseRepository")
 * @ORM\Table(name="ujm_exercise")
 */
class Exercise extends AbstractResource
{
    /**
     * @var string
     *
     * @ORM\Column("uuid", type="string", length=36, unique=true)
     */
    private $uuid;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description = '';

    use AttemptParametersTrait;

    /**
     * When corrections are available to the Users ?
     *
     * @var string
     *
     * @ORM\Column(name="correction_mode", type="string", length=255)
     */
    private $correctionMode = CorrectionMode::AFTER_END;

    /**
     * Date of availability of the corrections.
     *
     * @var string
     *
     * @ORM\Column(name="date_correction", type="datetime", nullable=true)
     */
    private $dateCorrection;

    /**
     * When marks are available to the Users ?
     *
     * @var string
     *
     * @ORM\Column(name="mark_mode", type="string", length=255)
     */
    private $markMode = MarkMode::WITH_CORRECTION;

    /**
     * Add a button to stop the Exercise before the end.
     *
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private $interruptible = false;

    /**
     * Show the Exercise meta in the overview of the Exercise.
     *
     * @var bool
     *
     * @ORM\Column(name="metadata_visible", type="boolean")
     */
    private $metadataVisible = true;

    /**
     * Show stats about User responses in the Correction.
     *
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private $statistics = false;

    /**
     * Flag indicating that we do not show the entire correction for the exercise
     * (equals hide Awaited answer filed) when displaying instant feedback and exercise correction page.
     *
     * @ORM\Column(name="minimal_correction", type="boolean")
     */
    private $minimalCorrection = false;

    /**
     * Flag indicating whether the exercise has been published at least
     * one time. An exercise that has never been published has all its
     * existing papers deleted at the first publication.
     *
     * @var bool
     *
     * @ORM\Column(name="published", type="boolean")
     */
    private $wasPublishedOnce = false;

    /**
     * If true, the users who pass the exercise are anonymized in papers.
     *
     * @var bool
     *
     * @ORM\Column(name="anonymous", type="boolean", nullable=true)
     */
    private $anonymizeAttempts = false;

    /**
     * Type of the Exercise.
     *
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $type = ExerciseType::SUMMATIVE;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Step", mappedBy="exercise", cascade={"all"}, orphanRemoval=true)
     * @ORM\OrderBy({"order" = "ASC"})
     */
    private $steps;

    /**
     * Show feedback flag.
     *
     * @var string
     *
     * @ORM\Column(name="show_feedback", type="boolean")
     */
    private $showFeedback = false;

    /**
     * Exercise constructor.
     */
    public function __construct()
    {
        $this->uuid = Uuid::uuid4()->toString();
        $this->dateCorrection = new \DateTime();
        $this->steps = new ArrayCollection();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets UUID.
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Sets UUID.
     *
     * @param $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    public function getTitle()
    {
        return !empty($this->resourceNode) ? $this->resourceNode->getName() : null;
    }

    public function setTitle($title)
    {
        if (!empty($this->resourceNode)) {
            $this->resourceNode->setName($title);
        }
    }

    /**
     * Set description.
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set correctionMode.
     *
     * @param string $correctionMode
     */
    public function setCorrectionMode($correctionMode)
    {
        $this->correctionMode = $correctionMode;
    }

    /**
     * Get correctionMode.
     *
     * @return string
     */
    public function getCorrectionMode()
    {
        return $this->correctionMode;
    }

    /**
     * Set dateCorrection.
     *
     * @param \Datetime $dateCorrection
     */
    public function setDateCorrection(\DateTime $dateCorrection = null)
    {
        $this->dateCorrection = $dateCorrection;
    }

    /**
     * Get dateCorrection.
     *
     * @return \Datetime
     */
    public function getDateCorrection()
    {
        return $this->dateCorrection;
    }

    /**
     * Set markMode.
     *
     * @param string $markMode
     */
    public function setMarkMode($markMode)
    {
        $this->markMode = $markMode;
    }

    /**
     * Get markMode.
     *
     * @return string
     */
    public function getMarkMode()
    {
        return $this->markMode;
    }

    /**
     * Set interruptible.
     *
     * @param bool $interruptible
     */
    public function setInterruptible($interruptible)
    {
        $this->interruptible = $interruptible;
    }

    /**
     * Is interruptible?
     *
     * @return bool
     */
    public function isInterruptible()
    {
        return $this->interruptible;
    }

    /**
     * Set visibility of metadata.
     *
     * @param bool $visible
     */
    public function setMetadataVisible($visible)
    {
        $this->metadataVisible = $visible;
    }

    /**
     * Are metadata visible ?
     *
     * @return bool
     */
    public function isMetadataVisible()
    {
        return $this->metadataVisible;
    }

    /**
     * Do the current exercise include statistics ?
     *
     * @return bool
     */
    public function hasStatistics()
    {
        return $this->statistics;
    }

    /**
     * Set statistics.
     *
     * @param bool $statistics
     */
    public function setStatistics($statistics)
    {
        $this->statistics = $statistics;
    }

    /**
     * Set minimal correction.
     *
     * @param bool $minimalCorrection
     */
    public function setMinimalCorrection($minimalCorrection)
    {
        $this->minimalCorrection = $minimalCorrection;
    }

    /**
     * Do we have to show the minimal correction view ?
     *
     * @return bool
     */
    public function isMinimalCorrection()
    {
        return $this->minimalCorrection;
    }

    /**
     * @return bool
     */
    public function wasPublishedOnce()
    {
        return $this->wasPublishedOnce;
    }

    /**
     * @param bool $wasPublishedOnce
     */
    public function setPublishedOnce($wasPublishedOnce)
    {
        $this->wasPublishedOnce = $wasPublishedOnce;
    }

    /**
     * Set anonymize attempts.
     *
     * @param bool $anonymizeAttempts
     */
    public function setAnonymizeAttempts($anonymizeAttempts)
    {
        $this->anonymizeAttempts = $anonymizeAttempts;
    }

    /**
     * Get anonymize attempts.
     *
     * @return bool
     */
    public function getAnonymizeAttempts()
    {
        return $this->anonymizeAttempts;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return ArrayCollection
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * Gets a step by its UUID.
     *
     * @param $uuid
     *
     * @return Step|null
     */
    public function getStep($uuid)
    {
        $foundStep = null;
        foreach ($this->steps as $step) {
            if ($step->getUuid() === $uuid) {
                $foundStep = $step;
                break;
            }
        }

        return $foundStep;
    }

    /**
     * Adds a step to the Exercise.
     *
     * @param Step $step
     *
     * @return $this
     */
    public function addStep(Step $step)
    {
        if (!$this->steps->contains($step)) {
            $step->setOrder($this->steps->count());
            $this->steps->add($step);
            $step->setExercise($this);
        }

        return $this;
    }

    /**
     * Removes a Step from the Exercise.
     *
     * @param Step $step
     *
     * @return $this
     */
    public function removeStep(Step $step)
    {
        if ($this->steps->contains($step)) {
            $this->steps->removeElement($step);
        }

        return $this;
    }

    /**
     * Sets show feedback.
     *
     * @param bool $showFeedback
     */
    public function setShowFeedback($showFeedback)
    {
        $this->showFeedback = $showFeedback;
    }

    /**
     * Gets show feedback.
     *
     * @return bool
     */
    public function getShowFeedback()
    {
        return $this->showFeedback;
    }
}
