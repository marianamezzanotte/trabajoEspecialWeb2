<?php
/* Smarty version 3.1.30, created on 2017-10-09 06:51:16
  from "C:\xampp\htdocs\Proyectos\TPERWK\templates\filteredProducts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59db0044960b70_93330954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6559e7783f5024c7094bbf5d06531e7bbfbb1ac7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\TPERWK\\templates\\filteredProducts.tpl',
      1 => 1507524675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59db0044960b70_93330954 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12">   
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>    
            <?php echo $_smarty_tpl->tpl_vars['product']->value["nombre"];?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    
    </div>
</div><?php }
}
