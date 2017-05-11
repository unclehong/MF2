<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-11
 * Time: 下午7:53
 */

namespace Libs;

use Twig_LoaderInterface;

class View extends \Twig_Environment
{
    public function __construct(Twig_LoaderInterface $loader, array $options = array())
    {
        parent::__construct($loader, $options);
    }
}