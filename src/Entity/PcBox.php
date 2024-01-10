<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PcBoxRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PcBoxRepository::class)]
#[ApiResource]
class PcBox
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $level = null;

    #[ORM\Column]
    private ?bool $captured = null;

    #[ORM\ManyToOne(inversedBy: 'pcBoxes')]
    private ?Trainer $idTrainer = null;

    #[ORM\ManyToOne(inversedBy: 'pcBoxes')]
    private ?Pokemon $idPokemon = null;

    public function __construct()
    {

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(?int $level): static
    {
        $this->level = $level;

        return $this;
    }

    public function isCaptured(): ?bool
    {
        return $this->captured;
    }

    public function setCaptured(bool $captured): static
    {
        $this->captured = $captured;

        return $this;
    }

    public function getIdTrainer(): ?Trainer
    {
        return $this->idTrainer;
    }

    public function setIdTrainer(?Trainer $idTrainer): static
    {
        $this->idTrainer = $idTrainer;

        return $this;
    }

    public function getIdPokemon(): ?Pokemon
    {
        return $this->idPokemon;
    }

    public function setIdPokemon(?Pokemon $idPokemon): static
    {
        $this->idPokemon = $idPokemon;

        return $this;
    }
}
