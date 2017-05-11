<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-11
 * Time: 下午7:39
 */

namespace Libs\Factory;

class ViewFactory
{
    static public function make($class)
    {
        return new $class;
    }
}