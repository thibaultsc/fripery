<?php

namespace TS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
/**
 * ProductUser
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ProductUser
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
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;
    
     /**
     * @ORM\ManyToOne(targetEntity="TS\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="TS\AppBundle\Entity\Product", inversedBy="productUsers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;

    /**
     * @var integer
     *
     * @ORM\Column(name="mark", type="integer", length=255, nullable=true)
     */
    private $mark;
    
    
     /**
     * @var integer
     *
     * @ORM\Column(name="likes", type="integer", length=255, nullable=true)
     */
    private $likes;
    
    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=255, nullable=true)
     */
    private $comment;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="count", nullable=true)
     */
    private $count;
    
 
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
     * Set mark
     *
     * @param integer $mark
     * @return CommentProduct
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return integer 
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set likes
     *
     * @param integer $likes
     * @return CommentProduct
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * Get likes
     *
     * @return integer 
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return CommentProduct
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }


    /**
     * Set status
     *
     * @param string $status
     * @return ProductUser
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set user
     *
     * @param \TS\UserBundle\Entity\User $user
     * @return ProductUser
     */
    public function setUser(\TS\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \TS\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set product
     *
     * @param \TS\AppBundle\Entity\Product $product
     * @return ProductUser
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

    /**
     * Set count
     *
     * @param string $count
     * @return ProductUser
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return string 
     */
    public function getCount()
    {
        return $this->count;
    }

}
