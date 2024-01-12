<?php

namespace App\Entity;

use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\CollectionOperationInterface;
use ApiPlatform\Metadata\Post;
use App\Repository\PokemonRepository;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: PokemonRepository::class)]
#[ApiResource]
#[ApiFilter(SearchFilter::class, properties: ['type' => 'exact'])]
#[ApiFilter(SearchFilter::class, properties: ['idNat' => 'exact'])]

#[ApiFilter(SearchFilter::class, properties: ['idRegion.id' => 'exact'])]

class Pokemon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $idPokedex = null;

    #[ORM\Column(nullable: true)]
    private ?int $idNat = null;

    #[ORM\ManyToOne(inversedBy: 'pokemon')]
  
    private ?Region $idRegion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getType2(): ?string
    {
        return $this->type2;
    }

    public function setType2(?string $type2): static
    {
        $this->type2 = $type2;

        return $this;
    }

    public function getIdPokedex(): ?string
    {
        return $this->idPokedex;
    }

    public function setIdPokedex(?string $idPokedex): static
    {
        $this->idPokedex = $idPokedex;

        return $this;
    }

    public function getIdNat(): ?int
    {
        return $this->idNat;
    }

    public function setIdNat(?int $idNat): static
    {
        $this->idNat = $idNat;

        return $this;
    }

    public function getIdRegion(): ?Region
    {
        return $this->idRegion;
    }

    public function setIdRegion(?Region $idRegion): static
    {
        $this->idRegion = $idRegion;

        return $this;
    }
}
