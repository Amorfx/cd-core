<?php

namespace ClementCore\Admin;

use ClementCore\Admin\Ajax\GenerateApiToken;
use ClementCore\Admin\Fields\TokenGenerationField;
use ClementCore\Api\TokenGenerator;
use Psr\Container\ContainerInterface;
use Simply\Core\Contract\HookableInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class Admin implements HookableInterface {
    public function register() {
        if (is_admin()) {
            self::initAcfAdmin();
            GenerateApiToken::init();
            self::addNavMenus();
        }
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
        add_action('acf/include_field_types', function() {
            new TokenGenerationField();
        });
    }

    public static function addNavMenus() {
        ThemeMenu::addNavMenus();
    }
}
