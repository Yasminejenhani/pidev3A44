<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\InheritanceType("JOINED")]
#[ORM\DiscriminatorColumn(name: "type", type: "string")]
#[ORM\DiscriminatorMap(array(
    "expert" => "Expert",
    "pharmacist" => "Pharmacist",
    "client" => "Client",
    "doctor" => "Doctor",
    "agent" => "Agent",
    "admin" => "Admin"
))]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $cin = null;

    #[ORM\Column(length: 20)]
    private ?string $firstName = null;

    #[ORM\Column(length: 20)]
    private ?string $lastName = null;

    #[ORM\Column(length: 50)]
    private ?string $email = null;

    #[ORM\Column(length: 50)]
    private ?string $address = null;

    #[ORM\Column(length: 20)]
    private ?string $phoneNumber = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;


    #[ORM\OneToMany(targetEntity: Sinister::class, mappedBy: 'sinisterUser')]
    private Collection $theSinisters;

    #[ORM\OneToMany(targetEntity: InsuranceRequest::class, mappedBy: 'requestUser')]
    private Collection $insuranceRequests;

    #[ORM\OneToMany(targetEntity: Contract::class, mappedBy: 'contractUser')]
    private Collection $contracts;

    #[ORM\OneToMany(targetEntity: Reclamation::class, mappedBy: 'reclamationUser')]
    private Collection $reclamations;

    public function __construct()
    {
        $this->sinisters = new ArrayCollection();
        $this->theSinisters = new ArrayCollection();
        $this->insuranceRequests = new ArrayCollection();
        $this->contracts = new ArrayCollection();
        $this->reclamations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): static
    {
        $this->cin = $cin;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): static
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return Collection<int, Sinister>
     */
    public function getSinisters(): Collection
    {
        return $this->sinisters;
    }

    public function addSinister(Sinister $sinister): static
    {
        if (!$this->sinisters->contains($sinister)) {
            $this->sinisters->add($sinister);
            $sinister->setSinisters($this);
        }

        return $this;
    }

    public function removeSinister(Sinister $sinister): static
    {
        if ($this->sinisters->removeElement($sinister)) {
            // set the owning side to null (unless already changed)
            if ($sinister->getSinisters() === $this) {
                $sinister->setSinisters(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Sinister>
     */
    public function getTheSinisters(): Collection
    {
        return $this->theSinisters;
    }

    public function addTheSinister(Sinister $theSinister): static
    {
        if (!$this->theSinisters->contains($theSinister)) {
            $this->theSinisters->add($theSinister);
            $theSinister->setSinisterUser($this);
        }

        return $this;
    }

    public function removeTheSinister(Sinister $theSinister): static
    {
        if ($this->theSinisters->removeElement($theSinister)) {
            // set the owning side to null (unless already changed)
            if ($theSinister->getSinisterUser() === $this) {
                $theSinister->setSinisterUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, InsuranceRequest>
     */
    public function getInsuranceRequests(): Collection
    {
        return $this->insuranceRequests;
    }

    public function addInsuranceRequest(InsuranceRequest $insuranceRequest): static
    {
        if (!$this->insuranceRequests->contains($insuranceRequest)) {
            $this->insuranceRequests->add($insuranceRequest);
            $insuranceRequest->setRequestUser($this);
        }

        return $this;
    }

    public function removeInsuranceRequest(InsuranceRequest $insuranceRequest): static
    {
        if ($this->insuranceRequests->removeElement($insuranceRequest)) {
            // set the owning side to null (unless already changed)
            if ($insuranceRequest->getRequestUser() === $this) {
                $insuranceRequest->setRequestUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Contract>
     */
    public function getContracts(): Collection
    {
        return $this->contracts;
    }

    public function addContract(Contract $contract): static
    {
        if (!$this->contracts->contains($contract)) {
            $this->contracts->add($contract);
            $contract->setContractUser($this);
        }

        return $this;
    }

    public function removeContract(Contract $contract): static
    {
        if ($this->contracts->removeElement($contract)) {
            // set the owning side to null (unless already changed)
            if ($contract->getContractUser() === $this) {
                $contract->setContractUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Reclamation>
     */
    public function getReclamations(): Collection
    {
        return $this->reclamations;
    }

    public function addReclamation(Reclamation $reclamation): static
    {
        if (!$this->reclamations->contains($reclamation)) {
            $this->reclamations->add($reclamation);
            $reclamation->setReclamationUser($this);
        }

        return $this;
    }

    public function removeReclamation(Reclamation $reclamation): static
    {
        if ($this->reclamations->removeElement($reclamation)) {
            // set the owning side to null (unless already changed)
            if ($reclamation->getReclamationUser() === $this) {
                $reclamation->setReclamationUser(null);
            }
        }

        return $this;
    }
}
