<?php

namespace FormaLibre\ReservationBundle\Entity;

use Claroline\AgendaBundle\Entity\Event;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use FormaLibre\ReservationBundle\Validator\Constraints as Validator;

/**
 * @ORM\Table(name="formalibre_reservation")
 * @ORM\Entity(repositoryClass="FormaLibre\ReservationBundle\Repository\ReservationRepository")
 * @ORM\HasLifecycleCallbacks()
 * @Validator\DateRange()
 * @Validator\Duration()
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="FormaLibre\ReservationBundle\Entity\Resource", inversedBy="reservations")
     * @ORM\JoinColumn(name="resource", nullable=false, onDelete="cascade")
     * @Assert\NotNull()
     */
    private $resource;

    /**
     * @ORM\OneToOne(targetEntity="Claroline\AgendaBundle\Entity\Event", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE", name="event_id")
     */
    private $event;

    /**
     * @ORM\Column(type="string", nullable=true, length=255)
     * @Assert\Length(max=255)
     */
    private $comment;

    /**
     * @ORM\Column(name="last_modification", type="datetime")
     */
    private $lastModification;

    /**
     * @Assert\NotBlank()
     */
    private $duration;

    private $start;

    private $end;

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updateLastModification()
    {
        $this->lastModification = new \DateTime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    public function getResource()
    {
        return $this->resource;
    }

    public function setResource(Resource $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    public function getEvent()
    {
        return $this->event;
    }

    public function setEvent(Event $event)
    {
        $this->event = $event;

        return $this;
    }

    //Returns a String for the DateTimePicker of the ReservationType
    public function getStart()
    {
        return date('d/m/Y H:i', $this->start);
    }

    public function setStart($start)
    {
        if (is_string($start)) {
            $dateTime = \DateTime::createFromFormat('d/m/Y H:i', $start);
            if (!$dateTime) {
                $this->start = null;
            } else {
                $this->start = $dateTime->getTimestamp();
            }
        } else {
            $this->start = $start;
        }

        return $this;
    }

    public function getStartInTimestamp()
    {
        return $this->start;
    }

    //Returns a String for the DateTimePicker of the ReservationType
    public function getEnd()
    {
        return date('d/m/Y H:i', $this->end);
    }

    public function getEndInTimestamp()
    {
        return $this->end;
    }

    public function setEnd($end)
    {
        if (is_string($end)) {
            $dateTime = \DateTime::createFromFormat('d/m/Y H:i', $end);
            if (!$dateTime) {
                $this->end = null;
            } else {
                $this->end = $dateTime->getTimestamp();
            }
        } else {
            $this->end = $end;
        }

        return $this;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set lastModification.
     *
     * @param \DateTime $lastModification
     *
     * @return Reservation
     */
    public function setLastModification($lastModification)
    {
        $this->lastModification = $lastModification;

        return $this;
    }

    /**
     * Get lastModification.
     *
     * @return \DateTime
     */
    public function getLastModification()
    {
        return $this->lastModification;
    }
}
