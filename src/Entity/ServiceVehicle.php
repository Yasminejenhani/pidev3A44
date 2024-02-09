<?php

namespace App\Entity;

use App\Repository\ServiceVehicleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceVehicleRepository::class)]
class ServiceVehicle extends Service
{
    
}
