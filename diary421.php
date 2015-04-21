<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/21
 * Time: 17:18
 */
$a = rand(30,100);

echo "今日の充実度は $a ％です。";

if($a >= 95){
    echo "☆神☆";
}
elseif($a >= 60) {
    echo "今日は楽しかったです。";
}
else
    echo "今日は思うようにいかなかった。明日はやり方を修正します。";