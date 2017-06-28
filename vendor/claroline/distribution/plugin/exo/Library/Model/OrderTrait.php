<?php

namespace UJM\ExoBundle\Library\Model;

/**
 * Gives an entity the ability to be ordered in a collection.
 */
trait OrderTrait
{
    /**
     * Order of the element.
     *
     * @var int
     *
     * @ORM\Column(name="entity_order", type="integer")
     */
    private $order = 0;

    /**
     * Sets order.
     *
     * @param int $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * Gets order.
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }
}
