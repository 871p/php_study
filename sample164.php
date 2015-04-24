<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/24
 * Time: 15:19
 */

function array_pass($c){
    $c[0] *= 2;
    $c[1] *= 2;

}

$a = 10;
$b = 20;

$array = array($a,&$b);
array_pass($array);

echo $a,PHP_EOL;
echo $b,PHP_EOL;
