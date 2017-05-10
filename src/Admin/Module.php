<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-10
 * Time: 下午8:30
 */

namespace MF\Admin;

use Libs\Factory\ControllerFactory;
use Libs\Register;
use MF\Admin\Controller\FrameController;
use MF\Admin\Controller\MemberController;

class Module
{
    static public function createController()
    {
        Register::bind('admin_frame',ControllerFactory::make(FrameController::class));
        Register::bind('admin_member',ControllerFactory::make(MemberController::class));
    }
}