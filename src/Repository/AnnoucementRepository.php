<?php


namespace App\Repository;

// src/Repository/ProductRepository.php
use App\Entity\AnnoucementEntity;
use App\Entity\CreateAnnoucement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class AnnoucementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AnnoucementEntity::class);
    }


    public function findAnnoucements($limit): array
    {
        return $this->createQueryBuilder('annoucement')
            ->orderBy('annoucement.id', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public  function  findAnnoucementsdetails($id): array
    {
        return $this->createQueryBuilder('annoucement')
            ->where('annoucement.id = :id')
            ->setParameter('id', $id)
            ->orderBy('annoucement.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

}