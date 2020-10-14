<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 19:41:50
  from 'C:\xampp\htdocs\Proyectos\Tpespecial\templates\loguearse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f77665e722cb2_51718105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '241d1ec92148ed9fef2dc97d1bb99a64325dbe79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Tpespecial\\templates\\loguearse.tpl',
      1 => 1601660468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f77665e722cb2_51718105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <form action="verificar_usuario" method="post">
      <div class="form-group">
            <label for="user">Ususario</label>
            <input type="text" class="form-control" id="user" name="input_usuario" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" id="pass" name="input_pass">
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
    <h2 class="msj_error"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h2>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
