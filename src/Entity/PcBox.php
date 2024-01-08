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

    #[ORM\OneToMany(mappedBy: 'pcBox', targetEntity: trainer::class)]
    private Collection $idTrainer;

    #[ORM\OneToMany(mappedBy: 'pcBox', targetEntity: Pokemon::class)]
    private Collection $idPokemon;

    #[ORM\Column(nullable: true)]
    private ?int $level = null;

    #[ORM\Column]
    private ?bool $captured = null;

    public function __construct()
    {
        $this->idTrainer = new ArrayCollection();
        $this->idPokemon = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, trainer>
     */
    public function getIdTrainer(): Collection
    {
        return $this->idTrainer;
    }

    public function addIdTrainer(trainer $idTrainer): static
    {
        if (!$this->idTrainer->contains($idTrainer)) {
            $this->idTrainer->add($idTrainer);
            $idTrainer->setPcBox($this);
        }

        return $this;
    }

    public function removeIdTrainer(trainer $idTrainer): static
    {
        if ($this->idTrainer->removeElement($idTrainer)) {
            // set the owning side to null (unless already changed)
            if ($idTrainer->getPcBox() === $this) {
                $idTrainer->setPcBox(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Pokemon>
     */
    public function getIdPokemon(): Collection
    {
        return $this->idPokemon;
    }

    public function addIdPokemon(Pokemon $idPokemon): static
    {
        if (!$this->idPokemon->contains($idPokemon)) {
            $this->idPokemon->add($idPokemon);
            $idPokemon->setPcBox($this);
        }

        return $this;
    }

    public function removeIdPokemon(Pokemon $idPokemon): static
    {
        if ($this->idPokemon->removeElement($idPokemon)) {
            // set the owning side to null (unless already changed)
            if ($idPokemon->getPcBox() === $this) {
                $idPokemon->setPcBox(null);
            }
        }

        return $this;
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

}
