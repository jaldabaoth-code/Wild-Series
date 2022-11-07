<?php

namespace App\Repository;

use App\Entity\Watchlist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Watchlist>
 * @method Watchlist|null find($id, $lockMode = null, $lockVersion = null)
 * @method Watchlist|null findOneBy(array $criteria, array $orderBy = null)
 * @method Watchlist[]    findAll()
 * @method Watchlist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WatchlistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Watchlist::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Watchlist $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Watchlist $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }
}
