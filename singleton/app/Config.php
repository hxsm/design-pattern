<?php

namespace App;

class Config {
    private static $instance;
    private $settings;

    private function __construct() {
        $configFile = __DIR__ . '/../config/config.php';
        $this->settings = require $configFile;
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    public function get($key) {
        return isset($this->settings[$key]) ? $this->settings[$key] : null;
    }
}