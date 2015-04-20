<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/20
 * Time: 16:03
 */
$array = array(1,2,3,4,5,6); // $arrayはすべてのグローバルスコープからアクセス可能です。
foreach ($array as $i) { //foreach構文で配列を走査します。
    echo $i, PHP_EOL;
}
echo "Last: ",$i,PHP_EOL;
?>

<?php echo "a b"; ?> <br> <?php echo "c d e"; ?>

