<?php
include("../dados_de_conexao.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$id_usuario = $_POST["id"];
$inimigos_derrotados = $_POST["inimigos"];
$tempo = $_POST["tempo"];
$pontos = $_POST["pontos"];
$total = $_POST["total"];

$resposta = array();
$conexao   = mysqli_connect($hostname,$username,$password,$database);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$comando   =  "insert into pontuacoes(id_usuario, inimigos_derrotados, tempo, pontos, total) VALUES ('{$id_usuario}','{$inimigos_derrotados}','{$tempo}','{$pontos}','{$total}')";
mysqli_query($conexao,$comando);
if (mysqli_affected_rows($conexao)>0){
	$resposta["msg"] = "ok";
}else{
	$resposta["msg"] = "falha";
}

echo json_encode($resposta);

mysqli_close($conexao);

?>