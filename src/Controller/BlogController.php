<?php

namespace ClementCore\Controller;

use ClementCore\Admin\ThemeSettings;
use ClementCore\Model\Post;
use ClementCore\Utils\Paginator;
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
        $search = get_query_var('s');
        $paginator = new Paginator();
        $this->render('page/blog.html.twig', ['allPosts' => $allPosts, 'pagination' => $paginator->generateOptimizedPagination(), 'keywords' => $search]);
    }
}
