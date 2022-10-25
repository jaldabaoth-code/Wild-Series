<?php

namespace App\Repository;

use App\Entity\Season;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Season|null find($id, $lockMode = null, $lockVersion = null)
 * @method Season|null findOneBy(array $criteria, array $orderBy = null)
 * @method Season[]    findAll()
 * @method Season[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SeasonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Season::class);
    }

    public function findLikeName(string $name): array
    {
        $queryBuilder = $this->createQueryBuilder('sea')
            ->join('sea.actors', 'a')
            ->join('sea.series', 'ser')
            ->where('ser.title LIKE :name')
            ->setParameter('name', '%' . $name . '%')
            ->orWhere('a.name LIKE :actor')
            ->setParameter('actor', '%' . $name . '%')
            ->orderBy('ser.title', 'ASC')
            ->getQuery();

        return $queryBuilder->getResult();
    }
}
