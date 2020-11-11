<?php

namespace ClementCore\Controller;

use ClementCore\Admin\ThemeMenu;
use ClementCore\Admin\ThemeSettings;
use Theme2020\Models\Menu\Menu;

class HomeController extends BaseController {
    public function home() {
        //  Get Menu
        $headerMenu = new Menu(ThemeMenu::$headerNavSlug);
        $menuItems = $headerMenu->getItems();

        // Get RS
        $socialNetworks = ThemeSettings::getRs();
        $this->render('page/home.html.twig', ['headerMenuItems' => $menuItems, 'socialNetworks' => $socialNetworks]);
    }
}
