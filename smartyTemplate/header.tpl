<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>A.A.A</title>

  <link rel="stylesheet" href="../css/main.css">

  <script src="../js/main.js"></script>
</head>
<body>

<header>
        <!--Entête de navigation-->
        <h1 class="logo">A.A.A</h1>
        <nav>
            <ul>
                <li><a class="active" href="../html/main.html">Accueil</a></li><!--Permet d'enlever l'espace blanc causé par inline block
                --><li>
                    <div class="dropdown">
                        <button class="dropdown_button">Pathologies</button>
                        <div class="dropdown_content">
                            <a href="../html/pathologypage.html">patho1</a>
                            <a href="../html/pathologypage.html">patho2</a>
                            <a href="../html/pathologypage.html">patho3</a>
                            <a href="../html/pathologypage.html">patho4</a>
                            <a href="../html/pathologypage.html">patho5</a>
                            <a href="../html/pathologypage.html">patho6</a>
                        </div>
                    </div>
            </li><!--
            --><li><a href="main.php?page=apropos">A propos & contact</a></li><!--
            --><li id="li_connexion">
                    <div class="form_connexion">
                        <button class="connexion_bouton">Connexion</button>
                        <form method="GET">
                            <input id="userID" type="text" title="identifiant" placeholder="Identifiant" />
                            <input id="userPass" type="password" title="mot de passe" placeholder="Mot de passe" />
                            <button type="submit" class="bouton_connexion">Connexion</button>
                        </form>
                    </div>
                </li>
        </ul>
    </nav>
  </header>