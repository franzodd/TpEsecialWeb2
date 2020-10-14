<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-10 22:27:09
  from 'C:\xampp\htdocs\Proyectos\Tpespecial\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f82191d898948_20437304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50f9e2e91a2458f2c31fe92538b4ec85c53e3c25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Tpespecial\\templates\\categorias.tpl',
      1 => 1602361445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f82191d898948_20437304 (Smarty_Internal_Template $_smarty_tpl) {
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
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->aroma;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php }
}
