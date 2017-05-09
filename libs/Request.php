<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-9
 * Time: 下午1:23
 */

namespace Libs;

use Libs\Http\RequestInterface;

class Request implements RequestInterface
{
    public function testrequest()
    {
        echo 'adfasdfasdf';
    }
}