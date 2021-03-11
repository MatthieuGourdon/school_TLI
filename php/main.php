<?php
require_once('/var/www/html/smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = '/var/www/html/school_TLI/php';
$smarty->setCompileDir('/var/www/html/smartyCompile/');


$text = 'gros gâteau';
$smarty->assign('text', $text);
<<<<<<< HEAD
$smarty->display('header.tpl');
=======

$smarty->display('index.tpl');
>>>>>>> 88ddb917bcb70318eea0adaf3553798ae5d76f56
