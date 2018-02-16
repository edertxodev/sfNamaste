<?php

namespace App\Entity;

use App\Classes\EntityInterface;
use App\Classes\EntityTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TweetRepository")
 * @ORM\Table(name="tweet")
 */
class Tweet implements EntityInterface
{
    use EntityTrait;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=140)
     */
    private $content;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param $content
     *
     * @return Tweet
     */
    public function setContent($content): Tweet
    {
        $this->content = $content;

        return $this;
    }
}