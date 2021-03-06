<?php

namespace ClementCore\Controller;

use ClementCore\Admin\ThemeMenu;
use ClementCore\Admin\ThemeSettings;
use ClementCore\Api\TokenGenerator;
use ClementCore\Repository\ProjectRepository;
use ClementCore\Repository\ProjectTagRepository;
use Simply\Core\Contract\CacheInterface;
use Simply\Core\Repository\PostRepository;
use Simply\Core\Template\TemplateEngine;
use Theme2020\Models\Menu\Menu;

class HomeController extends BaseController {
    private $projectTagRepository;
    private $projectRepository;
    private $cache;

    public function __construct(TemplateEngine $engine, ProjectTagRepository $projectTagRepository, ProjectRepository $projectRepository, CacheInterface $cache) {
        parent::__construct($engine);
        $this->projectTagRepository = $projectTagRepository;
        $this->projectRepository = $projectRepository;
        $this->cache = $cache;
    }

    public function home() {
        $this->render('page/home.html.twig', [
            'presentation' => ThemeSettings::getPresentationData($this->cache),
            'services' => ThemeSettings::getHomeServices(),
            'project_tags' => $this->projectTagRepository->findBy(['hide_empty' => true]),
            'projects' => $this->projectRepository->findBy([], ['meta_key' => 'cd-project_grid-position', 'order' => 'ASC'])
        ]);
    }
}
