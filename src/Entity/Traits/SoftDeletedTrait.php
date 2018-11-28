<?php

namespace App\Entity\Traits;

use Gedmo\Mapping\Annotation as Gedmo;

trait SoftDeletedTrait {

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $deletedAt;

    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;
    }
}
