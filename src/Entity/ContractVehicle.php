<?php

namespace App\Entity;

use App\Repository\ContractVehicleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContractVehicleRepository::class)]
class ContractVehicle extends Contract
{


    #[ORM\Column(length: 255)]
    private ?string $immatriculation = null;

    #[ORM\Column(length: 10)]
    private ?string $fiscalPower = null;

   

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
