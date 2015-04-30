<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/22
 * Time: 11:45
 */
$dice = range(1,6);
shuffle($dice);
foreach ($dice as $value){
 if($value % 2 !== 0) {
     continue;
    }
    echo $value,PHP_EOL;
}
