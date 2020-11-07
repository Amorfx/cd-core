<?php

namespace ClementCore\Controller;

use SimplyFramework\Template\TemplateEngine;

abstract class BaseController {
    /**
     * @var TemplateEngine $templateEngine
     */
    protected $templateEngine;

    public function __construct(TemplateEngine $engine) {
        $this->templateEngine = $engine;
    }
}
