<?php
require_once('../modelo/crudUsuario.php');
require_once('../modelo/Usuario.php');

class controladorUsuario{

    public function __construct(){}

    public function crearUsuario($e_log){
        $usuario = new Usuario();
        $usuario->setLoginUsuario($e_log);
   

        $crudUsuario = new crudUsuario();
        $crudUsuario->crearUsuario($Usuario);
    }
}
$controladorUsuario = new controladorUsuario();
if(isset($_POST['crear'])){
    echo "Usuario Creado";
    $e_log = $_POST['login'];
    $e_pass = $_POST['pass'];
    $e_nick = $_POST['nick'];
    $e_email = $_POST['email'];

    $controladorUsuario->crearUsuario($e_log);

}
?>