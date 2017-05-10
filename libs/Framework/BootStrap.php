<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-8
 * Time: 下午8:26
 */

namespace Libs\Framework;

use Config\Database;
use Libs\Register;
use Illuminate\Database\Capsule\Manager as Capsule;

class BootStrap
{
    /**
     * 加载控制器
     */
    public function boot()
    {
        if($_SERVER['PATH_INFO'])
        {
            $arr = explode('/',$_SERVER['PATH_INFO']);
            $m = $arr[1];
            $c = $arr[2];
            $a = $arr[3];

            //加载数据库配置
            $capsule = new Capsule();
            $capsule->addConnection(Database::getDatabase());
            $capsule->bootEloquent();

            //加载配置
            \Config\Module::getModules();
            $m = Register::get($m.'_'.$c);
            $m->$a();
        }
    }
}