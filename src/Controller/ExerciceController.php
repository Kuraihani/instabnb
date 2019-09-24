<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExerciceController extends AbstractController
{

    public function index()
    {
        $languages = ['PHP', 'Symfony', 'Node.js'];

        return $this->render('exercice/index.html.twig', [
            'controller_name' => 'ExerciceController',
            'languages' => $languages, ]);
    }
}