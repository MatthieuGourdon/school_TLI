<!DOCTYPE HTML>
<html>
    <?php
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
    ?>
    <?php
        $reponse = $bdd->query('SELECT * FROM patho');
    ?>

    <?php
        $donnees = $reponse->fetch();
    ?>
</html>