<?php

namespace App\Controller;
use App\Entity\Vinphone;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinPhoneController extends AbstractController {
    #[Route('/VinPhone', name: 'VinPhone')]
    public function vinphone(EntityManagerInterface $entityManager, int $id = null): Response {

        if ($id !== null) {
            $phones = $entityManager->getRepository(Vinphone::class)->find($id);
            } else {
            $phones = $entityManager->getRepository(Vinphone::class)->findAll();
        }

        return $this->render('VinPhone.html.twig', ['phones' => $phones]);
    }
}
