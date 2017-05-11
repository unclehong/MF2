<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-10
 * Time: 下午6:09
 */

namespace MF\Admin\Controller;

use MF\Controller;

class FrameController extends Controller
{
    public function index()
    {
        return $this->render('frame/index',['item' => 'frame']);
    }
}