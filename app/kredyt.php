<?php

require_once dirname(__FILE__) . '/../config.php';
require_once dirname(__FILE__) .'/KredytCtrl.class.php';
//include _ROOT_PATH . '/app/security/check.php';
$kredytCtrl = new KredytCtrl();
$kredytCtrl->process();
?>