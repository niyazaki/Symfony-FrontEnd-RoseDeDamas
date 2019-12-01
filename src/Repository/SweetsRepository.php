<?php

namespace App\Repository;

use App\Entity\Sweets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Sweets|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sweets|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sweets[]    findAll()
 * @method Sweets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SweetsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sweets::class);
    }

    // /**
    //  * @return Sweets[] Returns an array of Sweets objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Sweets
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
