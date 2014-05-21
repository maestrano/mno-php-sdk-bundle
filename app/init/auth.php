<?php
//-----------------------------------------------
// Define root folder and load base
//-----------------------------------------------
if (!defined('MAESTRANO_ROOT')) {
  define("MAESTRANO_ROOT", realpath(dirname(__FILE__) . '/../../'));
}
require MAESTRANO_ROOT . '/app/init/base.php';

//-----------------------------------------------
// Require your app specific files here
//-----------------------------------------------
define('CL_ROOT', realpath(MAESTRANO_ROOT . '/../'));
//require CL_ROOT . '/include/somelibsofmine.php';
//require CL_ROOT . '/include/class.mygroupclass.php';
//require CL_ROOT . '/include/class.myuserclass.php';

//-----------------------------------------------
// Perform your custom preparation code
//-----------------------------------------------
// Set options to pass to the MnoSso* entities
$opts = array();

// E.g:
// if (!empty($db_name) and !empty($db_user)) {
//     $conn = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
//     
//     $opts['db_connection'] = $conn;
// }


