<?php
/* Smarty version 3.1.30, created on 2017-09-25 01:05:11
  from "/Applications/XAMPP/xamppfiles/htdocs/web2/trabajoEspecial/trabajoEspecialWeb2/templates/categorias.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c83a276da184_99709385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5b4934669aadccff38cfbb5c239a400afe4e915' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/trabajoEspecial/trabajoEspecialWeb2/templates/categorias.tpl',
      1 => 1506293392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:lista_categorias.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59c83a276da184_99709385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1>Lista de Categorias</h1>
      <a href="addCategory" class="btn btn-primary">Agregar Categoria</a>
      <?php $_smarty_tpl->_subTemplateRender("file:lista_categorias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
