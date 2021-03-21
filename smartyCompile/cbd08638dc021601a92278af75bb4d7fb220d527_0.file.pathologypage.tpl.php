<?php
/* Smarty version 3.1.38, created on 2021-03-21 16:43:04
  from '/var/www/html/school_TLI/smartyTemplate/pathologypage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_605769884f9885_63713282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbd08638dc021601a92278af75bb4d7fb220d527' => 
    array (
      0 => '/var/www/html/school_TLI/smartyTemplate/pathologypage.tpl',
      1 => 1616341379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_605769884f9885_63713282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<?php ';?>
include('../request.php'); <?php echo '?>';?>


<section>
        <div  class="center-div" id="bg-div">
            <form action="" method="post">
              <label for="keyword">Rechercher par mot-clé: </label>
              <input type="text" name="keyword" id="keyword" required>
              <input type="submit" value="Rechercher">
            </form>
        </div>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
