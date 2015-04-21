<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/21
 * Time: 9:43
 */
$age = 15;
$foo = <<<EOI
ヒアドキュメントでは、このように
複数行に渡る文章をそのまま表記することができます。

Tom　の年齢は　"$age" 歳です。
EOI;

echo $foo;
