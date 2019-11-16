<?php
/**
 * Created by PhpStorm.
 * User: prabhatdas
 * Date: 2019-03-26
 * Time: 10:24
 */

$text_variable=array('p1','p2','p3');

//var_dump($text_variable);

$text_variable2=array(
    array(
        'p01'=>'hello',
        'p02'=>'world',
        'p05'=>'world'
    ),
    array(
        'p11'=>'hello',
        'p12'=>'world'
    ),
);

//var_dump($text_variable2);

//echo $text_variable2['p1'];

$json_data=json_encode($text_variable2);

echo $json_data;


