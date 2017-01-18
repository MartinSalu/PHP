<?php
/**
 * Created by PhpStorm.
 * User: Salu
 * Date: 12.01.2017
 * Time: 12:58
 */
//create and template object
define('CLASSES_DIR', 'classes/');
define('TMPL_DIR', 'tmpl/');
define('CSS_DIR','CSS/');
require_once CLASSES_DIR.'template.php';
// and use it
// create an template object,
// set up the file name for template
// load template file content
$tmpl = new template('main');
//
$tmpl->set('menu','minu menüü');
$tmpl->set('nav_bar','minu navigatsioon');
$tmpl->set('lang_bar','minu keeleriba');
$tmpl->set('content','minu sisu');
$tmpl->set('title','minu lehepealkiri');
// control the content of template object
//echo '<pre>';
// print_r($tmpl);
//echo '</pre>';

echo $tmpl->parse();

/*
//and use it
$tmpl = new template();
//set up the file for template
$tmpl->file='main.html';
//control the content of template objcets
echo '<pre>';
print_r($tmpl);
echo '</pre>';
// load template file content
$tmpl->loadFile();
// control the content of template object
echo '<pre>';
print_r($tmpl);
echo '</pre>';
*/
?>