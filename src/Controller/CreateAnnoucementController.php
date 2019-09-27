<?php


namespace App\Controller;


use App\DTO\CreateAnnoucement;
use App\Entity\AnnoucementEntity;
use App\Form\CreateAnnoucementType;
use App\Service\UserManagerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CreateAnnoucementController extends AbstractController
{
    private $managerService;
    public function __construct(UserManagerService $managerService)
    {
        $this->managerService = $managerService;
    }

    /**
     * @Route("{_locale}/CreateAnnoucement", name="CreateAnnoucement")
     */
    public function index(Request $request)
    {
        $CreateAnnoucement = new CreateAnnoucement();
        $form = $this->createForm(CreateAnnoucementType::class, $CreateAnnoucement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->managerService->save($CreateAnnoucement);
            return $this->redirectToRoute('home');
        }

        return $this->render('CreateAnnoucement.html.twig', [
            'CreateAnnoucementform' => $form->createView(),
        ]);
    }
}