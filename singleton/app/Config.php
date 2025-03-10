<?php

# TODO: Créer une classe Config en Singleton

namespace App;

class Config
{
    private static $instance = null;
    private static $settings;

    private function __construct()
    {
        self::$settings = require(__DIR__ . '/../config/config.php');
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function get(string $key)
    {
        return self::$settings[$key] ?? null;
    }
}