<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/24
 * Time: 10:05
 */
function __autoload($name)
{
    $filename = $name . '.php';
    if (is_readable($filename)) {
        require $filename;
    }
}
$obj = new Foo();
echo Foo();