<?php
/* Smarty version 3.1.30, created on 2017-09-25 01:05:22
  from "/Applications/XAMPP/xamppfiles/htdocs/web2/trabajoEspecial/trabajoEspecialWeb2/templates/newCategory.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c83a32ef0b67_47005134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0390b35157d7bbf6bf74e24b9c4eabb794da2ba8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/trabajoEspecial/trabajoEspecialWeb2/templates/newCategory.tpl',
      1 => 1506293222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59c83a32ef0b67_47005134 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1>Agregar Categorias</h1>
      <form>
        <div class="form-group">
          <label for="category-name">Nombre de Categoria:</label>
          <input type="text" class="form-control" id="category-name" placeholder="Nombre de la categoria">
        </div>
        <button type="submit" class="btn btn-default">Agregar Categoria</button>
      </form>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
