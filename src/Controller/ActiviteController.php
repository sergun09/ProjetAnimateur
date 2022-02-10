<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Entity\User;
use App\Form\ActiviteType;
use App\Repository\ActiviteRepository;
use App\Repository\ActiviteUserRepository;
use cebe\markdown\Markdown;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[Route('/activite')]
class ActiviteController extends AbstractController
{
    #[Route('/', name: 'activite_index', methods: ['GET'])]
    public function index(ActiviteRepository $activiteRepository, Markdown $markdown): Response
    {
        $activites = $activiteRepository->findAll();
        $parsedActivites = [];

        foreach ($activites as $activite) {
            $parsedActivite = $activite;
            $parsedActivite->setDescription($markdown->parse($activite->getDescription()));
            $parsedActivites[] = $activite;
        }
        return $this->render('activite/index.html.twig', [
            'activites' => $activites,
        ]);
    }

    #[Route('/new', name: 'activite_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $activite = new Activite();
        $user = $this->getUser();
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($activite);
            $activite->setUser($user);
            $entityManager->flush();


            return $this->redirectToRoute('activite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('activite/new.html.twig', [
            'activite' => $activite,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'activite_show', methods: ['GET'])]
    public function show(Activite $activite): Response
    {
        return $this->render('activite/show.html.twig', [
            'activite' => $activite,
        ]);
    }


    #[Route('/{id}/inscription', name: 'activite_inscription', methods: ['GET'])]
    /** 
     *
     * @IsGranted("ROLE_ANIMATEUR")
     */
    public function activite_inscription(Activite $activite, EntityManagerInterface $entityManager): Response
    {
        $activite->addUserInscrit($this->getUser());
        $entityManager->persist($activite);
        $entityManager->flush();
        return $this->redirectToRoute('activite_show', ['id' => $activite->getId()]);
    }

    #[Route('/{id}/desinscription', name: 'activite_desinscription', methods: ['GET'])]
    /** 
     *
     * @IsGranted("ROLE_ANIMATEUR")
     */
    public function activite_desinscription(Activite $activite, EntityManagerInterface $entityManager): Response
    {
        $activite->removeUserInscrit($this->getUser());
        $entityManager->persist($activite);
        $entityManager->flush();
        return $this->redirectToRoute('activite_show', ['id' => $activite->getId()]);
    }


    #[Route('/{id}/edit', name: 'activite_edit', methods: ['GET', 'POST'])]
    /** 
     *
     * @IsGranted("ROLE_ANIMATEUR")
     */
    public function edit(Request $request, Activite $activite, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('activite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('activite/edit.html.twig', [
            'activite' => $activite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'activite_delete', methods: ['POST'])]
    /** 
     *
     * @IsGranted("ROLE_ANIMATEUR")
     */
    public function delete(Request $request, Activite $activite, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $activite->getId(), $request->request->get('_token'))) {
            $entityManager->remove($activite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('activite_index', [], Response::HTTP_SEE_OTHER);
    }
}
