<?php
namespace module\traits;

trait Singleton {
    static private $_instance = null;

    private function __construct() {}
    private function __clone() {}

    static public function get_instance() {
        if (self::$_instance instanceof self) {
            return self::$_instance;
        }
        return self::$_instance = new self;
    }
}