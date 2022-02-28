<?php

namespace App\Repository;

use App\Entity\LisProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LisProduct|null find($id, $lockMode = null, $lockVersion = null)
 * @method LisProduct|null findOneBy(array $criteria, array $orderBy = null)
 * @method LisProduct[]    findAll()
 * @method LisProduct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LisProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LisProduct::class);
    }

    // /**
    //  * @return LisProduct[] Returns an array of LisProduct objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LisProduct
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
