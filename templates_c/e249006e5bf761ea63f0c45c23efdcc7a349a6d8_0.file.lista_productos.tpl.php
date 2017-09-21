<?php
/* Smarty version 3.1.30, created on 2017-09-22 00:18:47
  from "/Applications/XAMPP/xamppfiles/htdocs/web2/trabajoEspecial/trabajoEspecialWeb2/templates/lista_productos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c43ac7420761_52623360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e249006e5bf761ea63f0c45c23efdcc7a349a6d8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/trabajoEspecial/trabajoEspecialWeb2/templates/lista_productos.tpl',
      1 => 1505786991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c43ac7420761_52623360 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
      <li><?php echo $_smarty_tpl->tpl_vars['product']->value['nombre'];?>
</li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php }
}
