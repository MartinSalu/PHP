<?php
/**
 * Created by PhpStorm.
 * User: Salu
 * Date: 12.01.2017
 * Time: 11:20
 */
//use text object class
class text
{// text class begin
    // class variables = instance variables
    var $str = '';
    // contructor
    function __construct($s = ''){
        $this->setText($s);
    }// construct
    // methods
    // set text function
    function setText($s){
        $this->str = $s;
    }// setText
    // show text function
    function show(){
        echo $this->str.'<br/>';
    }// show
}// text class end
?>
