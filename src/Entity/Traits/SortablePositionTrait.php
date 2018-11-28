<?php

namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

trait SortablePositionTrait {
    /**
     * @Gedmo\SortablePosition
     * @ORM\Column(type="integer")
     */
    private $position;

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function getPosition()
    {
        return $this->position;
    }

}
