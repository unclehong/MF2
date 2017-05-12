<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-10
 * Time: 下午9:10
 */

namespace MF\Admin\Controller;

use MF\Controller;

class MemberController extends Controller
{
    public function index()
    {
        return $this->render('member/index',['item' => 'member']);
    }
}