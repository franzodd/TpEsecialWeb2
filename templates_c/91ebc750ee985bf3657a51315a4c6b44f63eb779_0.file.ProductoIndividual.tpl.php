<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-10 22:22:03
  from 'C:\xampp\htdocs\Proyectos\Tpespecial\templates\ProductoIndividual.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8217ebd7fa53_11991346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91ebc750ee985bf3657a51315a4c6b44f63eb779' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Tpespecial\\templates\\ProductoIndividual.tpl',
      1 => 1602361320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8217ebd7fa53_11991346 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padma Hana</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="./css/fonts/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="./js/index.js"><?php echo '</script'; ?>
>
</head>
<h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
<div class="btn btn-outline-secondary">
    <a href="../productos">Volver</a>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>Aroma</th>
            <th>Precio</th>
            <th>Categoria</th>
            <th>Propiedad</th>
            <th>Duracion</th>
        </tr>
    </thead>
</table>
<ul class="list-group">
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->aroma;?>
</li>
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</li>
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</li>
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->propiedad;?>
</li>
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->duracion;?>
</li>
</ul><?php }
}
