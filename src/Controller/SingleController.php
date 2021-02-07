<?php

namespace ClementCore\Controller;

use ClementCore\Model\Post;
use ClementCore\Repository\PostRepository;
use Simply\Core\Query\SimplyQuery;
use Simply\Core\Template\TemplateEngine;

class SingleController extends BaseController {
    protected $postRepository;

    public function __construct(TemplateEngine $engine, PostRepository $postRepository) {
        parent::__construct($engine);
        $this->postRepository = $postRepository;
    }

    public function post() {
        /** @var Post $currentPost */
        $currentPost = SimplyQuery::getCurrentObject();
        $this->render('single/post.html.twig', [
            'currentPost' => $currentPost,
            'postTags' => $currentPost->getTags(),
            'relatedPosts' => $this->postRepository->getRelatedPosts($currentPost->getID(), ['limit' => 3]),
        ]);
    }
}
