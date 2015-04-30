<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/23
 * Time: 14:29
 */
abstract class Employee
{
    abstract public function work();

}

class Programmer extends Employee
{
    public function work()
    {

    }
}
