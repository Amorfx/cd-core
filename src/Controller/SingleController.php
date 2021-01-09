<?php

namespace ClementCore\Controller;

use Simply\Core\Query\SimplyQuery;

class SingleController extends BaseController {

    public function post() {
        $currentPost = SimplyQuery::getCurrentObject();
        $this->render('single/post.html.twig', ['currentPost' => $currentPost]);
    }
}
