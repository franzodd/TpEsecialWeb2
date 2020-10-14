<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-10 21:15:31
  from 'C:\xampp\htdocs\Proyectos\Tpespecial\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8208539b3819_85335030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6e3acc099dd306a2e675dc603ae06f9792e6921' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Tpespecial\\templates\\editar.tpl',
      1 => 1602356583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8208539b3819_85335030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <h2>Edicion categoria</h2>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
        <form class="form_producto" action="modificar_categoria" method="POST">
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item, ocultar"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
<input type="number" name="id" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"></li>
                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
<input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
"></li>
                <input type="submit" value="Modificar">
            </ul>
        </form>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <h2>Edicion productos</h2>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
        <form class="form_producto" action="modificar_tabla" method="POST">
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item, ocultar"><?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
<input type="number" name="id_producto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
"></li>
                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->aroma;?>
<input type="text" name="aroma" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->aroma;?>
"></li>
                <li class="list-group-item"><span>$</span><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
<input type="number" name="precio" step="any" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
"></li>
                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
<select name="id_categoria">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </li>
                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->propiedad;?>
<input type="text" name="propiedad" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->propiedad;?>
"></li>
                <li class="list-group-item"><span>Min</span><?php echo $_smarty_tpl->tpl_vars['producto']->value->duracion;?>
<input type="number" name="duracion" step="any" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->duracion;?>
"></li>
                <input type="submit" value="Modificar">
            </ul>
        </form>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
