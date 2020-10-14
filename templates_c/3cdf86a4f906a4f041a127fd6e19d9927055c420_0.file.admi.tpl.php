<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 01:06:42
  from 'C:\xampp\htdocs\Proyectos\Tp especial\templates\admi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f76610253c4d1_46928010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cdf86a4f906a4f041a127fd6e19d9927055c420' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Tp especial\\templates\\admi.tpl',
      1 => 1601593599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f76610253c4d1_46928010 (Smarty_Internal_Template $_smarty_tpl) {
?>     <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <div>
         <h2>Añadir producto a la lista</h2>
         <form action="insertar_producto" method="POST" class="formulariproducto">
             <label for="aroma">Aroma del producto</label><input type="text" name="aroma">
             <div class="input-group-prepend">
                 <label for="precio">Precio</label>
                 <span class="input-group-text">$</span>
                 <input type="number" name="precio" step="any">
             </div>
             <label for="categoria">Categoria</label>
             <select id="categoria" name="categoria">
                 <option value="incienso">Incienso</option>
                 <option value="Sahumerio">Sahumerio</option>
                 <option value="Cono">Cono</option>
                 <option value="Aceite hornillo">Aceite hornillo</option>
             </select>
             <input type="submit" value="Enviar producto" class="btn btn-secondary">
         </form>
     </div>
     <div class="input-group mb-3">
         <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
         <div class="input-group-append">
             <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
         </div>
     </div>
     <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['proc']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
         <ul class="list-group list-group-horizontal">
             <li  class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->aroma;?>
<form class="form_producto form_edit" action="modificar_aroma" method="POST"><input class="form_edit" type="number" name="id" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
"><input type="text" name="aroma"><input type="submit" value="Modificar"></form></li>
             <li  class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</li>
             <li  class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</li>
             <li  class="list-group-item"><button class="btn btn-danger"><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" class="borrar_producto">Borrar</a></button></li>
         </ul>
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     <button class="btn btn-warning" id="btn_editar">Editar</button>
     <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
