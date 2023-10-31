<?php

namespace App\Repository;

use App\Entity\ParagrapheDémarcheQ;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ParagrapheDémarcheQ>
 *
 * @method ParagrapheDémarcheQ|null find($id, $lockMode = null, $lockVersion = null)
 * @method ParagrapheDémarcheQ|null findOneBy(array $criteria, array $orderBy = null)
 * @method ParagrapheDémarcheQ[]    findAll()
 * @method ParagrapheDémarcheQ[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParagrapheDémarcheQRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ParagrapheDémarcheQ::class);
    }

//    /**
//     * @return ParagrapheDémarcheQ[] Returns an array of ParagrapheDémarcheQ objects
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

//    public function findOneBySomeField($value): ?ParagrapheDémarcheQ
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
