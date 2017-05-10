<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-10
 * Time: 上午11:50
 */

namespace Libs;

use Libs\Http\ResponseInterface;

class Response implements ResponseInterface
{
    /**
     * 返回json
     */
    static public function json(Array $arr)
    {
        header('Content-type: application/json');
        exit(json_encode($arr));
    }
}