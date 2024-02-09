<?php

namespace App\Entity;

use App\Repository\SinisterVehicleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SinisterVehicleRepository::class)]
class SinisterVehicle extends Sinister
{
 
    #[ORM\Column(length: 30)]
    private ?string $serialNumber = null;

    #[ORM\Column(length: 255)]
    private ?string $immatriculation = null;

    #[ORM\Column(length: 10)]
    private ?string $fiscalPower = null;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }

    public function setSerialNumber(string $serialNumber): static
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(string $immatriculation): static
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getFiscalPower(): ?string
    {
        return $this->fiscalPower;
    }

    public function setFiscalPower(string $fiscalPower): static
    {
        $this->fiscalPower = $fiscalPower;

        return $this;
    }
}
