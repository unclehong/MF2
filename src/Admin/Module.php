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
use MF\Admin\Controller\BaseController;
use MF\Admin\Controller\DataController;
use MF\Admin\Controller\EnglishController;
use MF\Admin\Controller\FrameController;
use MF\Admin\Controller\MemberController;
use MF\Admin\Controller\WordController;

class Module
{
    static public function createController()
    {
        Register::bind('admin_frame',ControllerFactory::make(FrameController::class));
        Register::bind('admin_member',ControllerFactory::make(MemberController::class));
        Register::bind('admin_english',ControllerFactory::make(EnglishController::class));
        Register::bind('admin_word',ControllerFactory::make(WordController::class));
        Register::bind('admin_data',ControllerFactory::make(DataController::class));
    }
}