<?php
/**
 * Created by PhpStorm.
 * User: Salu
 * Date: 12.01.2017
 * Time: 11:20
 */
//use text object class
require_once 'test.php';
//create objects
$sentence1 = new text('Tere VS16!');
//object output
echo '<pre>';
print_r($sentence1);
echo '</pre>';
//set text value
//$sentence1->setText('Tere VS16!');

$sentence2 = new text('Tere koos konstruktoriga');

echo '<pre>';
print_r($sentence2);
echo '</pre>';
//object output by show method
echo'<hr/>';
