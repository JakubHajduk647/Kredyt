<?php
define('_SERVER_NAME', 'localhost');
define('_SERVER_URL', 'http://'._SERVER_NAME);
define('_APP_ROOT', '/kredyt');
define('_APP_URL', _SERVER_URL._APP_ROOT);
define("_ROOT_PATH", dirname(__FILE__));

require_once (_ROOT_PATH.'./lib/smarty-3.1.35/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = _ROOT_PATH.'./templates';
$smarty->assign('app_url',_APP_URL);

function out(&$param){
	if (isset($param)){
		echo $param;
	}
}
?>