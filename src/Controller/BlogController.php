<?php

namespace ClementCore\Controller;

use ClementCore\Admin\ThemeMenu;
use ClementCore\Admin\ThemeSettings;
use ClementCore\Api\TokenGenerator;
use ClementCore\Model\Post;
use ClementCore\Repository\ProjectRepository;
use ClementCore\Repository\ProjectTagRepository;
use Simply\Core\Query\SimplyQuery;
use Simply\Core\Repository\PostRepository;
use Simply\Core\Template\TemplateEngine;
use Theme2020\Models\Menu\Menu;

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
