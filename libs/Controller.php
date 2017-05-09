<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-9
 * Time: 上午9:23
 */

namespace Libs;

use Libs\Http\ControllerInterface;
use Libs\Http\RequestInterface;

class Controller implements ControllerInterface
{
    public $req;

    public function __construct(RequestInterface $request)
    {
        $this->req = $request;
    }

}

