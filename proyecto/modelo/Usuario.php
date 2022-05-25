<?php
class Usuario{
    private $idUsuario;
    private $login;
    private $pass;
    private $nick;
    private $email;

    public function __construct(){}

    //metodos set

    public function setIdUsuario($e_id){
         $this->idUsuario = $e_id;
    }

    public function setLoginUsuario($e_log){
        $this->login = $e_log;
    }

    public function setPassUsuario($e_pass){
         $this->pass = $e_pass;
    }

    public function setNickUsuario($e_nick){
         $this->nick = $e_nick;
    }

    public function setEmailUsuario($e_email){
         $this->email = $e_email ;
    }


    //metodos get 
    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function getLoginUsuario(){
        return $this->login;
    }

    public function getPassUsuario(){
        return $this->pass;
    }

    public function getNickUsuario(){
        return $this->nick;
    }

    public function getEmailUsuario(){
        return $this->email;
    }

}
?>