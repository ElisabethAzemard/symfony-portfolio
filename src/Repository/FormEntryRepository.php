<?php

namespace App\Repository;

use App\Entity\FormEntry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FormEntry|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormEntry|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormEntry[]    findAll()
 * @method FormEntry[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormEntryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FormEntry::class);
    }

    // /**
    //  * @return FormEntry[] Returns an array of FormEntry objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FormEntry
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
