<?php
include("../dados_de_conexao.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$email = $_POST["username"];
$senha = $_POST["password"];

$usuario = array();

$conexao   = mysqli_connect($hostname,$username,$password,$database);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}


$comando   = "select * from usuarios where username='$email' and password='$senha'";
$resultado = mysqli_query($conexao,$comando);
if ($dado = mysqli_fetch_assoc($resultado)){
	$usuario["id"]    = $dado["id"];
	$usuario["username"]  = $dado["username"];
	$usuario["name"]  = $dado["name"];
	$usuario["password"] = $dado["password"];
	echo json_encode($usuario);
}else{
	echo json_encode($usuario);
}

mysqli_free_result($resultado);
mysqli_close($conexao);


?>	