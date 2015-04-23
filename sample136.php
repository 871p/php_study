<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/23
 * Time: 16:51
 */

interface Reader
{
    public function read();

}

interface Writer
{
    public function write($value);
}

class Configure implements Reader,Writer
{
    public function write($value)
    {

    }
    public function read()
    {

    }
}