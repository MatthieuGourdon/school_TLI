<?php
/* Smarty version 3.1.38, created on 2021-03-11 11:54:42
  from '/var/www/html/school_TLI/smartyTemplate/apropos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6049f6f2e29974_57643392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c4d01ac804f5d5af40e2291ea49e4f28772947e' => 
    array (
      0 => '/var/www/html/school_TLI/smartyTemplate/apropos.tpl',
      1 => 1615459844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6049f6f2e29974_57643392 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <section>
        <div  class="center-div" id="bg-div">
            <h1>A propos & contacts</h1>
            <p class="justif-txt">
                Contactez nous<br><br> 
                Tel : <a href="tel:0452634048">04 52 63 40 48</a><br><br>
                Mail : <a href="mailto:acupuncture@medic.fr?subject=Demande de renseignements&body=Bonjour, je souhaiterais obtenir des renseignements sur ">acupuncture@medic.fr</a>
                <br><br>Adresse : 26 rue république 75006 Paris
            </p>
    </section>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
