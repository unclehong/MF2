<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-12
 * Time: 上午11:12
 */

namespace MF\Admin\Controller;

use MF\Controller;

class EnglishController extends Controller
{
    public function index()
    {
        return $this->render('english/index',['item' => 'english']);
    }
}