<?php

namespace AppBundle\Manager;

use AppBundle\Entity\OfficialTheme;
use Doctrine\ORM\EntityManager;

/**
 * Class ArticleManager
 */
class OfficialThemeManager extends AbstractManager
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
        $this->repository = $this->em->getRepository('AppBundle:OfficialTheme');
    }

    /**
     * @return OfficialTheme[]
     */
    public function getAll()
    {
        $articles = $this->repository->findBy([], ['createdAt' => 'DESC']);

        return $articles;
    }
}
