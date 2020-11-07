<?php

namespace ClementCore\Controller;

use SimplyFramework\Template\TemplateEngine;

class HomeController {
    /**
     * @var TemplateEngine $templateEngine
     */
    private $templateEngine;
    public function __construct(TemplateEngine $twig) {
        $this->templateEngine = $twig;
    }

    public function home() {
        $this->templateEngine->render('page/home.html.twig', ['title' => 'Hello fregeworld']);
    }
}
