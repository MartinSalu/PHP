<?php
/**
 * Created by PhpStorm.
 * User: Salu
 * Date: 12.01.2017
 * Time: 12:58
 */
// create and template object
define('CLASSES_DIR', 'classes/'); // classes path
define('TMPL_DIR', 'tmpl/'); // templates path
define('STYLE_DIR', 'css/'); // styles path
define('ACTS_DIR', 'acts/'); // acts path
define('DEFAULT_ACT', 'default'); // default act file name
require_once CLASSES_DIR.'template.php';
// and use it
// create an template object,
// set up the file name for template
// load template file content
$tmpl = new template('main');
// add pairs of temlate element names and real values
$tmpl->set('style', STYLE_DIR.'main'.'.css');
$tmpl->set('header', 'minu lehe pealkiri');
// import http class
require_once CLASSES_DIR.'http.php';
// import linkobject class
require_once CLASSES_DIR.'linkobject.php';
// create and output http object from linkobject class
$http = new linkobject();
// create and output menu
// import menu file
require_once 'menu.php'; // in this file is menu creation
$tmpl->set('menu', $menu->parse());
$tmpl->set('nav_bar', 'minu navigatsioon');
$tmpl->set('lang_bar', 'minu keeleriba');
$tmpl->set('content', 'minu sisu');
/*
// control the content of template object
echo '<pre>';
print_r($tmpl);
echo '</pre>';
*/
// output template content set up with real values
echo $tmpl->parse();

// control database object
// create test query
$sql = 'SELECT NOW();';
$res = $db->getArray($sql);
$sql = 'SELECT NOW();';
$res = $db->getArray($sql);
$sql = 'SELECT NOW();';
$res = $db->getArray($sql);
// control database query result
echo '<pre>';
print_r($res);
echo '</pre>';
// query time control
$db->showHistory();

?>

<!-- control http object output
/*echo '<pre>';
print_r($http);
echo '</pre>';*/
// control http constants
echo REMOTE_ADDR.'<br />';
echo PHP_SELF.'<br />';
echo SCRIPT_NAME.'<br />';
echo HTTP_HOST.'<br />';
echo '<hr />';
// create http data elements for url testing
//name=value
//
$http->set('kasutaja', 'Martin');
$http->set('tund', 'php programmeerimisvahendid');
// control $http->vars object output
/*echo '<pre>';
print_r($http->vars);
echo '</pre>';*/
// control link creation
$link = $http->getLink(array('kasutaja'=>'martin', 'parool'=>'qwerty'));
//echo $link.'<br />';
// control http output
//echo '<pre>';
//print_r($http);
//echo '</pre>';
//// control element value by name
//echo $http->get('act');
//
// control actions
// import act file
require_once 'act.php';

?>-->