<?php
include("../dados_de_conexao.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$nome  = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$resposta = array();
$conexao = mysqli_connect($hostname,$username,$password,$database);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "insert into usuarios (name,username,password) values('{$nome}','{$usuario}','{$senha}')";
mysqli_query($conexao,$sql);
if (mysqli_affected_rows($conexao)>0){
	$resposta["msg"] = "ok";
}

echo json_encode($resposta);

mysqli_close($conexao);

?>	