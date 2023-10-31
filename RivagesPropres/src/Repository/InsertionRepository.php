<?php

namespace App\Repository;

use App\Entity\Insertion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Insertion>
 *
 * @method Insertion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Insertion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Insertion[]    findAll()
 * @method Insertion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InsertionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Insertion::class);
    }

//    /**
//     * @return Insertion[] Returns an array of Insertion objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Insertion
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
