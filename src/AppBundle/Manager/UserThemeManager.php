<?php

namespace AppBundle\Manager;

use AppBundle\Entity\UserTheme;
use Doctrine\ORM\EntityManager;

/**
 * Class UserThemeManager
 */
class UserThemeManager extends AbstractManager
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
        $this->repository = $this->em->getRepository('AppBundle:UserTheme');
    }

    /**
     * @return UserTheme[]
     */
    public function getAll()
    {
        $articles = $this->repository->findBy([], ['createdAt' => 'DESC']);

        return $articles;
    }
}
