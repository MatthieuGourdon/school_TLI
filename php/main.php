<?php
require_once('../../smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = '../smartyTemplate';
$smarty->setCompileDir('../smartyCompile/');

switch ($_GET["page"]){
    case "index":
        $smarty->display('index.tpl');
        break;
    case "apropos":
        $smarty->display('apropos.tpl');
        break;
    case "pathology":
        $smarty->display('pathologypage.tpl');
        break;
    default:
        echo "Non non non";
}
?>