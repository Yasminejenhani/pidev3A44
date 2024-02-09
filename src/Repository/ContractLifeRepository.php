<?php

namespace App\Repository;

use App\Entity\ContractLife;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ContractLife>
 *
 * @method ContractLife|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContractLife|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContractLife[]    findAll()
 * @method ContractLife[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContractLifeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContractLife::class);
    }

//    /**
//     * @return ContractLife[] Returns an array of ContractLife objects
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

//    public function findOneBySomeField($value): ?ContractLife
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
