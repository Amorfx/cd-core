<?php

namespace ClementCore\Admin;

class ThemeSettings {
    static $isLive;

    static function getRs() {
        return get_field('cd_theme-settings_rs', 'option');
    }

    /**
     * @return boolean
     */
    static function isLive() {
        if (!is_null(self::$isLive)) {
            return self::$isLive;
        }
        self::$isLive = get_field('cd_theme-settings_is-live', 'option');
        return self::$isLive;
    }

    static function getPresentationData() {
         return [
             'mainText' => get_field('cd-_theme-settings_home-presentation', 'option'),
             'subtext' => get_field('cd-_theme-settings_home-sub-presentation', 'option'),
             'callToAction' => get_field('cd-_theme-settings_home-presentation-call-to-action', 'option')
        ];
    }

    static function getHomeServices() {
        return get_field('cd-_theme-settings_home-services', 'option');
    }
}
