<?php

namespace App\Entity;

use App\Repository\ContractPropertyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContractPropertyRepository::class)]
class ContractProperty extends Contract
{
   
}
