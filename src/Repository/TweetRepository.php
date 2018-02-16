<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class TweetRepository extends EntityRepository
{
    /**
     * @return array
     */
    public function findAllDesc(): array
    {
        return $this->createQueryBuilder('t')
            ->addOrderBy('t.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }
}