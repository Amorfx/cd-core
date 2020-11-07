<?php

namespace ClementCore\Admin;

class Admin {
    public static function initAcfAdmin() {
        acf_add_options_page(array(
            'page_title'    => 'Theme settings',
            'menu_title'    => 'Theme Settings',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
        ));
    }
}
