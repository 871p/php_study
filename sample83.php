<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/21
 * Time: 16:00
 */
$fruits = array(
    'apple',
    'banana',
    'orange',
);

echo $fruits[0],PHP_EOL;
foreach($fruits as  $key => $value){
    print ','.$value;
}
