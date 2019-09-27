<?php


namespace App\Service;


use App\DTO\CreateAnnoucement;
use App\Entity\AnnoucementEntity;
use App\Repository\AnnoucementRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectManager;
use phpDocumentor\Reflection\Types\Object_;

class UserManagerService
{
    private $repository;
    private $manager;

    public function __construct(AnnoucementRepository $repository, ObjectManager $manager)
    {
        $this->repository = $repository;
        $this->manager = $manager;
    }

    public function save(CreateAnnoucement $CreateAnnoucement){
        $a = new AnnoucementEntity($CreateAnnoucement);
        $this->manager->persist($a);
        $this->manager->flush();
    }


    public function findAnnoucements($limit)
    {
        return $this->manager
            ->getRepository(AnnoucementEntity::class)
            ->findAnnoucements($limit);

    }

    public  function findAnnoucementsdetails($id)
    {
        return $this->manager
            ->getRepository(AnnoucementEntity::class)
            ->findAnnoucementsdetails($id);

    }


}