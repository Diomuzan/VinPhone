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
    #[Route('/admin/dashboard/{id}', name: 'admin_dashboard')]
    public function admin_dashboard(PhoneRepository $phoneRepository, string $id, EntityManagerInterface $entityManager): Response {
        $phones = $phoneRepository->findAll();

        $user = $this->getUser();
        $account = $user ? $user->getUserIdentifier() : '';

        return $this->render('admin_dashboard.html.twig', ['phones' => $phones, 'account' => $account]);
    }
    #[Route('/admin/add', name: 'add', methods: ['GET', 'POST'])]
    public function new(Request $request, PhoneRepository $phoneRepository): Response {

        $phones = new Phone();
        $form = $this->createForm(AddPhoneType::class, $phones);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $phoneRepository->save($phones, true);

            return $this->redirectToRoute('admin_dashboard', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('add.html.twig', ['phones' => $phones, 'form' => $form]);
    }

    #[Route('/admin/delete/{id}', name: 'delete')]
    public function delete(Request $request, Phone $phone, PhoneRepository $phoneRepository, EntityManagerInterface $entityManager, $id): Response {

     $phone = $entityManager->getRepository(Phone::class)->find($id);

     if(!$phone) {
         throw $this->createNotFoundException('Phone not found!');
     }

     $entityManager->remove($phone);
     $entityManager->flush();

        return $this->redirectToRoute('admin_dashboard', [], Response::HTTP_SEE_OTHER);
    }
}
