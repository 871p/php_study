<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/21
 * Time: 10:12
 */
$var = 1;
var_dump(isset($var));
$var = null;
var_dump(isset($var));
var_dump($var);
unset($var);
var_dump(isset($var));
var_dump($var);
