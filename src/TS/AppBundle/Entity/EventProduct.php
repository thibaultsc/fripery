<?php

namespace TS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * EventProduct
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EventProduct
{
    use TimestampableEntity;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="TS\AppBundle\Entity\Event")
     * @ORM\JoinColumn(nullable=false)
     */
    private $event;

    /**
     * @ORM\ManyToOne(targetEntity="TS\AppBundle\Entity\Product", inversedBy="eventProducts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

  

    /**
     * Set event
     *
     * @param \TS\AppBundle\Entity\Event $event
     * @return EventProduct
     */
    public function setEvent(\TS\AppBundle\Entity\Event $event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \TS\AppBundle\Entity\Event 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set product
     *
     * @param \TS\AppBundle\Entity\Product $product
     * @return EventProduct
     */
    public function setProduct(\TS\AppBundle\Entity\Product $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \TS\AppBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
