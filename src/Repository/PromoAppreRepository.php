<?php

namespace App\Repository;

use App\Entity\PromoAppre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method PromoAppre|null find($id, $lockMode = null, $lockVersion = null)
 * @method PromoAppre|null findOneBy(array $criteria, array $orderBy = null)
 * @method PromoAppre[]    findAll()
 * @method PromoAppre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PromoAppreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PromoAppre::class);
    }

    
}
