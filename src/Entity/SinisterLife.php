<?php

namespace App\Entity;

use App\Repository\SinisterLifeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SinisterLifeRepository::class)]
class SinisterLife extends Sinister
{


    #[ORM\Column(length: 255)]
    private ?string $description = null;



    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }


}
