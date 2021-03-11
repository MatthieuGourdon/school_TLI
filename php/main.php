<?php
require_once('/var/www/html/smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = '/var/www/html/school_TLI/tpl';
$smarty->setCompileDir('/var/www/html/smartyCompile/');


$text = 'gros gâteau';
$smarty->assign('text', $text);

$smarty->display('index.tpl');
