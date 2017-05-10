<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-10
 * Time: 上午11:01
 */

namespace Config;

class Module
{
    static public function getModules()
    {
        \MF\Application\Module::createController();
        \MF\Admin\Module::createController();
    }
}
