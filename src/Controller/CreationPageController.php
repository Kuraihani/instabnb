<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use symfony\Component\HttpFondation\RedirectReponse;

class CreationPageController extends  AbstractController
{
    /**
     * @Route(
     *     "/annoucements/add",
     *     name="creation",
     *     methods={"GET", "POST"},
     * )
     * @return  Response
     */
    public function  index4()
    {
        return $this->render('exercice2/product/creation.html.twig');
    }
}