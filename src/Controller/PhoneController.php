<?php
namespace App\Controller;
use App\Entity\Phone;
use App\Form\AddPhoneType;
use App\Form\PhoneType;
use App\Repository\PhoneRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class PhoneController extends AbstractController {
    #[Route('/admin/dashboard', name: 'admin_dashboard')]
    public function admin_dashboard(PhoneRepository $phoneRepository, EntityManagerInterface $entityManager): Response {
        $phones = $phoneRepository->findAll();

        $user = $this->getUser();
        $account = $user ? $user->getUserIdentifier() : '';

        return $this->render('admin_dashboard.html.twig', ['phones' => $phones, 'account' => $account]);
    }
    #[Route('/member/dashboard', name: 'member_dashboard')]
    public function member_home(EntityManagerInterface $entityManager): Response {

        $phones = $entityManager->getRepository(Phone::class)->findAll();

        $user = $this->getUser();
        $account = $user ? $user->getUserIdentifier() : '';

        return $this->render('member_dashboard.html.twig', ['phones' => $phones, 'account' => $account]);
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
    #[Route('admin/detail/{id}', name: 'detail', methods: ['GET'])]
    public function show(Phone $phone): Response {
        return $this->render('detail.html.twig', ['phone' => $phone,]);
    }
    #[Route('admin/edit/{id}', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Phone $phone, EntityManagerInterface $entityManager): Response {
        $form = $this->createForm(PhoneType::class, $phone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_phone_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('edit.html.twig', ['phone' => $phone, 'form' => $form,]);
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
