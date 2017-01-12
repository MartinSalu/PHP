<?php

/**
 * Created by PhpStorm.
 * User: Salu
 * Date: 12.01.2017
 * Time: 12:27
 */
//if TMPL_DIR is not defined
if(!defined(''TMPL_DIR)){
    //define this constant and use in class template
    define('TMPL_DIR','../tmpl/');
}
class template
{
    //class variebles
    var $file='';//template file name
    var $content =false; //Template content is empty - now is empty
    //Class methods
    function loadFile(){
        $f$this->file; //use file name variable
        //if some problems with tmpl directory

        if(!is_dir(TMPL_DIR)){
            echo'Kataloogi'.TMPL_DIR. 'ei ole leitud!<br/>'
            exit;
        }
        //if we allready have tmpl directory
        if(file_exists($f)) and is file($f) and is_readable($f){
            $this->readFile($f);
        }
        //we can set path to template file://tmpl/file.html, $this->file is file.html
        $f= TMPL_DIR.$this->file;
        if(file_exists($f)) and is file($f) and is_readable($f){
            $this->readFile($f);
        //we can set only file name, this -> file is file
        $f= TMPL_DIR.$this->file.'.html';
        if(file_exists($f)) and is file($f) and is_readable($f){
        $this->readFile($f);
        if($this->content === false){
            echo 'Ei saanud lugeda faili'.$this->file.'.<br/>';
            exit;

        )
        }
}
    }//load file
    function readFile($f){
        $this->content=file_get_contents($f);
    }

}//class end