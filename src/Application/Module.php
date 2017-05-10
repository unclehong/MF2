<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-9
 * Time: 下午5:57
 */

namespace MF\Application;

use Libs\Factory\ControllerFactory;
use Libs\Register;
use MF\Application\Controller\ArtController;
use MF\Application\Controller\UserController;

class Module
{
    static public function createController()
    {
        Register::bind('application_user',ControllerFactory::make(UserController::class));
        Register::bind('application_art',ControllerFactory::make(ArtController::class));
    }
}