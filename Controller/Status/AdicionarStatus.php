<?php 
session_start();

require_once "../../Model/Conexao.php";
require_once "../../Model/Status.php";

$data = date("Y-m-d");
$idusuario = $_SESSION["id_usuario"];
$descricao = $_POST['descricao'];

$obj = new status();

$dados = array(
$idusuario,
$descricao,
$data
);

echo $obj-> adicionarStatus($dados);
?>