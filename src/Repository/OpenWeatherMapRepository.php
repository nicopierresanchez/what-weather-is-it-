<?php

namespace App\Repository;

use App\Entity\OpenWeatherMap;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OpenWeatherMap|null find($id, $lockMode = null, $lockVersion = null)
 * @method OpenWeatherMap|null findOneBy(array $criteria, array $orderBy = null)
 * @method OpenWeatherMap[]    findAll()
 * @method OpenWeatherMap[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OpenWeatherMapRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OpenWeatherMap::class);
    }

}