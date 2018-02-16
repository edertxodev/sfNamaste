<?php

namespace App\Service;

use App\Classes\CRUDAbstractService;
use App\Entity\Tweet;
use App\Repository\TweetRepository;
use Doctrine\ORM\EntityManagerInterface;

class TweetService extends CRUDAbstractService
{
    /**
     * @var TweetRepository
     */
    private $tweetRepository;

    /**
     * @param EntityManagerInterface $em
     * @param TweetRepository        $tweetRepository
     */
    public function __construct(EntityManagerInterface $em, TweetRepository $tweetRepository)
    {
        parent::__construct($em);
        $this->tweetRepository = $tweetRepository;
    }

    /**
     * @return array
     */
    public function getAllDesc(): array
    {
        return $this->tweetRepository->findAllDesc();
    }

    /**
     * @param Tweet $tweet
     */
    public function create(Tweet $tweet)
    {
        $this->save($tweet);
    }
}