<?php

namespace UJM\ExoBundle\Entity\Question;

use Claroline\CoreBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="ujm_share")
 */
class Shared
{
    /**
     * The user with whom the question is shared.
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Claroline\CoreBundle\Entity\User")
     * @ORM\JoinColumn(
     *     name="user_id",
     *     referencedColumnName="id",
     *     nullable=false,
     *     onDelete="CASCADE"
     * )
     *
     * @var User
     */
    private $user;

    /**
     * The shared question.
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="UJM\ExoBundle\Entity\Question\Question")
     * @ORM\JoinColumn(
     *     name="question_id",
     *     referencedColumnName="id",
     *     nullable=false,
     *     onDelete="CASCADE"
     * )
     *
     * @var Question
     */
    private $question;

    /**
     * Gives the user the ability to edit and delete the question.
     *
     * @ORM\Column(type="boolean")
     *
     * @var bool
     */
    private $adminRights = false;

    /**
     * Sets user.
     *
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * Gets user.
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets question.
     *
     * @param Question $question
     */
    public function setQuestion(Question $question)
    {
        $this->question = $question;
    }

    /**
     * Gets question.
     *
     * @return Question
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Sets admin right.
     *
     * @param bool $adminRights
     */
    public function setAdminRights($adminRights)
    {
        $this->adminRights = $adminRights;
    }

    /**
     * Does user have admin rights?
     *
     * @return bool
     */
    public function hasAdminRights()
    {
        return $this->adminRights;
    }
}
