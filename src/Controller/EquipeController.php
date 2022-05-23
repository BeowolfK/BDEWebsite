<?php

namespace App\Controller;

use App\Entity\Equipe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipeController extends AbstractController
{
    /**
     * @Route("/equipe", name="app_equipe")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Equipe::class);
        $equipe = $repo->findAll();

        return $this->render('equipe/index.html.twig', [
            'equipe' => $equipe,
        ]);
    }

}
