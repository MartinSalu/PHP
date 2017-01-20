<?php
/**
 * Created by PhpStorm.
 * User: Salu
 * Date: 20.01.2017
 * Time: 10:58
 */
define('CLASSES_DIR', 'classes/');
define('TMPL_DIR', 'tmpl/');
define('STYLE_DIR', 'css/');
// import classes
require_once CLASSES_DIR.'template.php'; // import template class file
require_once CLASSES_DIR.'http.php'; // import http class file
require_once CLASSES_DIR.'linkobject.php'; // import linkobject file
require_once CLASSES_DIR.'mysql.php'; // import database class file
// import database configuration
require_once 'db_conf.php';
// objects
// create linkobject object, because it extends http object
$http = new linkobject();
// create database class object with real values
$db = new mysql(DBHOST, DBUSER, DBPASS, DBNAME);
?>