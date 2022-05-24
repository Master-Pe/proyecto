<?php
//AQUI FUNCIOES COMO CREAR, LEER, MODIFICAR,ELIMINAR DE LA TABLA USUARIO

require_once('conexion.php');
require_once('Usuario.php');

class crudUsuario{
    public function __construct(){}

    public function crearUsuario($usuario){
        $mensaje = '';
        $baseDatos = Conexion::conectar();

        $sql = $baseDatos->prepare('INSERT INTO usuarios(id_usuario,login_usuario,pass_usuario,nick_usuario,email_usuario) VALUES(:e_id_usuario,:e_login_usuario,:e_pass_usuario,:e_nick_usuario,:e_email_usuario)');

        $sql->bindValue('e_id_usuario',$usuario->getIdUsuario());
        $sql->bindValue('e_login_usuario',$usuario->getLoginUsuario());
        $sql->bindValue('e_pass_usuario',$usuario->getPassUsuario());
        $sql->bindValue('e_nick_usuario',$usuario->getNickUsuario());
        $sql->bindValue('e_email_usuario',$usuario->getEmailUsuario());

        try{
            $sql->execute();
            $mensaje = "registro exitoso";    
        }

        catch(Exception $excepcion){
            $mensaje = "Problemas en el registro";
        }

        Conexion::desconectar($baseDatos);
        return $mensaje;
    }
}
?>