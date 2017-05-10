<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-10
 * Time: 下午1:21
 */

namespace Config;

class Database
{
    static public function getDatabase()
    {
        return [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'en',
            'username' => 'root',
            'password' => 'pass4mingming',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ];
    }
}