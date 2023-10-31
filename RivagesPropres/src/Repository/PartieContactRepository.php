<?php

namespace App\Repository;

use App\Entity\PartieContact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PartieContact>
 *
 * @method PartieContact|null find($id, $lockMode = null, $lockVersion = null)
 * @method PartieContact|null findOneBy(array $criteria, array $orderBy = null)
 * @method PartieContact[]    findAll()
 * @method PartieContact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PartieContactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PartieContact::class);
    }

//    /**
//     * @return PartieContact[] Returns an array of PartieContact objects
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

//    public function findOneBySomeField($value): ?PartieContact
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
