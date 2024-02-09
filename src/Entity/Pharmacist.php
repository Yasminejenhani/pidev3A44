<?php

namespace App\Entity;

use App\Repository\PharmacistRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PharmacistRepository::class)]
class Pharmacist extends User
{
   
}
