<?php

require_once "./views/UsuarioView.php";
require_once "./models/UsuarioModel.php";

class UsuarioController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new UserusarioView();
        $this->model = new UsuarioModel();
    }
    function InicioSesion(){
        $this->view->MostrarInicioSesion();
    }
    function CerrarSesion(){
        session_start();
        session_destroy();
        $this->view->mostrarLoguearse();
    }
    function VerificarUsuario(){
        $usuario = $_POST["input_usuario"];
        $pass = $_POST["input_pass"];
        if(isset($usuario)){
            $usuarioFromDB = $this->model->GetUsuario($usuario);
            if(isset($usuarioFromDB) && $usuarioFromDB){
                if (password_verify($pass, $usuarioFromDB->password)){
                    session_start();
                    $_SESSION["EMAIL"] = $usuarioFromDB->email;
                    $_SESSION['LAST_ACTIVITY'] = time();
                    header("Location: ".BASE_URL."administrador");
                }else{
                    $this->view->MostrarInicioSesion("Contraseña incorrecta");
                }
            }else{
                $this->view->MostrarInicioSesion("El usuario no existe");
            }
        }
    }
}

