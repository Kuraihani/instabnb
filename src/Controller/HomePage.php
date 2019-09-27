<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomePage extends  AbstractController
{
    /**
     * @Route(
     *     "{_locale}/",
     *     name="home",
     * )
     */
    public function  index1(Request $request)
    {
        $locale = $request->getLocale();
        return $this->render('exercice2/product/Home.html.twig');
    }

}