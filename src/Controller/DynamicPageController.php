<?php


namespace App\Controller;
use App\DTO\CreateAnnoucement;
use App\Entity\AnnoucementEntity;
use App\Repository\AnnoucementRepository;
use App\Service\UserManagerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DynamicPageController extends AbstractController
{
    private $managerService;
    public function __construct(UserManagerService $managerService)
    {
        $this->managerService = $managerService;
    }


    /**
     * @Route(
     *     "/annoucements/{page}",
     *     name="page",
     *     defaults={"page"=1},
     *     requirements={"id"="[0-9]+"},
     * )
     */
    public function  index2(int $page)
    {
        $tableau_a = [
            ['id' => 1, 'title' => 'Annoucement 1', 'content' => 'content_titre1', 'price' => 10, 'created_date' => new\DateTime()],
            ['id' => 2, 'title' => 'Annoucement 2', 'content' => 'content_titre2', 'price' => 20, 'created_date' => new\DateTime()],
            ['id' => 3, 'title' => 'Annoucement 3', 'content' => 'content_titre3', 'price' => 30, 'created_date' => new\DateTime()],
            ['id' => 4, 'title' => 'Annoucement 4', 'content' => 'content_titre4', 'price' => 40, 'created_date' => new\DateTime()],
            ['id' => 5, 'title' => 'Annoucement 5', 'content' => 'content_titre5', 'price' => 50, 'created_date' => new\DateTime()],
            ['id' => 6, 'title' => 'Annoucement 6', 'content' => 'content_titre6', 'price' => 60, 'created_date' => new\DateTime()],
            ['id' => 7, 'title' => 'Annoucement 7', 'content' => 'content_titre7', 'price' => 70, 'created_date' => new\DateTime()],
            ['id' => 8, 'title' => 'Annoucement 8', 'content' => 'content_titre8', 'price' => 80, 'created_date' => new\DateTime()],
            ['id' => 9, 'title' => 'Annoucement 9', 'content' => 'content_titre9', 'price' => 90, 'created_date' => new\DateTime()],
            ['id' => 10, 'title' => 'Annoucement 10', 'content' => 'content_titre10', 'price' => 100, 'created_date' => new\DateTime()],
        ];


        $tableau_b = $this->managerService->findAnnoucements(3);

        return $this->render('exercice2/product/list.html.twig', [
            'tableau_a' => $tableau_a,
            'tableau_b' => $tableau_b,
        ]);
    }
}