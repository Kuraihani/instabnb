<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Exercice2Controller extends AbstractController
{
    /**
     * @Route("/exercice2", name="exercice2")
     */
    public function index()
    {
        $date_ajd = new \DateTime();

        $languages = [
            ['language' => 'Symfony', 'version' => '4.3.4'],
            ['language' => 'PHP', 'version' => '7.2'],
            ['language' => 'Node.js', 'version' => '10.2']
        ];

        return $this->render('exercice2/index.html.twig', [
            'controller_name' => 'Exercice2Controller',
            'languages' => $languages,
            'date_ajd' => $date_ajd,
        ]);
    }
}
