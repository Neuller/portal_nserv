<?php
require_once "../../Classes/Conexao.php";
require_once "../../Classes/Utilitarios.php";

$c = new conectar();
$conexao = $c -> conexao();
$obj = utilitarios();

$idUsuario = $_SESSION["id_usuario"];

echo $obj -> nomeUsuario($idUsuario);
?>