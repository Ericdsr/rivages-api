<?php

namespace App\Repository;

use App\Entity\Historique1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Historique1>
 *
 * @method Historique1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Historique1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Historique1[]    findAll()
 * @method Historique1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Historique1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Historique1::class);
    }

//    /**
//     * @return Historique1[] Returns an array of Historique1 objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Historique1
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
