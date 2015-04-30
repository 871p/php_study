<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/22
 * Time: 16:18
 */
function func_caller($name) //引数に与えられた関数が存在すれば呼び出すための関数
{
    if (function_exists($name)){
        $name();//可変関数として関数の呼び出し
    }
}

function foo()
{
    echo 'foo called',PHP_EOL;
}

func_caller('foo');