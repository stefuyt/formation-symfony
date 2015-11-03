<?php

namespace AppBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;


/**
 * Trait TimeStampableTrait
 */
trait TimeStampableTrait
{

    /**
     * @var
     * @ORM\Column(name="createdAt", type="datetime", nullable=true)
     */
    protected $createdAt;

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function handleTimeStamp()
    {
        $this->setCreatedAt(new \DateTime('now'));
    }


}