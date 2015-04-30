<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/22
 * Time: 16:49
 */
function add($v1,$v2)
{
    return $v1 + $v2;
}

class Math
{
    public function sub($v1,$v2)
{
    return $v1 - $v2;
}
    public static function add($v1,$v2)
    {
        return $v1 + $v2;
    }
}
call_user_func('add',1,2);
call_user_func(function ($v1,$v2){return $v1 + $v2;},1,2);
