<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/22
 * Time: 14:46
 */
function add($v1,$v2)
 {
     $answer = $v1 + $v2;
     return $answer;
 }

$v3 = add(1,2);

echo $v3;