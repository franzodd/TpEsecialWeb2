<?php

require_once './models/ModelProducto.php';
require_once './models/ModelCategoria.php';
require_once './views/view.php';

class Controller {

    private $view;
    private $model;
    private $model_cat;

    function __construct(){
        $this->view = new View();
        $this->model = new ModelProducto();
        $this->model_cat = new ModelCategoria();
    }
    private function ChequearSesion(){
        session_start();
        if(!isset($_SESSION["EMAIL"])){
            header("Location: ".Iniciar_sesion);
            die();
        }else{
            if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) { 
                header("Location: ".Iniciar_sesion);
                die();
            } 
            $_SESSION['LAST_ACTIVITY'] = time();
        }
    }
    function viewHome(){
        $this->view->mostrarHome();
    }
    function viewProductos(){
        $productos = $this->model->getProductosConCategoria();
        $this->view->mostrarProducto($productos);
    }
    function viewProductosPorCategoria($params = null){
        $id_categoria = $params[":ID"];
        $producto = $this->model->getPorCategoria($id_categoria);
        $this->view->mostrarProductoPorCategoria($producto);
    }
    function viewUnProducto($params = null){
        $id_producto = $params[":ID"];
        $producto = $this->model->getUnProduto($id_producto);
        $this->view->mostrarUnproducto($producto, $id_producto);
    }
    function viewContacto(){
    $this->view->mostrarContacto();
    }
    function viewAdministrador(){
        $this->ChequearSesion();
        
        $categorias = $this->model_cat->getCategorias();
        $productos = $this->model->getProductosConCategoria();
        $this->view->mostrarAdmi($productos, $categorias);
    }
    function viewEditar(){
        $this->ChequearSesion();
        $categorias = $this->model_cat->getCategorias();
        $productos = $this->model->getProductosConCategoria();
        $this->view->mostrarEditar($productos,$categorias);
    }
    function datosDeProducto(){
        if (isset($_REQUEST['aroma'])) {
            $this->model->insertaProducto($_REQUEST['aroma'],$_REQUEST['precio'],$_REQUEST['id_categoria'],$_REQUEST['propiedad'],$_REQUEST['duracion']);
        }
        $this->view->mostrarAdmiLocation();
    }
    function datosDeCategoria(){
        if (isset($_REQUEST['nombre'])) {
            $this->model_cat->insertaCategoria($_REQUEST['nombre']);
        }
        $this->view->mostrarAdmiLocation();
    }
    function borrarProductoPorParametro($params = null){
        $this->ChequearSesion();
        $id_producto = $params[":ID"];
        $this->model->borrarProducto($id_producto);
        $this->view->mostrarAdmiLocation();
    }
    function borrarCategoriaPorParametro($params = null){
        $this->ChequearSesion();
        $id_producto = $params[":ID"];
        $this->model_cat->borrarCategoria($id_producto);
        $this->view->mostrarAdmiLocation();
    }
    function modificarProductos(){
        $this->ChequearSesion();
        if (isset($_REQUEST['aroma'])) {
            $this->model->modificarProducto($_REQUEST['id_producto'], $_REQUEST['aroma'],$_REQUEST['precio'],$_REQUEST['id_categoria'],$_REQUEST['propiedad'],$_REQUEST['duracion']);
        }
        $this->view->mostrarEditarLocation();
    }
    function modificarCategorias(){
        $this->ChequearSesion();
        if (isset($_REQUEST['nombre'])) {
            $this->model_cat->modificarCategoria($_REQUEST['id'], $_REQUEST['nombre']);
        }
        $this->view->mostrarEditarLocation();
    }
}