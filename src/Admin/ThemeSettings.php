<?php

namespace ClementCore\Admin;

class ThemeSettings {
    static function getRs() {
        return get_field('cd_theme-settings_rs', 'option');;
    }

    static function getPresentationData() {
         return [
             'mainText' => get_field('cd-_theme-settings_home-presentation', 'option'),
             'subtext' => get_field('cd-_theme-settings_home-sub-presentation', 'option'),
             'callToAction' => get_field('cd-_theme-settings_home-presentation-call-to-action', 'option')
        ];
    }
}
