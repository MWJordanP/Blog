<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Comment;
use Doctrine\ORM\EntityManager;

/**
 * Class CommentManager
 */
class CommentManager extends AbstractManager
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
        $this->repository = $this->em->getRepository('AppBundle:Comment');
    }

    /**
     * @return Comment[]
     */
    public function getAll()
    {
        $articles = $this->repository->findBy([], ['createdAt' => 'DESC']);

        return $articles;
    }
}
