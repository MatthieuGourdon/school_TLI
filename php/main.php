<?php
require_once('../../smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = '../smartyTemplate';
$smarty->setCompileDir('../smartyCompile/');

if (isset($_GET["page"])){  //on teste si la variable page est définie avant d'en analyser la valeur
    switch ($_GET["page"]){
        case "index":
            $smarty->display('index.tpl');
            break;
        case "apropos":
            $smarty->display('apropos.tpl');
            break;
        case "pathology":
  //          $smarty->assign('requete','../request.php');            
            $smarty->display('pathologypage.tpl');
            include("request.php");
            break;

        default:
            $smarty->display('index.tpl');}
}
else {$smarty->display('index.tpl');}



?>