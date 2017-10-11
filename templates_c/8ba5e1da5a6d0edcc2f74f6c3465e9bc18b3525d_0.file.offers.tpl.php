<?php
/* Smarty version 3.1.30, created on 2017-10-11 04:45:52
  from "C:\xampp\htdocs\Proyectos\TPERWK\templates\offers.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dd85e0cafac6_87822499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ba5e1da5a6d0edcc2f74f6c3465e9bc18b3525d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\TPERWK\\templates\\offers.tpl',
      1 => 1507689616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:filteredOffers.tpl' => 1,
  ),
),false)) {
function content_59dd85e0cafac6_87822499 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-2">
        <div class="row">
            <div class="col-md-12 mb-1">
                <button class="btn btn-default ml-2 js-offers-buttons category-button" id="allOffersButton">
                    Todas
                </button>
            </div>
        </div>       
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
        <div class="row">
            <div class="col-md-12 mb-1">
                <button class="btn btn-default ml-2  js-offers-buttons category-button" id="<?php echo $_smarty_tpl->tpl_vars['category']->value['id_categoria'];?>
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
    <div class="col-md-9 js-offers">
        <?php $_smarty_tpl->_subTemplateRender("file:filteredOffers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</div><?php }
}
