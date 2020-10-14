<?php
  require_once './smarty/libs/Smarty.class.php';
class View{
  
    
    private $titulo;

    function __construct(){
        $this->titulo = "Lista de productos";
    }

    function mostrarHome(){
        $smarty = new Smarty();

        $smarty->assign('titulo', $this->titulo);

        $smarty->display('templates/home.tpl');
    }
    function mostrarProducto($producto){ 
        $smarty = new Smarty();

        $smarty->assign('titulo', $this->titulo);
        $smarty->assign('productos', $producto);

        $smarty->display('templates/productos.tpl'); 
    }
    function mostrarProductoPorCategoria($producto){ 
        $smarty = new Smarty();

        $smarty->assign('titulo', $this->titulo);
        $smarty->assign('productos', $producto);

        $smarty->display('templates/categorias.tpl'); 
    }
    function mostrarUnproducto($producto, $id){ 
        $smarty = new Smarty();
        $this->titulo = "Caracteristicas del producto";

        $smarty->assign('titulo', $this->titulo);
        $smarty->assign('producto', $producto);

        $smarty->display('templates/ProductoIndividual.tpl'); 
    }
    function mostrarContacto(){
        $smarty = new Smarty();

        $smarty->display('templates/contacto.tpl');
    }
    function mostrarAdmi($producto, $categoria){
        $smarty = new Smarty();
        
        $smarty->assign('titulo', $this->titulo);
        $smarty->assign('productos', $producto);
        $smarty->assign('categorias', $categoria);

        $smarty->display('templates/admi.tpl');
    }
    function mostrarEditar($producto, $categoria){
        $smarty = new Smarty();

        $titulo = "Edicion de tabla";
        $smarty->assign('titulo', $titulo);
        $smarty->assign('productos', $producto);
        $smarty->assign('categorias', $categoria);

        $smarty->display('templates/editar.tpl');
    }

    function mostrarHomeLocation(){
        header("Location: ".BASE_URL."home");
    }
    function mostrarAdmiLocation(){
        header("Location: ".BASE_URL."administrador");
    }
    function mostrarEditarLocation(){
        header("Location: ".BASE_URL."editar");
    }
}