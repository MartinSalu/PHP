<?php
/**
 * Created by PhpStorm.
 * User: Salu
 * Date: 12.01.2017
 * Time: 10:52
 */
class text
{//begin of class
//class variable
    var $str='';
    //class method
    //set text method
    function setText($s){
        $this->str = $s;
    }//setText

    //show text output
    function show(){
        echo $this->str.'<br/>';
    }
}
// }