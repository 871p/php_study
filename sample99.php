<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/22
 * Time: 10:54
 */
$dice = range(1,6);
shuffle($dice);
foreach ($dice as $value){
    echo $value,PHP_EOL;
    if ($value === 6){
        break;
    }
}
