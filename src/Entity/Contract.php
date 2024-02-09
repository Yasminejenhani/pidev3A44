<?php

namespace App\Entity;

use App\Repository\ContractRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContractRepository::class)]
#[ORM\InheritanceType("JOINED")]
#[ORM\DiscriminatorColumn(name: "type", type: "string")]
#[ORM\DiscriminatorMap(array(
    "contractVehicule" => "ContractVehicle",
    "contractLife" => "ContractLife",
    "contractProperty" => "ContractProperty"
))]
class Contract
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateContract = null;

    #[ORM\ManyToOne(inversedBy: 'contracts')]
    private ?user $contractUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateContract(): ?\DateTimeInterface
    {
        return $this->dateContract;
    }

    public function setDateContract(\DateTimeInterface $dateContract): static
    {
        $this->dateContract = $dateContract;

        return $this;
    }

    public function getContractUser(): ?user
    {
        return $this->contractUser;
    }

    public function setContractUser(?user $contractUser): static
    {
        $this->contractUser = $contractUser;

        return $this;
    }
}
