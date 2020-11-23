<?php

namespace ClementCore\Admin\Ajax;

use ClementCore\Api\TokenGenerator;

class GenerateApiToken {
    static $tokenOptionKey = 'cd_api_token';
    static function init() {
        add_action('wp_ajax_generateApiToken', function() {
            header('Content-Type: application/json');
            /** @var TokenGenerator $tokenGenerator */
            $tokenGenerator = \Simply::get(TokenGenerator::class);
            $data = ['action' => 'themeApi'];
            $token = $tokenGenerator->generate($data, true, 'P6M');
            update_option(self::$tokenOptionKey, wp_hash_password($token), false);
            echo json_encode(['token' => $token]);
            exit();
        });
    }
}
