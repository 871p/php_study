<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/23
 * Time: 13:55
 */
class Employee
{
    const PARTTIME = 0x01;
    const REGULAR = 0x02;
    const CONTRACT = 0x04;

    private $name;
    private $type;

    public function __construct($name,$type)
    {
        $this->name = $name;
        $this->type = $type;
    }
}
$yamada = new Employee('山田' ,Employee::REGULAR);

var_dump($yamada);