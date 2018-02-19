<?php

namespace App\GraphQL\Mutation;

use App\Entity\Tweet;
use App\Service\TweetService;

class TweetMutation
{
    /**
     * @var TweetService
     */
    private $tweetService;

    /**
     * @param TweetService $tweetService
     */
    public function __construct(TweetService $tweetService)
    {
        $this->tweetService = $tweetService;
    }

    /**
     * @param string $content
     *
     * @return Tweet
     */
    public function create(string $content): Tweet
    {
        $tweet = new Tweet();
        $tweet->setContent($content);
        $this->tweetService->create($tweet);

        return $tweet;
    }
}