<?php

namespace App\Controller;

use App\Entity\Phone;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MemberController extends AbstractController {

    #[Route('/Member/Home/{id}', name: 'MemberHome')]
    public function member_home(EntityManagerInterface $entityManager, int $id = null): Response {

        $phones = $entityManager->getRepository(Phone::class)->findAll();

        $user = $this->getUser();
        $account = $user ? $user->getUserIdentifier() : '';

        return $this->render('Member_Home.html.twig', ['phones' => $phones, 'account' => $account]);
    }
}
