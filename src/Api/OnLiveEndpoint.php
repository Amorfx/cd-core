<?php

namespace ClementCore\Api;

use ClementCore\Admin\Ajax\GenerateApiToken;
use ClementCore\Admin\ThemeSettings;

class OnLiveEndpoint {
    public function __construct() {
        add_action( 'rest_api_init', [$this, 'registerEndpoint']);
    }

    public function registerEndpoint() {
        register_rest_route( 'theme/v1/', '/settings/switch-live', array(
            // By using this constant we ensure that when the WP_REST_Server changes our readable endpoints will work as intended.
            'methods'  => \WP_REST_Server::EDITABLE,
            'permission_callback' => [$this, 'canSwitchLive'],
            // Here we register our callback. The callback is fired when this endpoint is matched by the WP_REST_Server class.
            'callback' => [$this, 'switchOnLive'],
        ) );
    }

    public function canSwitchLive() {
        $token = $_POST['token'];
        /** @var TokenGenerator $tokenGenerator */
        $tokenGenerator = \Simply::get(TokenGenerator::class);
        $activeToken = get_option(GenerateApiToken::$tokenOptionKey);
        return wp_check_password($token, $activeToken) && $tokenGenerator->isExpireToken($token) === false;
    }

    public function switchOnLive() {
        $onLive = ThemeSettings::isLive();
        update_field('cd_theme-settings_is-live', !$onLive, 'option');
        echo json_encode(['success' => true, 'onLive' => !$onLive]);
    }
}
