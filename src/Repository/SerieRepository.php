<?php

namespace App\Repository;

use App\Entity\Serie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Serie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Serie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Serie[]    findAll()
 * @method Serie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SerieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Serie::class);
    }

    // /**
    //  * @return Serie[] Returns an array of Serie objects
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
       
    public function findOneBySomeField($value): ?Serie
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
        $queryBuilder = $this->createQueryBuilder('serie')
            ->join('serie.seasons', 'season')
            ->join('season.actors', 'actor')
            ->where('serie.title LIKE :name')
            ->setParameter('name', '%' . $name . '%')
            ->orWhere('actor.name LIKE :actor')
            ->setParameter('actor', '%' . $name . '%')
            ->orderBy('serie.title', 'ASC')
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
