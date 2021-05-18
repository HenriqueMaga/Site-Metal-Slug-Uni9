<?php
include("../dados_de_conexao.php"); 

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$conexao = mysqli_connect($hostname,$username,$password,$database);
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
}

$rows = array();
$comando  = 'SELECT `pontuacoes`.*, `usuarios`.name FROM `pontuacoes` INNER JOIN `usuarios` ON `pontuacoes`.id_usuario = `usuarios`.id ORDER BY  `pontuacoes`.total desc ';
$resultado = mysqli_query($conexao,$comando);
if (mysqli_fetch_array($resultado)){
        while($row = mysqli_fetch_array($resultado)) {
            array_push($rows,$row);
        }
        
        print("<pre>".print_r($rows,true)."</pre>");
        echo $rows;
        
        mysqli_free_result($resultado);
        mysqli_close($conexao);

} else {

        echo "nao deu certo";
        mysqli_free_result($resultado);
        mysqli_close($conexao);
}

?>