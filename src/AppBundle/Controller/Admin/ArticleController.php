<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\Article;
use AppBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ArticleController
 *
 * @Route("/articles")
 */
class ArticleController extends Controller
{
    /**
     * @return Response
     *
     * @Route("/", name="admin_article_index")
     */
    public function indexAction()
    {
        $articleManager = $this->get('app.manager.article');

        $articles = $articleManager->getAll();

        return $this->render('article/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @param Request $request
     *
     * @return RedirectResponse|Response
     *
     * @Route("/create", name="admin_article_create")
     */
    public function createAction(Request $request)
    {
        $articleManager = $this->get('app.manager.article');
        $article        = new Article();
        $form           = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $articleManager->save($article);

            return $this->redirectToRoute('admin_article_show', ['id' => $article->getId()]);
        }

        return $this->render('article/new.html.twig', [
            'article' => $article,
            'form'    => $form->createView(),
        ]);
    }

    /**
     * @param Article $article
     *
     * @return Response
     *
     * @Route("/{id}/show", name="admin_article_show")
     */
    public function showAction(Article $article)
    {
        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }

    /**
     * @param Request $request
     * @param Article $article
     *
     * @return RedirectResponse|Response
     *
     * @Route("/{id}/edit", name="admin_article_edit")
     */
    public function editAction(Request $request, Article $article)
    {
        $articleManager = $this->get('app.manager.article');
        $form           = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $articleManager->save($article);

            return $this->redirectToRoute('article_edit', ['id' => $article->getId()]);
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form'    => $form->createView(),
        ]);
    }

    /**
     * @param Article $article
     *
     * @return RedirectResponse
     *
     * @Route("/{id}/delete", name="admin_article_delete")
     */
    public function deleteAction(Article $article)
    {
        $articleManager = $this->get('app.manager.article');
        $articleManager->remove($article);

        return $this->redirectToRoute('admin_article_index');
    }
}
