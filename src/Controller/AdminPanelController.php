<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
// use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Projet;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AdminPanelController extends AbstractController
{
    /**
     * @Route("/admin_panel", name="app_admin_panel")
     */
    public function index(Request $request): Response
    {   
        $projet = new Projet();

        $form = $this->createFormBuilder($projet)
                     ->add('Titre', TextType::class)
                     ->add('Photo', TextType::class)
                     ->add('Date', DateTimeType::class)
                     ->add('Description', TextareaType::class)
                     ->add('Texte', TextareaType::class)
                     ->add('Submit', SubmitType::class)
                     ->getForm();

        return $this->render('admin_panel/index.html.twig', [
            'user' => 'admin',
            'formProjet' => $form->createView()
        ]);
    }
}
