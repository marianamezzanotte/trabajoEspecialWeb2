<?php
/* Smarty version 3.1.30, created on 2017-09-22 00:18:47
  from "/Applications/XAMPP/xamppfiles/htdocs/web2/trabajoEspecial/trabajoEspecialWeb2/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c43ac740bf70_40621859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6154989e24a4592ee232bb580b6ad07801ca948a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/trabajoEspecial/trabajoEspecialWeb2/templates/index.tpl',
      1 => 1506032281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:lista_categorias.tpl' => 1,
    'file:lista_productos.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59c43ac740bf70_40621859 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1>Lista de Productos</h1>
      <a href="agregarCategoria">Agregar Categoria</a>
      <?php $_smarty_tpl->_subTemplateRender("file:lista_categorias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <a href="agregarProducto">Agregar Producto</a>
      <?php $_smarty_tpl->_subTemplateRender("file:lista_productos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}