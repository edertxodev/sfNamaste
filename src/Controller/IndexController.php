<?php

namespace App\Controller;

use App\Entity\Tweet;
use App\Form\TweetType;
use App\Service\TweetService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @param Request      $request
     * @param TweetService $tweetService
     * @Route("/", name="index")
     *
     * @return Response
     */
    public function indexAction(Request $request, TweetService $tweetService): Response
    {
        $tweet = new Tweet();
        $form = $this->createForm(TweetType::class, $tweet);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tweetService->create($tweet);
        }

        $tweets = $tweetService->getAllDesc();

        return $this->render('index.html.twig', [
            'form' => $form->createView(),
            'tweets' => $tweets,
        ]);
    }
}