<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use symfony\Component\HttpFondation\RedirectReponse;

class DynamicIDController extends AbstractController
{

    /**
     * @Route(
     *     "/annoucements/{id}/details",
     *     name="annoucement_details",
     *     requirements={"id"="[0-9]+"},
     * )
     * @param int $id
     * @return Response
     */
    public function index3(int $id)
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
        return $this->render('exercice2/product/details.html.twig', [
            'tableau_a' => $tableau_a,
            'id' => $id,
        ]);
    }
}