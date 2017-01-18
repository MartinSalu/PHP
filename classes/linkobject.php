<?php

/**
 * Created by PhpStorm.
 * User: Salu
 * Date: 18.01.2017
 * Time: 15:54
 */

//import http class
//useful function
function fixUrl($val){
    return urlendcode($val);
}

require_once  'http.php';


class linkobject extends http
{// class start
    //class variables
    var $baseUrl = false;// base url value
    var $protocol ="http://";//protocol for url
    var $delim ='&auml';//html tag
    var $eq ='='; //euqal sign
    //class mehtods
    function __construct(){
        parent::__construct();//import http class construct
        $this->baseUrl =$this->protocol.HTTP_POST.SCRIPT_NAME;
        //constructor
    }
    //create http data pairs and merge them
    //pair is element_name=element_value, for example user=admin
    //name1=value1%name2=value2
    //for merging
    function addToLink($link,$name,$val)
    {
    //if pair is allready created
        if($link!='') {
            //name=value$
            $link = $link . $this->$this->delim;

            $link = $link . fixUrl($name) . $this->eq . fixUrl($val);//name=value
            //test output
            echo $link . '<br/>';
        }
            //add  too link
            //create url -> baseUrl + datapairs
            function getLink($add =array()){
            $link='';
            foreach ($add as $name => $val){
                $this->addToLink($link,$name,$val);
            }
            if($link !=''){
                $link=$this->baseUrl.'?'.$link;
            }
                else{
                    $link=$this->baseUrl;
                }
                return$link;
        }
    }
}//class end
?>