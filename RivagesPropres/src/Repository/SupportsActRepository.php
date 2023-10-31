<?php

namespace App\Repository;

use App\Entity\SupportsAct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SupportsAct>
 *
 * @method SupportsAct|null find($id, $lockMode = null, $lockVersion = null)
 * @method SupportsAct|null findOneBy(array $criteria, array $orderBy = null)
 * @method SupportsAct[]    findAll()
 * @method SupportsAct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SupportsActRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SupportsAct::class);
    }

//    /**
//     * @return SupportsAct[] Returns an array of SupportsAct objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SupportsAct
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
