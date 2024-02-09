<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
#[ORM\InheritanceType("JOINED")]
#[ORM\DiscriminatorColumn(name: "type", type: "string")]
#[ORM\DiscriminatorMap(array(
    "serviceVehicule" => "ServiceVehicle",
    "serviceLife" => "ServiceLife",
    "serviceProperty" => "ServiceProperty"
))]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToMany(targetEntity: Devis::class, inversedBy: 'services')]
    private Collection $ServiceDevis;

    public function __construct()
    {
        $this->ServiceDevis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Devis>
     */
    public function getServiceDevis(): Collection
    {
        return $this->ServiceDevis;
    }

    public function addServiceDevi(Devis $serviceDevi): static
    {
        if (!$this->ServiceDevis->contains($serviceDevi)) {
            $this->ServiceDevis->add($serviceDevi);
        }

        return $this;
    }

    public function removeServiceDevi(Devis $serviceDevi): static
    {
        $this->ServiceDevis->removeElement($serviceDevi);

        return $this;
    }
}
