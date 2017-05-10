<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-10
 * Time: 上午10:41
 */

namespace MF\Application\Controller;

use MF\Application\Model\User;

class UserController
{
    public function test()
    {
        $user_model = new User();
        $user_model->findUser();
    }
}