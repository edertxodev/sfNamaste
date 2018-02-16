<?php

namespace App\Classes;

use Doctrine\ORM\EntityManagerInterface;

abstract class CRUDAbstractService
{

    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param EntityInterface $entity
     */
    public function save(EntityInterface $entity)
    {
        $this->em->persist($entity);
        $this->em->flush();
    }

    /**
     * @param EntityInterface $entity
     */
    public function remove(EntityInterface $entity)
    {
        $this->em->remove($entity);
        $this->em->flush();
    }

}