<?php

namespace App\Repository;

use App\Entity\Pharmacist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pharmacist>
 *
 * @method Pharmacist|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pharmacist|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pharmacist[]    findAll()
 * @method Pharmacist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PharmacistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pharmacist::class);
    }

//    /**
//     * @return Pharmacist[] Returns an array of Pharmacist objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Pharmacist
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
