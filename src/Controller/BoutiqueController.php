<?php

namespace App\Controller;

use App\Entity\Boutique;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoutiqueController extends AbstractController
{
    /**
     * @Route("/boutique", name="app_boutique")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Boutique::class);
        $articles = $repo->findAll();

        return $this->render('boutique/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
