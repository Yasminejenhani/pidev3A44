<?php

namespace App\Repository;

use App\Entity\ContractProperty;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ContractProperty>
 *
 * @method ContractProperty|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContractProperty|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContractProperty[]    findAll()
 * @method ContractProperty[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContractPropertyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContractProperty::class);
    }

//    /**
//     * @return ContractProperty[] Returns an array of ContractProperty objects
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

//    public function findOneBySomeField($value): ?ContractProperty
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
