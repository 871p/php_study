<?php
/**
 * Created by PhpStorm.
 * User: yanai
 * Date: 2015/04/22
 * Time: 14:02
 */
$array = array(1,1.5,"2",true,);
$new_array = array_map('strval',$array);

var_dump($new_array);

