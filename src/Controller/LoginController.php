<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
class LoginController extends AbstractController {
    #[Route('/login', name: 'login')]
    public function login(AuthenticationUtils $authenticationUtils): Response {

      $error = $authenticationUtils->getLastAuthenticationError();
          $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('login.html.twig', ['controller_name' => 'LoginController', 'last_username'  =>  $lastUsername, 'error'  => $error,]);
      }
}

