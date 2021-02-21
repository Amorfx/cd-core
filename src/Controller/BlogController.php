<?php

namespace ClementCore\Controller;

use ClementCore\Admin\ThemeSettings;
use ClementCore\Model\Post;
use ClementCore\Utils\Paginator;
use Simply\Core\Model\TermObject;
use Simply\Core\Query\SimplyQuery;

class BlogController extends BaseController {
    public function index() {
        $allPosts = SimplyQuery::getCurrentQuery()->getQueriedPosts();
        $search = get_query_var('s');
        $paginator = new Paginator();
        $currentObject = SimplyQuery::getCurrentObject();
        $isAuthor = is_author();
        $this->render('page/blog.html.twig', ['allPosts' => $allPosts, 'pagination' => $paginator->generateOptimizedPagination(), 'keywords' => $search, 'isAuthor' => $isAuthor, 'currentObject' => $currentObject]);
    }

    public function taxonomy() {
        /** @var TermObject $term */
        $term = SimplyQuery::getCurrentObject();
        $allPosts = SimplyQuery::getCurrentQuery()->getQueriedPosts();
        $paginator = new Paginator();
        $this->render('page/blog.html.twig', ['allPosts' => $allPosts, 'pagination' => $paginator->generateOptimizedPagination(), 'term' => $term]);
    }
}
