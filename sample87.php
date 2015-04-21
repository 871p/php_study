<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/21
 * Time: 17:01
 */
$a = array('a' => 1, 'b' => 3, 'c' => 5,);
$b = array('a' => 1, 'c' => 5, 'b' => 3,);
$c = array('a' => 1, 'b' => 2,);

var_dump($a == $b);
var_dump($a === $b);

var_dump($a + $c);
var_dump($c + $a);
