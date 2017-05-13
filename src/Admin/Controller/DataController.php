<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-12
 * Time: 下午4:01
 */

namespace MF\Admin\Controller;

use MF\Controller;

class DataController extends Controller
{
    public function index()
    {
        return $this->render('data/index',['item' => 'data']);
    }
}