<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-10 22:14:24
  from 'C:\xampp\htdocs\Proyectos\Tpespecial\templates\admi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f821620461280_90605170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be3439cd928d14abaff360c78ecb9507b9c8b844' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Tpespecial\\templates\\admi.tpl',
      1 => 1602360861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f821620461280_90605170 (Smarty_Internal_Template $_smarty_tpl) {
?>     <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <div>
         <div class="btn btn-outline-secondary">
             <a href="cerrar_sesion">Cerrar sesion</a>
         </div>
         <h2>Añadir nueva categoria</h2>
         <form action="insertar_categoria" method="POST" class="formulariproducto">
             <label for="nombre">Nombre categoria nueva</label><input type="text" name="nombre">
             <input type="submit" value="Agregar categoria" class="btn btn-secondary">
         </form>
         <h2>Lista categorias</h2>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
             <ul class="list-group list-group-horizontal">
                 <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>

                 </li>
                 <li class="list-group-item"><button class="btn btn-danger"><a href="borrar_categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
" class="borrar_producto">Borrar</a></button></li>
             </ul>
         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         <h2>Añadir producto a la lista</h2>
         <div class="formulariproducto">
             <form action="insertar_producto" method="POST" >
                 <label for="aroma">Aroma del producto</label><input type="text" name="aroma">
                 <div class="input-group-prepend">
                     <label for="precio">Precio</label>
                     <span class="input-group-text">$</span>
                     <input type="number" name="precio" step="any">
                 </div>
                 <label for="categoria">Categoria</label>
                 <select id="categoria" name="id_categoria">
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
                 <label for="propiedad">Propiedad</label>
                 <input type="text" name="propiedad">
                 <label for="duracion">Duracion en minutos</label>
                 <input type="number" name="duracion">
                 <input type="submit" value="Agregar producto" class="btn btn-secondary">
             </form>
         </div>
     </div>
     <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
     <div>
         <h3>Editar lista</h3>
         <button class="btn btn-outline-secondary"><a href="editar">Editar</a></button>
     </div>
     <ul class="list-group list-group-horizontal">
         <li class="list-group-item">Aroma</li>
         <li class="list-group-item">Precio</li>
         <li class="list-group-item">Categoria</li>
     </ul>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
         <ul class="list-group list-group-horizontal">
             <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->aroma;?>

             </li>
             <li class="list-group-item"><span>$</span><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>

             </li>
             <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>

             </li>
             <li class="list-group-item"><button class="btn btn-danger"><a href="borrar_producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" class="borrar_producto">Borrar</a></button></li>
         </ul>
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


     <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
