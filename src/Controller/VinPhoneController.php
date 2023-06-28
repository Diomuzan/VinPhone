<?php
namespace App\Controller;
use App\Entity\Vinphone;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Form\AddPhoneType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class VinPhoneController extends AbstractController
{

    #[Route('/Guest/Home', name: 'GuestHome')]
    public function guest_home(): Response
    {

        return $this->render('VinPhone_Guest_Home.html.twig');
    }

    #[Route('/Member/Home', name: 'MemberHome')]
    public function member_home(EntityManagerInterface $entityManager, int $id = null): Response
    {

        if ($id !== null) {
            $phones = $entityManager->getRepository(Vinphone::class)->find($id);
        } else {
            $phones = $entityManager->getRepository(Vinphone::class)->findAll();
        }

        return $this->render('VinPhone_Member_Home.html.twig', ['phones' => $phones]);
    }

    #[Route('/Add', name: 'Add')]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {

        $phone = new AddPhoneType(AddPhoneType::class);
        $form = $this->createForm(AddPhoneType::class);
        $form->handleRequest();

        if ($form->isSubmitted() && $form->isValid()) {
            $phone = $form->getData();
            $entityManager->persist($form);
            $entityManager->flush();
        }
        return $this->render('VinPhone_Add.html.twig', ['form' => $form]);
    }

    #[Route('/Delete', name: 'Delete')]
    public function delete(EntityManagerInterface $entityManager, int $id = null): Response
    {


        return $this->render('VinPhone_Delete.html.twig');
    }

    #[Route('/Detail', name: 'Detail')]
    public function detail(EntityManagerInterface $entityManager, int $id = null): Response
    {


        return $this->render('VinPhone_Detail.html.twig');
    }

    #[Route('/Edit', name: 'Edit')]
    public function edit(EntityManagerInterface $entityManager, int $id = null): Response
    {


        return $this->render('VinPhone_Edit.html.twig');
    }

    #[Route('/Login', name: 'Login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('VinPhone_Login.html.twig', ['last_username' => $lastUsername, 'error' => $error,]);
    }

    #[Route('/Login', name: 'Login')]
    public function login(): Response {


        return $this->render('VinPhone_Login.html.twig');
    }

    #[Route('/Admin/Home', name: 'AdminHome')]
    public function admin_home(EntityManagerInterface $entityManager, int $id = null): Response
    {

        if ($id !== null) {
            $phones = $entityManager->getRepository(Vinphone::class)->find($id);
        } else {
            $phones = $entityManager->getRepository(Vinphone::class)->findAll();
        }

        return $this->render('VinPhone_Admin_Home.html.twig', ['phones' => $phones]);
    }

<<<<<<< Updated upstream
=======


    #[Route('/', name: "app_home")]
    public function redirectAction(Security $security)
    {

        if ($security->isGranted('ROLE_ADMIN')) {

            return $this->redirectToRoute('AdminHome');
        }

        if ($security->isGranted('ROLE_MEMBER')) {

            return $this->redirectToRoute('MemberHome');
        }

        return $this->render('VinPhone_Guest_Home.html.twig');
    }


    #[Route('/Logout', name: "Logout")]
    public function logout(): Response {
    
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }

>>>>>>> Stashed changes
}

