<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/23
 * Time: 10:01
 */
class Employee
{
    public function work()
    {
        echo '書類を整理しています',PHP_EOL;
    }
}

$yamada = new Employee();
$yamada->work();