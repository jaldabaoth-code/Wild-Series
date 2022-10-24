<?php

namespace App\Repository;

use App\Entity\Series;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Series|null find($id, $lockMode = null, $lockVersion = null)
 * @method Series|null findOneBy(array $criteria, array $orderBy = null)
 * @method Series[]    findAll()
 * @method Series[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SeriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Series::class);
    }

    // /**
    //  * @return Series[] Returns an array of Series objects
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
       
    public function findOneBySomeField($value): ?Series
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }*/
/*
    public function findLikeName(string $name): array
    {
        $queryBuilder = $this->createQueryBuilder('ser')
            ->join('ser.actors', 'a')
            ->where('ser.title LIKE :name')
            ->setParameter('name', '%' . $name . '%')
            ->orWhere('a.name LIKE :actor')
            ->setParameter('actor', '%' . $name . '%')
            ->orderBy('ser.title', 'ASC')
            ->getQuery();

        return $queryBuilder->getResult();
    }*/


    public function findLikeName(string $name): array
    {
        $queryBuilder = $this->createQueryBuilder('series')
            ->join('series.seasons', 'season')
            ->join('season.actors', 'actor')
            ->where('series.title LIKE :name')
            ->setParameter('name', '%' . $name . '%')
            ->orWhere('actor.name LIKE :actor')
            ->setParameter('actor', '%' . $name . '%')
            ->orderBy('series.title', 'ASC')
            ->getQuery();

        return $queryBuilder->getResult();
    }

    public function findAllWithCategoriesAndTags()
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT a, c, t FROM App\Entity\Article a INNER JOIN a.category c INNER JOIN a.tags t');

        return $query->execute();
    }
}
