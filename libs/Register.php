<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-8
 * Time: 下午8:35
 */

namespace Libs;

class Register
{

    static protected $objtree = [];

    static public function bind($alias,$obj)
    {
        if(! self::get($alias))
            self::$objtree[$alias] = $obj;
    }

    static public function get($alias)
    {
        return self::$objtree[$alias];
    }

    static public function unbind($alias)
    {
        unset(self::$objtree[$alias]);
    }
}