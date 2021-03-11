<?php
/* Smarty version 3.1.38, created on 2021-03-11 11:59:23
  from '/var/www/html/school_TLI/smartyTemplate/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6049f80b79df55_96686629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a373cfed0c2a3037f37a824be4347696901e681f' => 
    array (
      0 => '/var/www/html/school_TLI/smartyTemplate/header.tpl',
      1 => 1615460353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6049f80b79df55_96686629 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>A.A.A</title>

  <link rel="stylesheet" href="../css/main.css">

  <?php echo '<script'; ?>
 src="../js/main.js"><?php echo '</script'; ?>
>
</head>
<body>

<header>
        <!--Entête de navigation-->
        <h1 class="logo">A.A.A</h1>
        <nav>
            <ul>
                <li><a class="active" href="main.php?page=index">Accueil</a></li><!--Permet d'enlever l'espace blanc causé par inline block
                --><li>
                    <div class="dropdown">
                        <button class="dropdown_button">Pathologies</button>
                        <div class="dropdown_content">
                            <a href="main.php?page=pathology">patho1</a>
                            <a href="main.php?page=pathology">patho2</a>
                            <a href="main.php?page=pathology">patho3</a>
                            <a href="main.php?page=pathology">patho4</a>
                            <a href="main.php?page=pathology">patho5</a>
                            <a href="main.php?page=pathology">patho6</a>
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
  </header><?php }
}
