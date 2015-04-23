<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/23
 * Time: 17:13
 */
class Employee
{
    public function __toString()
    {
        return 'This class is:'.__CLASS__;
    }
}
$yamada = new  Employee();
echo $yamada;