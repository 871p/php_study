<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/22
 * Time: 17:05
 */
$my_pow = function($times = 2)
{
    return function ($v) use (&$times)
    {
        return pow($v,$times);
    };
};
$cube = $my_pow(3);

echo $cube(6);
