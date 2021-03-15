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
        $smarty->display('index.tpl');}

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

/* Exécute une requête préparée en liant des variables et valeurs */
if (empty($_POST))
 $desc = '';
else
 $desc = $_POST["Rsymp"];
$sth = $dbh->prepare('SELECT s.desc as sdesc, p.desc as pdesc
 FROM symptome AS s
 INNER JOIN symptpatho AS sp ON s.ids = sp.ids
 INNER JOIN patho AS p ON sp.idp = p.idp
 WHERE s.desc LIKE :desc');
$sth->bindValue(':desc', "%$desc%"); // avec % pour négliger la suite | ou "${desc}%" pourquoi {}?
$sth->execute();

$results = $sth->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
 foreach ($row as $key => $value) {
 print $row[$key] . "X\t";
 }
 print "Z\n";
}
?>