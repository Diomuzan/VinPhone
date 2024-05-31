<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Twig\Environment;
class GuestController extends AbstractController {
    #[Route('/home', name: 'home')]
    public function guest_home(): Response {
        return $this->render('home.html.twig');
    }
    #[Route('/login', name: 'login')]
    public function login(AuthenticationUtils $authenticationUtils): Response {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }
    #[Route('/', name: "app_home")]
    public function redirectAction(Security $security) {
        if ($security->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin_home');
        }
        if ($security->isGranted('ROLE_MEMBER')) {
            return $this->redirectToRoute('member_home');
        }
        return $this->render('home.html.twig');
    }
    #[Route('/logout', name: "logout")]
    public function logout(): Response {
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }
}



