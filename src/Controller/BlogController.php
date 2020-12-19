<?php

namespace ClementCore\Controller;

use ClementCore\Admin\ThemeMenu;
use ClementCore\Admin\ThemeSettings;
use ClementCore\Api\TokenGenerator;
use ClementCore\Repository\ProjectRepository;
use ClementCore\Repository\ProjectTagRepository;
use Simply\Core\Query\SimplyQuery;
use Simply\Core\Repository\PostRepository;
use Simply\Core\Template\TemplateEngine;
use Theme2020\Models\Menu\Menu;

class BlogController extends BaseController {
    public function __construct(TemplateEngine $engine) {
        parent::__construct($engine);
    }

    /**
     * Function called in infinite load in blog page
     */
    public function getPosts() {

    }

    public function index() {
        $allPosts = SimplyQuery::getCurrentQuery()->posts;
        $this->render('page/blog.html.twig', ['allPosts' => $allPosts]);
    }
}
