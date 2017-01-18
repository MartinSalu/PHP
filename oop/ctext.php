<?php

/**
 * Created by PhpStorm.
 * User: Salu
 * Date: 13.01.2017
 * Time: 12:04
 */
//import text class variables and methd
require_once 'text.php';
class ctext extends text
{//begin of class
    var $color = false;//color does not exist
    // method
    //set up the color
    function setColor($c){
        //set up $c parameter value
        //this-> color variable
        $this->color=$c;
    }//setColor
    //show object
    function show()
    {
        if($this->color===false) {
            parent::show();
        }else{
            echo '<font color>="'.$this->color.'">'.$this->str.'</font>';
        }
    }

}//end of class