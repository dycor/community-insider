<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MarkRepository")
 */
class Mark
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $thumbup;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Proposition")
     */
    private $proposition;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getThumbup(): ?bool
    {
        return $this->thumbup;
    }

    public function setThumbup(bool $thumbup): self
    {
        $this->thumbup = $thumbup;

        return $this;
    }

    public function getProposition(): ?Proposition
    {
        return $this->proposition;
    }

    public function setProposition(?Proposition $proposition): self
    {
        $this->proposition = $proposition;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
