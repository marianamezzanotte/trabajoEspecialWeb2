<?php
/* Smarty version 3.1.30, created on 2017-09-22 00:13:51
  from "/Applications/XAMPP/xamppfiles/htdocs/web2/trabajoEspecial/trabajoEspecialWeb2/templates/lista_categorias.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c4399f0c5914_61541583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57f6ba7760cc7ad2cb07a814300c8b72d12be16a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/trabajoEspecial/trabajoEspecialWeb2/templates/lista_categorias.tpl',
      1 => 1506025602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c4399f0c5914_61541583 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
      <li><?php echo $_smarty_tpl->tpl_vars['category']->value['nombre'];?>
</li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php }
}
