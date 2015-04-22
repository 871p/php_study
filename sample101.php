<?php
/**
* Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/22
 * Time: 13:09
 */
$hour = date('G');
switch ($hour){
    case '6':
        echo "朝の6時です、おはようございます。",PHP_EOL;
        break;
    case '12':
        echo "正午ですこんにちは。",PHP_EOL;
        break;
    case '15':
        echo "3時のおやつの時間です。",PHP_EOL;
        break;
    default:
        echo "どうも",PHP_EOL;
        break;
}
