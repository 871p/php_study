<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/22
 * Time: 14:56
 */
function hello ($name,$greeting = 'Hello!')
{
    echo $greeting, $name,PHP_EOL;
}

hello('Bob','Good morning');
hello('Tom');

