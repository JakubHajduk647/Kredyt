<?php
require_once 'Config.class.php';
require_once (dirname(__FILE__).'./lib/smarty/libs/Smarty.class.php');
$config = new Config();

$config->root_path = dirname(__FILE__);
$config->server_name = 'localhost:80';
$config->server_url = 'http://'.$config->server_name;
$config->app_root = '/kredyt';
$config->app_url = $config->server_url.$config->app_root;


$smarty = new Smarty;
$smarty->template_dir = $config->root_path.'./templates';
$smarty->assign('app_url',$config->app_url);




?>