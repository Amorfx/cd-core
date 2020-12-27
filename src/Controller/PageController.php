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

class PageController extends BaseController {
    public function getDefaultData() {
        return [
            'page_title' => get_the_title(),
        ];
    }

    public function index() {
        $this->render('page/index.html.twig', $this->getDefaultData());
    }

    public function contact() {
        $data = $this->getDefaultData();
        $this->render('page/contact.html.twig', $data);
    }
}
