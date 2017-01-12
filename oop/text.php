<?php
/**
 * Created by PhpStorm.
 * User: Salu
 * Date: 12.01.2017
 * Time: 11:20
 */
//use text object class
require_once 'text.php';
//create objects
$sentence1 = new text();
//object output
echo '<pre>';
print_r($sentence1);
echo '</pre>';
//set text value
$sentence1->setText('Tere VS16!');

echo '<pre>';
print_r($sentence2);
echo '</pre>';
//object output by show method
$sentence2->show();
echo'<hr/>';
$sentence2 = new text('Tere koos konstruktoriga');