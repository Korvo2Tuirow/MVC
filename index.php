<?php 

$url = strtoupper($_GET['url']);
if ($url=="CADASTROUSUARIO") {

    require_once "view/cadastro.php";
}

else if($url=="CADASTRA"){
    require_once "controller/UsuarioController.php";
    $controle = new UsuarioController();
    $controle->processa("C");


}













?>