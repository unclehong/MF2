<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 17-5-10
 * Time: 下午1:29
 */

namespace MF\Application\Model;

use MF\Model;

class User extends Model
{
    protected $table = 'members';
    public $timestamps = false;

    public function findUser()
    {
        var_dump($this->get());

        echo '------------------'.'<br />';
        var_dump($this->where('id','<',1000)->get());
    }

    public function getUser()
    {
        echo '------------------'.'<br />';
        var_dump($this->where('id','<',1000)->get());
    }
}