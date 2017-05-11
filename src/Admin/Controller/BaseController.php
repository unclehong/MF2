<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-10
 * Time: 下午9:43
 */

namespace MF\Admin\Controller;

use MF\Controller;

class BaseController extends Controller
{

    public function __construct()
    {
        $this->header();
        $this->left();
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