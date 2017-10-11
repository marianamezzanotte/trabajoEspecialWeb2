<?php
/* Smarty version 3.1.30, created on 2017-10-11 05:25:20
  from "C:\xampp\htdocs\Proyectos\TPERWK\templates\filteredOffers.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dd8f2010bc45_27989957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b9cb22fcf8374012c525d3a24b37674d4db547f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\TPERWK\\templates\\filteredOffers.tpl',
      1 => 1507692316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dd8f2010bc45_27989957 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12 ml-3 mb-2  product-shower-separator ">
        <div class="row">
            <div class="col-md-3 ml-4 p-2 category-indicator">
                <span><?php echo $_smarty_tpl->tpl_vars['categoryName']->value;?>
</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 product-shower ">  
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <div class="product-box m-3 p-2 ">
                <h2>
                    <?php echo $_smarty_tpl->tpl_vars['product']->value["nombre"];?>

                </h2>
                <div>
                    <p><?php echo $_smarty_tpl->tpl_vars['product']->value["descripcion"];?>
</p>
                </div>
                <div>
                    <span>Precio: <?php echo $_smarty_tpl->tpl_vars['product']->value["precio"];?>
$</span>
                </div>
                    <div>
                        <span>Descuento: <?php echo $_smarty_tpl->tpl_vars['product']->value["descuento"];?>
%</span>
                    </div>
                <div>
                    <?php $_smarty_tpl->_assignInScope('index', $_smarty_tpl->tpl_vars['product']->value["id_categoria"]-1);
?>
                    <span><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['index']->value]["nombre"];?>
</span>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    
            </div>   
        </div>         
    </div>
</div><?php }
}
