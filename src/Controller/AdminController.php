<?php

namespace App\Controller;
use App\Entity\User;
use App\Entity\Phone;
use App\Form\AddPhoneType;
use App\Repository\PhoneRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AdminController extends AbstractController {

    #[Route('/Admin/Home/{id}', name: 'AdminHome')]
    public function admin_home(PhoneRepository $phoneRepository, string $id, EntityManagerInterface $entityManager): Response {

        $phones = $phoneRepository->findAll();

        $user = $this->getUser();
        $account = $user ? $user->getUserIdentifier() : '';

        return $this->render('Admin_Home.html.twig', ['phones' => $phones, 'account' => $account]);
    }


    #[Route('/Admin/Add', name: 'Add', methods: ['GET', 'POST'])]
    public function new(Request $request, PhoneRepository $phoneRepository): Response {

        $phones = new Phone();
        $form = $this->createForm(AddPhoneType::class, $phones);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $phoneRepository->save($phones, true);

            return $this->redirectToRoute('AdminHome', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Add.html.twig', ['phones' => $phones, 'form' => $form]);
    }

    #[Route('/Admin/Delete/{id}', name: 'Delete')]
    public function delete(Request $request, Phone $phone, PhoneRepository $phoneRepository, EntityManagerInterface $entityManager, $id): Response {

     $phone = $entityManager->getRepository(Phone::class)->find($id);

     if(!$phone) {
         throw $this->createNotFoundException('Phone not found!');
     }

     $entityManager->remove($phone);
     $entityManager->flush();

        return $this->redirectToRoute('AdminHome', [], Response::HTTP_SEE_OTHER);
    }
}
