<?php

namespace App\Entity;

use App\Repository\SinisterPropertyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SinisterPropertyRepository::class)]
class SinisterProperty extends Sinister
{
   

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $damages = null;


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDamages(): ?string
    {
        return $this->damages;
    }

    public function setDamages(string $damages): static
    {
        $this->damages = $damages;

        return $this;
    }
}
