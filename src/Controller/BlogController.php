<?php

namespace ClementCore\Controller;

use ClementCore\Admin\ThemeSettings;
use ClementCore\Model\Post;
use Simply\Core\Query\SimplyQuery;

class BlogController extends BaseController {
    /**
     * Function called in infinite load in blog page
     */
    public function getPosts() {

    }

    public function index() {
        /** @var Post[] $allPosts */
        $allPosts = SimplyQuery::getCurrentQuery()->getQueriedPosts();
        $this->render('page/blog.html.twig', ['allPosts' => $allPosts]);
    }
}
