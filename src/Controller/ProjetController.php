<?php

namespace App\Controller;

use App\Entity\Projet;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetController extends AbstractController
{   
    /**
     * @Route("/projet", name="app_projet")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Projet::class);
        $projets = $repo->findAll();

        return $this->render('projet/index.html.twig', [
            'projets' => $projets,
        ]);
    }

    /**
     * @Route("/projet/{id}", name="projet_show")
     */
    public function show($id){
        $repo = $this->getDoctrine()->getRepository(Projet::class);
        $projet = $repo->find($id);

        return $this->render('projet/projet.html.twig', [
            'projet' => $projet
        ]);

    }
}
