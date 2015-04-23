<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/23
 * Time: 10:30
 */
class Employee
{
    public $name;
    private $state = '働いている';

    public function getState()
    {
        return $this->state;
    }
    public function setState($state)
    {
        $this->state = $state;
    }

    public function work()
    {
        echo '書類を整理しています',PHP_EOL;
    }
}

$yamada = new Employee();
$yamada->name = '山田';
$yamada->setState('休憩している');
echo $yamada->name, 'さんは',$yamada->getState(),PHP_EOL;
$yamada->job = 'プログラマ';
