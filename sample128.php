<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/23
 * Time: 13:20
 */
class Employee
{
    private static $company = '技評技術者';

    public static function getCompany()
    {
        return self::$company;
    }

    public static function setCompany($value)
    {
        self::$company = $value;
    }
}
echo Employee::getCompany(),PHP_EOL;
Employee::setCompany('技術評論社');
