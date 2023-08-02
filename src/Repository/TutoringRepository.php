<?php

namespace App\Repository;

use App\Entity\Tutoring;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tutoring>
 *
 * @method Tutoring|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tutoring|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tutoring[]    findAll()
 * @method Tutoring[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TutoringRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $managerRegistry)
    {
        parent::__construct($managerRegistry, Tutoring::class);
    }
}
