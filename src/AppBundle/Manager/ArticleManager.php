<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Article;
use Doctrine\ORM\EntityManager;

/**
 * Class ArticleManager
 */
class ArticleManager extends AbstractManager
{
    /**
     * @var EntityManager
     */
    protected $repository;

    /**
     * ArticleManager constructor.
     *
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Article');
    }

    /**
     * @return Article[]
     */
    public function getAll()
    {
        $articles = $this->repository->findBy([], ['createdAt' => 'DESC']);

        return $articles;
    }
}
