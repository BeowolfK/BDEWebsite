<?php

namespace App\Controller;
use App\Entity\Partenariat;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PartenariatController extends AbstractController
{
    /**
     * @Route("/partenariat", name="app_partenariat")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Partenariat::class);
        $partenaires = $repo->findAll();

        return $this->render('partenariat/index.html.twig', [
            'partenaires' => $partenaires,
        ]);
    }
}
