<?php
/**
 * Created by PhpStorm.
 * User: godun
 * Date: 04.08.2016
 * Time: 13:19
 */

namespace App;


abstract class Singleton
{
    private static $instance;

    private function __construct()
    {
        // приватный конструктор ограничивает реализацию getInstance ()
    }

    protected function __clone()
    {
        // ограничивает клонирование объекта
    }

    public static function instance()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }
}