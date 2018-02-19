<?php

namespace App\GraphQL\Resolver;

use App\Entity\Tweet;
use App\Service\TweetService;

class TweetResolver
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
     * @return array
     */
    public function resolveAll(): array
    {
        return $this->tweetService->getAllDesc();
    }

    /**
     * @param int $id
     *
     * @return Tweet|null
     */
    public function resolveById(int $id): ?Tweet
    {
        return $this->tweetService->getOneById($id);
    }
}