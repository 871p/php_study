<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/22
 * Time: 15:13
 */
function array_output (array $var)
{
    if (is_array($var)) foreach ($var as $v){
    echo $v,PHP_EOL;
    }
}

$array = array(1,2,3);
array_output($array);
