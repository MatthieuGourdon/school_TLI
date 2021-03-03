<?php
require_once('/var/www/html/smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = '/var/www/html/school_TLI/php';
$smarty->setCompileDir('/var/www/html/smartyCompile/');


$text = 'oui';
$smarty->assign('text', $text);
$smarty->display('header.tpl');