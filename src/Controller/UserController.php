<?php
namespace App\Controller;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class UserController extends AbstractController {
#[Route('/admin/user-manager', name: 'user_manager', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response {
        return $this->render('user_manager.html.twig', [
            'users' => $userRepository->findAll(),]);
    }

    #[Route('/new', name: 'user_manager_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_manager', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user_manager_new.html.twig', ['user' => $user, 'form' => $form,]);
    }

    #[Route('admin/user-manager/edit/{id}', name: 'user_manager_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user_manager_edit.html.twig', ['user' => $user, 'form' => $form,]);
    }

    #[Route('admin/user-manager/delete/{id}', name: 'user_manager_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_manager', [], Response::HTTP_SEE_OTHER);
    }
}
