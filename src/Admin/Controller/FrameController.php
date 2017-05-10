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
    public function __construct()
    {
        $this->header();
        $this->left();
    }

    public function index()
    {
        return $this->render('frame/index');
    }

    public function header()
    {
        return $this->render('frame/header');
    }

    public function left()
    {
        return $this->render('frame/left');
    }
}