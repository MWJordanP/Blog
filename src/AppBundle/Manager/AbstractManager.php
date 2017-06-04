<?php

namespace AppBundle\Manager;

use Doctrine\ORM\EntityManager;

/**
 * Class AbstractManager
 */
class AbstractManager
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * AbstractManager constructor.
     *
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @param object $entity
     *
     * @return mixed
     */
    public function save($entity)
    {
        $this->em->persist($entity);
        $this->em->flush();

        return $entity;
    }

    /**
     * @param object $entity
     */
    public function remove($entity)
    {
        $this->em->remove($entity);
        $this->em->flush();
    }
}
