<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-10 17:54:30
  from 'C:\xampp\htdocs\Proyectos\Tpespecial\templates\ProductoindIvidual.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f81d936dedcd1_61151361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '213424437456997292b9afd72ec4d1b4b2b07201' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Tpespecial\\templates\\ProductoindIvidual.tpl',
      1 => 1602345266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f81d936dedcd1_61151361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
<ul class="list-group list-group-horizontal">
    <li class="list-group-item">Aroma</li>
    <li class="list-group-item">Precio</li>
    <li class="list-group-item">Categoria</li>
</ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produ']->value, 'produc');
$_smarty_tpl->tpl_vars['produc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['produc']->value) {
$_smarty_tpl->tpl_vars['produc']->do_else = false;
?>
    <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['produc']->value->aroma;?>
</li>
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['produc']->value->precio;?>
</li>
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['produc']->value->nombre;?>
</li>
    </ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
