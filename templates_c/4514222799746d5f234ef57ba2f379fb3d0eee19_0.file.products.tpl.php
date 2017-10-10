<?php
/* Smarty version 3.1.30, created on 2017-10-09 06:38:45
  from "C:\xampp\htdocs\Proyectos\TPERWK\templates\products.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dafd5528e050_13704406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4514222799746d5f234ef57ba2f379fb3d0eee19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\TPERWK\\templates\\products.tpl',
      1 => 1507523884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dafd5528e050_13704406 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-3">       
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
            <div class="row">
                <div class="col-md-12 mb-2">
                    <button class="btn btn-default bg-danger js-category-buttons" id="<?php echo $_smarty_tpl->tpl_vars['category']->value['id_categoria'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['category']->value["nombre"];?>

                    </button>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    
        </div>
        <div class="col-md-9 js-product-list">
            
        </div>
    </div>
<?php }
}
