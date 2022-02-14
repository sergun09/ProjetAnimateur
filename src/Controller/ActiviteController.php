<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Activite;
use App\Form\ActiviteType;
use cebe\markdown\Markdown;
use App\Repository\UserRepository;
use App\Repository\ActiviteRepository;
use Doctrine\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ActiviteUserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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

    #[Route('/mesactivites/{id}', name: 'activite_mesactivites', methods: ['GET'])]
    public function mesactivites(User $user): Response
    {
        return $this->render('activite/mesactivites.html.twig', [
            'user' => $user,
        ]);
    }


    #[Route('/inscription/{id}', name: 'activite_inscription', methods: ['GET'])]
    public function activite_inscription(Activite $activite, EntityManagerInterface $entityManager, Security $secu): Response
    {
        if($this->getUser() != null)
        {
            $activite->addUserInscrit($this->getUser());
            $entityManager->persist($activite);
            $entityManager->flush();
            return $this->redirectToRoute('activite_show', ['id' => $activite->getId()]);
        }
        return $this->redirectToRoute('app_login');       
    }

    #[Route('/desinscription/{id}', name: 'activite_desinscription', methods: ['GET'])]
    public function activite_desinscription(Activite $activite, EntityManagerInterface $entityManager): Response
    {
        $activite->removeUserInscrit($this->getUser());
        $entityManager->persist($activite);
        $entityManager->flush();
        return $this->redirectToRoute('activite_show', ['id' => $activite->getId()]);
    }


    #[Route('/edit/{id}', name: 'activite_edit', methods: ['GET', 'POST'])]
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

    #[Route('/delete/{id}', name: 'activite_delete', methods: ['POST'])]
    public function delete(Request $request, Activite $activite, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $activite->getId(), $request->request->get('_token'))) {
            $entityManager->remove($activite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('activite_index', [], Response::HTTP_SEE_OTHER);
    }
}
