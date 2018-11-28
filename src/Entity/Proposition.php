<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Traits\TimestampableTrait;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PropositionRepository")
 */
class Proposition
{
    use TimestampableTrait;
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     * @Assert\NotNull
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotNull
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\NotNull
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=20)
     * @Assert\NotNull
     */
    private $type;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull
     */
    private $progression;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getProgression(): ?int
    {
        return $this->progression;
    }

    public function setProgression(int $progression): self
    {
        $this->progression = $progression;

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
