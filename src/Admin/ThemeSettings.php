<?php

namespace ClementCore\Admin;

class ThemeSettings {
    static function getRs() {
        return get_field('cd_theme-settings_rs', 'option');
    }
}
