<?php
require_once('../../softwares/smarty-3.1.38/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = '../php';

$text = 'oui';
$smarty->assign('text', $text);
$smarty->display('head.tpl'); 
?>