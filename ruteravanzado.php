<?php
    require_once "controller/controller.php";
    require_once "controller/UsuarioController.php";
    require_once 'ruterclass.php';
    
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define('Iniciar_sesion', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/inicio_sesion');

    $ruter = new Router();


    $ruter->addRoute("home", "GET", "controller", "viewHome");
    $ruter->addRoute("productos", "GET", "controller", "viewProductos");
    $ruter->addRoute("categoria/:ID", "GET", "controller", "viewProductosPorCategoria");
    $ruter->addRoute("un_producto/:ID", "GET", "controller", "viewUnProducto");
    $ruter->addRoute("contacto", "GET", "controller", "viewContacto");
    $ruter->addRoute("administrador", "GET", "controller", "viewAdministrador");
    $ruter->addRoute("editar", "GET", "controller", "viewEditar");
    
    $ruter->addRoute("insertar_producto", "POST", "controller", "datosDeProducto");
    $ruter->addRoute("insertar_categoria", "POST", "controller", "datosDeCategoria");

    $ruter->addRoute("borrar_producto/:ID", "GET", "controller", "borrarProductoPorParametro");
    $ruter->addRoute("borrar_categoria/:ID", "GET", "controller", "borrarCategoriaPorParametro");
    
    $ruter->addRoute("modificar_tabla", "POST", "controller", "modificarProductos");
    $ruter->addRoute("modificar_categoria", "POST", "controller", "modificarCategorias");
  
    $ruter->addRoute("verificar_usuario/", "POST", "UsuarioController", "VerificarUsuario");
    $ruter->addRoute("inicio_sesion/", "GET", "UsuarioController", "InicioSesion");
    $ruter->addRoute("cerrar_sesion/", "GET", "UsuarioController", "CerrarSesion");

    $ruter->setDefaultRoute("controller", "viewHome");

    $ruter->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
