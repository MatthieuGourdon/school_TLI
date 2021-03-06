<?php 
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

/*
if (empty($_POST))
 $desc = '';
else
 $desc = $_POST["Rsymp"];
$sth = $dbh->prepare('SELECT s.desc as sdesc, p.desc as pdesc
 FROM symptome AS s
 INNER JOIN symptpatho AS sp ON s.ids = sp.ids
 INNER JOIN patho AS p ON sp.idp = p.idp
 WHERE s.desc LIKE :desc');
$sth->bindValue(':desc', "%$desc%"); 
$sth->execute();

$results = $sth->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
 foreach ($row as $key => $value) {
    print $row[$key] . "  ";
}
 print "</br>";
}
*/

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
    print $pathosym['sdesc'] . " est un symptôme de " . $pathosym['pdesc'] . "</br>";
 print "</br>";
}



?>