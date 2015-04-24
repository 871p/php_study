<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/24
 * Time: 13:43
 */
$a = 10;
$ref =& $a;
$ref =& $c;
$ref = 30;
echo $a,PHP_EOL;
echo $c,PHP_EOL;
echo $ref;