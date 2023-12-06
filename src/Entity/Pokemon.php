<?php

namespace App\Entity;

use App\Repository\PokemonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PokemonRepository::class)]
class Pokemon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idPokedex = null;

    #[ORM\Column(length: 30)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 30)]
    private ?string $typeFirst = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $typeSecond = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $spritePath = null;

    #[ORM\ManyToMany(targetEntity: PcBox::class, mappedBy: 'idTrainer')]
    private Collection $pcBoxes;

    #[ORM\ManyToOne(inversedBy: 'idPokemon')]
    private ?PcBox $pcBox = null;

    public function __construct()
    {
        $this->pcBoxes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPokedex(): ?int
    {
        return $this->idPokedex;
    }

    public function setIdPokedex(int $idPokedex): static
    {
        $this->idPokedex = $idPokedex;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getTypeFirst(): ?string
    {
        return $this->typeFirst;
    }

    public function setTypeFirst(string $typeFirst): static
    {
        $this->typeFirst = $typeFirst;

        return $this;
    }

    public function getTypeSecond(): ?string
    {
        return $this->typeSecond;
    }

    public function setTypeSecond(string $typeSecond): static
    {
        $this->typeSecond = $typeSecond;

        return $this;
    }

    public function getSpritePath(): ?string
    {
        return $this->spritePath;
    }

    public function setSpritePath(?string $spritePath): static
    {
        $this->spritePath = $spritePath;

        return $this;
    }

    /**
     * @return Collection<int, PcBox>
     */
    public function getPcBoxes(): Collection
    {
        return $this->pcBoxes;
    }

    public function addPcBox(PcBox $pcBox): static
    {
        if (!$this->pcBoxes->contains($pcBox)) {
            $this->pcBoxes->add($pcBox);
            $pcBox->addIdTrainer($this);
        }

        return $this;
    }

    public function removePcBox(PcBox $pcBox): static
    {
        if ($this->pcBoxes->removeElement($pcBox)) {
            $pcBox->removeIdTrainer($this);
        }

        return $this;
    }

    public function getPcBox(): ?PcBox
    {
        return $this->pcBox;
    }

    public function setPcBox(?PcBox $pcBox): static
    {
        $this->pcBox = $pcBox;

        return $this;
    }
}
