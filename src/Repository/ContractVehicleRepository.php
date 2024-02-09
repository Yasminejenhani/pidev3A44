<?php

namespace App\Repository;

use App\Entity\ContractVehicle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ContractVehicle>
 *
 * @method ContractVehicle|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContractVehicle|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContractVehicle[]    findAll()
 * @method ContractVehicle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContractVehicleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContractVehicle::class);
    }

//    /**
//     * @return ContractVehicle[] Returns an array of ContractVehicle objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ContractVehicle
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
