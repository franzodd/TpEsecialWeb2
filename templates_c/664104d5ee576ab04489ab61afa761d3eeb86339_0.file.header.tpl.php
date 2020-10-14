<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-10 17:25:51
  from 'C:\xampp\htdocs\Proyectos\Tpespecial\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f81d27f7ccb77_18001250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '664104d5ee576ab04489ab61afa761d3eeb86339' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Tpespecial\\templates\\header.tpl',
      1 => 1602343467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f81d27f7ccb77_18001250 (Smarty_Internal_Template $_smarty_tpl) {
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

<body>
    <header class="encabezado">
        <figure class="fig-header">
            <img src="img/logo.jpg" alt="Logo" class="logo">
            <figure class="redes-sociales">
                <a href="https://www.facebook.com/Ramas-Arom%C3%A1ticas-Padma-Hana-1540280592886262/" target="_blank»">
                    <img src="img/fb.png" alt="facebook" class="iconos"></a>
                <a href="https://www.instagram.com/inciensospadmahana/?hl=es-la" target="_blank»">
                    <img src="img/ig.png" alt="instagram" class="iconos"></a>
                <img src="img/wp.png" alt="whatsapp" class="iconos">
            </figure>
        </figure>
        <hgroup class="h-header">
            <h1>Padma Hana</h1>
            <h2>Inciensos Puros</h2>
        </hgroup>
    </header>
        <nav class="menu">
        <div class="menu-bar">
            <a href="#" class="bt-menu"><span class="icon-menu spanicono"></span>Menu</a>
        </div>
        <nav class="navegador" class="menu-left">
            <ul class="nav">
                <li><a href="home"><span class="icon-home spanicono"></span>Home</a></li>
                <li><a href="productos"><span class="icon-shop spanicono"></span>Productos</a></li>
                <li><a href="contacto"><span class="icon-envelope spanicono"></span>Contacto</a></li>
                <li><a href="administrador"><span class="icon-envelope spanicono"></span>Administracion</a></li>
            </ul>
        </nav>
    </nav><?php }
}
