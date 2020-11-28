<?php

namespace ClementCore\Controller;

use Simply\Core\Template\TemplateEngine;

abstract class BaseController {
    /**
     * @var TemplateEngine $templateEngine
     */
    protected $templateEngine;

    public function __construct(TemplateEngine $engine) {
        $this->templateEngine = $engine;
    }

    protected function render($template, $context = []) {
        $this->templateEngine->render($template, $context);
    }
}
