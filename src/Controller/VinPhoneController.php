<?php

namespace App\Controller;
use App\Entity\Vinphone;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinPhoneController extends AbstractController {
    #[Route('/VinPhone/Home', name: 'Home')]
    public function home(EntityManagerInterface $entityManager, int $id = null): Response {

        if ($id !== null) {
            $phones = $entityManager->getRepository(Vinphone::class)->find($id);
            } else {
            $phones = $entityManager->getRepository(Vinphone::class)->findAll();
        }

        return $this->render('VinPhone_Home.html.twig', ['phones' => $phones]);
    }

    #[Route('/VinPhone/Add', name: 'Add')]
    public function new(EntityManagerInterface $entityManager, int $id = null): Response {


        return $this->render('VinPhone_Add.html.twig');
    }

    #[Route('/VinPhone/Delete', name: 'Delete')]
    public function delete(EntityManagerInterface $entityManager, int $id = null): Response {


        return $this->render('VinPhone_Delete.html.twig');
    }

    #[Route('/VinPhone/Detail', name: 'Detail')]
    public function detail(EntityManagerInterface $entityManager, int $id = null): Response {


        return $this->render('VinPhone_Detail.html.twig');
    }

    #[Route('/VinPhone/Edit', name: 'Edit')]
    public function edit(EntityManagerInterface $entityManager, int $id = null): Response {


        return $this->render('VinPhone_Edit.html.twig');
    }
}
