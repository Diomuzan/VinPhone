<?php

namespace App\Controller;

use App\Entity\Phone;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MemberController extends AbstractController {

    #[Route('/Member/Home', name: 'MemberHome')]
    public function member_home(EntityManagerInterface $entityManager, int $id = null): Response {

        if ($id !== null) {
            $phones = $entityManager->getRepository(Phone::class)->find($id);
        } else {
            $phones = $entityManager->getRepository(Phone::class)->findAll();
        }

        return $this->render('VinPhone_Member_Home.html.twig', ['phones' => $phones]);
    }


    #[Route('/Detail', name: 'Detail')]
    public function detail(EntityManagerInterface $entityManager, int $id = null): Response {


        return $this->render('VinPhone_Detail.html.twig');
    }
}
