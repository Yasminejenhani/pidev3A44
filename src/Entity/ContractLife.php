<?php

namespace App\Entity;

use App\Repository\ContractLifeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContractLifeRepository::class)]
class ContractLife extends Contract
{
   
}
