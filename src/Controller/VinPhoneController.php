<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Twig\Environment;

class VinPhoneController extends AbstractController {
    #[Route('/home', name: 'home')]
    public function guest_home(): Response {
        return $this->render('home.html.twig');
    }
}



