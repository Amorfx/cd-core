<?php

namespace ClementCore\Controller;

class HomeController extends BaseController {
    public function home() {
        $this->templateEngine->render('page/home.html.twig', ['title' => 'Hello fregeworld']);
    }
}
