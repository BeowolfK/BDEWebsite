<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use App\Entity\Projet;
use App\Entity\Boutique;
use App\Entity\Partenariat;

class AdminPanelController extends AbstractController
{
    /**
     * @Route("/admin_panel", name="app_admin_panel")
     */
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {   
        $entityManager = $doctrine->getManager();


        $projet = new Projet();
        $form_projets = $this->createFormBuilder($projet)
                     ->add('Titre', TextType::class)
                     ->add('Photo', TextType::class)
                     ->add('Date', DateTimeType::class)
                     ->add('Description', TextareaType::class)
                     ->add('Texte', TextareaType::class)
                     ->add('Submit', SubmitType::class)
                     ->getForm();
        $form_projets->handleRequest($request);

        if($form_projets->isSubmitted() && $form_projets->isValid()) {
            $projet->setDate(new \DateTime());
            dump($projet);
            $entityManager->persist($projet);
            $entityManager->flush();
        }

        $articles = new Boutique();
        $form_boutique = $this->createFormBuilder($articles)
                     ->add('nomArticle', TextType::class)
                     ->add('photoArticle', TextType::class)
                     ->add('descArticle', TextareaType::class)
                     ->add('prixArticle', NumberType::class)
                     ->add('Submit', SubmitType::class)
                     ->getForm();
        $form_boutique->handleRequest($request);

        if($form_boutique->isSubmitted() && $form_boutique->isValid()) {
            dump($articles);
            $entityManager->persist($articles);
            $entityManager->flush();
        }

        $partenaire = new Partenariat();
        $form_partenaire = $this->createFormBuilder($partenaire)
                     ->add('Titre', TextType::class)
                     ->add('Logo', TextType::class)
                     ->add('Description', TextareaType::class)
                     ->add('URL', TextareaType::class)
                     ->add('Submit', SubmitType::class)
                     ->getForm();
        $form_partenaire->handleRequest($request);

        if($form_partenaire->isSubmitted() && $form_partenaire->isValid()) {
            dump($partenaire);
            $entityManager->persist($partenaire);
            $entityManager->flush();
        }

        $repo_projets = $this->getDoctrine()->getRepository(Projet::class);
        $repo_boutique = $this->getDoctrine()->getRepository(Boutique::class);
        $repo_partenariat = $this->getDoctrine()->getRepository(Partenariat::class);
        $projets = $repo_projets->findAll();
        $boutique = $repo_boutique->findAll();
        $partenariat = $repo_partenariat->findAll();

        return $this->render('admin_panel/index.html.twig', [
            'user' => 'admin',
            'projets' => $projets,
            'boutique' => $boutique,
            'partenariat' => $partenariat,
            'formBoutique' => $form_boutique->createView(),
            'formProjet' => $form_projets->createView(),
            'formPartenariat' => $form_partenaire->createView()
        ]);
    }
    /**
     * @Route("/delete_projet/{id}", requirements={"id" = "\d+"}, name="delete_route_projet")
     * @return RedirectResponse
     */
    public function delete_projet(ManagerRegistry $doctrine, $id) {
        $entityManager = $doctrine->getManager();
        $repo = $this->getDoctrine()->getRepository(Projet::class);
        $projet = $repo->find($id);
        dump($id);
        $entityManager->remove($projet);
        $entityManager->flush();
        return $this->redirectToRoute('app_admin_panel');
    }
    
    /**
     * @Route("/delete_article/{id}", requirements={"id" = "\d+"}, name="delete_route_article")
     * @return RedirectResponse
     */
    public function delete_article(ManagerRegistry $doctrine, $id) {
        $entityManager = $doctrine->getManager();
        $repo = $this->getDoctrine()->getRepository(Boutique::class);
        $article = $repo->find($id);
        $entityManager->remove($article);
        $entityManager->flush();
        
        return $this->redirectToRoute('app_admin_panel');
    }
    /**
     * @Route("/delete_partenaire/{id}", requirements={"id" = "\d+"}, name="delete_route_partenaire")
     * @return RedirectResponse
     */
    public function delete_partenaire(ManagerRegistry $doctrine, $id) {
        $entityManager = $doctrine->getManager();
        $repo = $this->getDoctrine()->getRepository(Partenariat::class);
        $partenaire = $repo->find($id);
        $entityManager->remove($partenaire);
        $entityManager->flush();
        
        return $this->redirectToRoute('app_admin_panel');
    }
}
