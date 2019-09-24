<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class HomePage extends  AbstractController
{
    /**
     * @Route(
     *     "/",
     *     name="home",
     * )
     */
    public function  index1()
    {
        return $this->render('exercice2/product/Home.html.twig');
    }

}