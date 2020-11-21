<?php

namespace ClementCore\Controller;

use ClementCore\Admin\ThemeMenu;
use ClementCore\Admin\ThemeSettings;
use ClementCore\Api\TokenGenerator;
use Theme2020\Models\Menu\Menu;

class HomeController extends BaseController {
    public function home() {
        //  Get Menu
        $headerMenu = new Menu(ThemeMenu::$headerNavSlug);
        $menuItems = $headerMenu->getItems();

        // Get RS
        $socialNetworks = ThemeSettings::getRs();

        // Body data
        $presentation = ThemeSettings::getPresentationData();
        $services = ThemeSettings::getHomeServices();

        $this->render('page/home.html.twig', [
            'headerMenuItems' => $menuItems,
            'socialNetworks' => $socialNetworks,
            'presentation' => $presentation,
            'services' => $services
        ]);
    }
}
