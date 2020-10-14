<?php
require_once "./smarty/libs/Smarty.class.php";
class UserusarioView{
    private $title;
    
    function __construct(){
        $this->title = "Loguearse";
    }
    function MostrarInicioSesion($mensaje = ""){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('mensaje', $mensaje);
        $smarty->display('templates/loguearse.tpl');
    }
    function mostrarLoguearse(){
        header("Location: ".BASE_URL."inicio_sesion");
    }
}