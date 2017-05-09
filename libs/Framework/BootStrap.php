<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-8
 * Time: 下午8:26
 */

namespace Libs\Framework;

use Libs\Controller;
use Libs\Request;

class BootStrap
{
    public function test()
    {
        $ctl = new Controller(new Request());
        $ctl->req->testrequest();
    }
}