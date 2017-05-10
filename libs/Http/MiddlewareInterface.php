<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-9
 * Time: 上午9:11
 */

namespace Libs\Http;

interface MiddlewareInterface
{
    public function handle();
}