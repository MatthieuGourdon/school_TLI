<?php
require_once('../../smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = '../smartyTemplate';
$smarty->setCompileDir('../smartyCompile/');

<<<<<<< HEAD
switch ($_GET["page"]){
    case "index":
        $smarty->display('index.tpl');
        break;
    case "apropos":
        $smarty->display('index.tpl');
        break;
}
echo "Non non non";
=======
$smarty->display('index.tpl');
>>>>>>> b5aef9d11e064465dd9715d85773aa35d6d3a8c6
