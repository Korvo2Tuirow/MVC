<?php 
require_once "model/Usuario.php";
class UsuarioController{

public function processa($acao){

    if($acao == "C"){
        $novoUsuario = new Usuario();
        $novoUsuario->setNomeUsuario($_POST['nomeUsuario']);
        $novoUsuario->setEmail($_POST['email']);
        $novoUsuario->setSenha($_POST['senha']);
        $novoUsuario->setNumTel($_POST['numeroCelular']);
        $novoUsuario->setPaisNasc($_POST['paisUsuario']);
        $novoUsuario->setSexo($_POST['sexo']);
        $novoUsuario->setCpf($_POST['cpf']);
        $novoUsuario->setDtNasc($_POST['dataNasc']);
        $novoUsuario->cadastrarUsuario();

    }

}










}














?>