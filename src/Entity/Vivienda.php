<?php

namespace App\Entity;

use App\Repository\ViviendaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ViviendaRepository::class)]
class Vivienda
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $houseName = null;

    #[ORM\Column(length: 255)]
    private ?string $houseImg = null;

    #[ORM\Column(length: 255)]
    private ?string $houseType = null;

    #[ORM\Column]
    private ?int $houseSurface = null;

    #[ORM\Column]
    private ?int $houseRooms = null;

    #[ORM\Column(length: 500)]
    private ?string $houseDescription = null;

    #[ORM\Column]
    private ?int $houseBedrooms = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHouseName(): ?string
    {
        return $this->houseName;
    }

    public function setHouseName(string $houseName): static
    {
        $this->houseName = $houseName;

        return $this;
    }

    public function getHouseImg(): ?string
    {
        return $this->houseImg;
    }

    public function setHouseImg(string $houseImg): static
    {
        $this->houseImg = $houseImg;

        return $this;
    }

    public function getHouseType(): ?string
    {
        return $this->houseType;
    }

    public function setHouseType(string $houseType): static
    {
        $this->houseType = $houseType;

        return $this;
    }

    public function getHouseSurface(): ?int
    {
        return $this->houseSurface;
    }

    public function setHouseSurface(int $houseSurface): static
    {
        $this->houseSurface = $houseSurface;

        return $this;
    }

    public function getHouseRooms(): ?int
    {
        return $this->houseRooms;
    }

    public function setHouseRooms(int $houseRooms): static
    {
        $this->houseRooms = $houseRooms;

        return $this;
    }

    public function getHouseDescription(): ?string
    {
        return $this->houseDescription;
    }

    public function setHouseDescription(string $houseDescription): static
    {
        $this->houseDescription = $houseDescription;

        return $this;
    }

    public function getHouseBedrooms(): ?int
    {
        return $this->houseBedrooms;
    }

    public function setHouseBedrooms(int $houseBedrooms): static
    {
        $this->houseBedrooms = $houseBedrooms;

        return $this;
    }
}
