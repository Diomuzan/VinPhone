<?php
namespace App\Controller;
use App\Entity\News;
use App\Form\NewsType;
use App\Repository\NewsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class NewsController extends AbstractController {
    #[Route('/news', name: 'news', methods: ['GET'])]
    public function index(NewsRepository $newsRepository): Response {
        return $this->render('news.html.twig', ['news' => $newsRepository->findAll(),]);
    }

    #[Route('/news/new', name: 'news_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response {
        $news = new News();
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($news);
            $entityManager->flush();
            return $this->redirectToRoute('news', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('news_new.html.twig', ['news' => $news, 'form' => $form,]);
    }

    #[Route('news/detail/{id}', name: 'news_detail', methods: ['GET'])]
    public function show(News $news): Response {
        return $this->render('news_detail.html.twig', ['news' => $news,]);
    }

    #[Route('news/edit/{id}', name: 'news_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, News $news, EntityManagerInterface $entityManager): Response {
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('news', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('news_edit.html.twig', ['news' => $news, 'form' => $form,]);
    }

    #[Route('news/delete/{id}', name: 'app_news_delete', methods: ['POST'])]
    public function delete(Request $request, News $news, EntityManagerInterface $entityManager): Response {
        if ($this->isCsrfTokenValid('delete'.$news->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($news);
            $entityManager->flush();
        }
        return $this->redirectToRoute('news', [], Response::HTTP_SEE_OTHER);
    }
}
