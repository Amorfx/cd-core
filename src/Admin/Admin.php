<?php

namespace ClementCore\Admin;

class Admin {
    public static function init() {
        self::initAcfAdmin();
        self::addNavMenus();
    }
    public static function initAcfAdmin() {
        add_action('acf/init', function () {
            acf_add_options_page(array(
                'page_title'    => 'Theme settings',
                'menu_title'    => 'Theme Settings',
                'menu_slug'     => 'theme-general-settings',
                'capability'    => 'edit_posts',
            ));
        });
    }

    public static function addNavMenus() {
        ThemeMenu::addNavMenus();
    }
}
