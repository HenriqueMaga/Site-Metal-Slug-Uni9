<?php
include("../dados_de_conexao.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$email = $_POST["username"];
$senha = $_POST["password"];

$conexao = mysqli_connect($hostname,$username,$password,$database);
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
}

$comando  = "select * from usuarios where username='$email' and password='$senha'";
$resultado = mysqli_query($conexao,$comando);
if ($dado = mysqli_fetch_assoc($resultado)){
	session_start();
	$_SESSION["id"] = $dado["id"];
	$_SESSION["username"] = $dado["username"];
	$_SESSION["name"] = $dado["name"];
	$_SESSION["password"] = $dado["password"];

        //echo "Deu certo ";
        //echo $_SESSION["name"];
        
        mysqli_free_result($resultado);
        mysqli_close($conexao);

        header("location: ../index.php");
} else {

        echo "nao deu certo";
        mysqli_free_result($resultado);
        mysqli_close($conexao);
}




?>