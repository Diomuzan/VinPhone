<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Twig\Environment;

class GuestController extends AbstractController {
    #[Route('/guest/home', name: 'guest_home')]
    public function guest_home(): Response {
        return $this->render('guest_home.html.twig');
    }
    #[Route('/login', name: 'login')]
    public function login(AuthenticationUtils $authenticationUtils): Response {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('Login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }
    #[Route('/', name: "app_home")]
    public function redirectAction(Security $security) {
        if ($security->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('AdminHome');
        }
        if ($security->isGranted('ROLE_MEMBER')) {
            return $this->redirectToRoute('MemberHome');
        }
        return $this->render('guest_home.html.twig');
    }
    #[Route('/logout', name: "logout")]
    public function logout(): Response {
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }
}



