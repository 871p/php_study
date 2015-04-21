<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/21
 * Time: 16:42
 */
$fruits = array(
    'apple' => array(
        'price' => 100,
        'count' => 2,
    ),
    'banana' => array(
        'price' => 80,
        'count' => 5,
    ),
    'orange' => array(
        'price' => 90,
        'count' => 3,
    ),
);

foreach($fruits as $name => $value){
    echo "$name　は　１つ　{$value['price']}円で、 {$value['count']}個です",PHP_EOL;
}