<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-10
 * Time: 上午11:30
 */

namespace MF\Application\Controller;

use MF\Controller;

class ArtController extends Controller
{
    public function test()
    {
        return $this->success();
        //return 'this is the art test';
    }

    public function test_render()
    {
        $this->assign('content',['username' => 'mingming','password' => 'pass4mingming']);
        return $this->render('user/index');
    }
}