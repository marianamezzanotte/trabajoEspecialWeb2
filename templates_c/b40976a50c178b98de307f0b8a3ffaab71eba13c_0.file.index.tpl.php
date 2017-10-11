<?php
/* Smarty version 3.1.30, created on 2017-10-11 04:06:54
  from "C:\xampp\htdocs\Proyectos\TPERWK\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dd7cbe496ac0_12811118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b40976a50c178b98de307f0b8a3ffaab71eba13c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\TPERWK\\templates\\index.tpl',
      1 => 1507687597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59dd7cbe496ac0_12811118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <article>
            <div class="container-fluid content-space js-section-content mt-3">
                
            </div>
        </article>
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/sectionNavigation.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/categoryNavigation.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/offersNavigation.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
