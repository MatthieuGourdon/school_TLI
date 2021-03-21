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

/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'pgsql:dbname=acudb;host=localhost'; //127.0.0.1
$user = 'postgres-tli';
$password = 'tli';

try {
 $dbh = new PDO($dsn, $user, $password);
 //echo "Connexion établie ! \n";
} catch (PDOException $e) {
 echo "Connexion échouée : " . $e->getMessage();
}

if (empty($_POST)){
    $desc = '';
}
else {
    $desc = $_POST["keyword"];
}
$desc = "%$desc%";
$sth = $dbh->prepare('SELECT p.desc as pdesc, s.desc as sdesc
 FROM symptome AS s
 INNER JOIN symptpatho AS sp ON s.ids = sp.ids
 INNER JOIN patho AS p ON sp.idp = p.idp
 WHERE s.desc LIKE :desc OR p.desc LIKE :desc
 ');
$sth->bindParam(':desc',$desc,PDO::PARAM_STR) ;
//$sth->bindValue(':desc', "%$desc%"); 
$sth->execute();

$results = $sth->fetchAll(PDO::FETCH_ASSOC);

//print $results[0]['sdesc'];

foreach ($results as $pathosym) {
    print $pathosym['sdesc'] . " est un symptôme de " . $pathosym['pdesc'];
 print "</br>";
}



?>