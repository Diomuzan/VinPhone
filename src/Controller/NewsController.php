<?php
namespace App\Controller;
use App\Entity\News;
use App\Form\NewsType;
use App\Repository\NewsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class NewsController extends AbstractController {
    #[Route('/admin/news', name: 'admin_news', methods: ['GET'])]
    public function admin_news(NewsRepository $newsRepository): Response {
        return $this->render('admin_news.html.twig', ['news' => $newsRepository->findAll(),]);
    }
    #[Route('/member/news', name: 'member_news', methods: ['GET'])]
    public function member_news(NewsRepository $newsRepository): Response {

        return $this->render('member_news.html.twig', ['news' => $newsRepository->findBy(array('role' => '["ROLE_MEMBER"]'))]);
    }
    #[Route('admin/news/new', name: 'news_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response {
        $news = new News();
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($news);
            $entityManager->flush();
            return $this->redirectToRoute('admin_news', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('news_new.html.twig', ['news' => $news, 'form' => $form,]);
    }

    #[Route('news/detail/{id}', name: 'news_detail', methods: ['GET'])]
    public function show(News $news): Response {
        return $this->render('news_detail.html.twig', ['news' => $news,]);
    }
    #[Route('admin/news/edit/{id}', name: 'news_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, News $news, EntityManagerInterface $entityManager): Response {
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('admin_news', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('news_edit.html.twig', ['news' => $news, 'form' => $form,]);
    }
    #[Route('/admin/news/delete/{id}', name: 'news_delete')]
    public function delete(Request $request, News $news, EntityManagerInterface $entityManager, Security $security): Response {

        $entityManager->remove($news);
        $entityManager->flush();

        if ($security->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin_news');
        } else {
            return $this->redirectToRoute('member_news');
        }
    }
}
