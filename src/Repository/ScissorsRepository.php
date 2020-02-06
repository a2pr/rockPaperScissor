<?php

namespace App\Repository;

use App\Entity\Scissors;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Scissors|null find($id, $lockMode = null, $lockVersion = null)
 * @method Scissors|null findOneBy(array $criteria, array $orderBy = null)
 * @method Scissors[]    findAll()
 * @method Scissors[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScissorsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Scissors::class);
    }

    // /**
    //  * @return Scissors[] Returns an array of Scissors objects
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
    public function findOneBySomeField($value): ?Scissors
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
