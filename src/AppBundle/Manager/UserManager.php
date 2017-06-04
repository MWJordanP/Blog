<?php

namespace AppBundle\Manager;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;

/**
 * Class UserManager
 */
class UserManager extends AbstractManager
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
        $this->repository = $this->em->getRepository('AppBundle:User');
    }

    /**
     * @return User[]
     */
    public function getAll()
    {
        $articles = $this->repository->findBy([], ['createdAt' => 'DESC']);

        return $articles;
    }
}
