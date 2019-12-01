<?php

namespace App\Repository;

use App\Entity\Patisseries;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Patisseries|null find($id, $lockMode = null, $lockVersion = null)
 * @method Patisseries|null findOneBy(array $criteria, array $orderBy = null)
 * @method Patisseries[]    findAll()
 * @method Patisseries[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PatisseriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Patisseries::class);
    }

    // /**
    //  * @return Patisseries[] Returns an array of Patisseries objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Patisseries
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
