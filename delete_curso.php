<?php

// Inclui conexão com o banco
include "db_connect.php";

$id = $_GET['idCurso']; // pega o row id da url

// Preparar para remover os dados de acordo com o rowid
$query = "DELETE FROM Cursos WHERE idCurso=$idCurso";

// Executa a query para remover o dado
if( $db->query($query) ){
	$mensagem = "Dados removido com sucesso";
}else {
	$mensagem = "Desculpe, dados não removidos.";
}

echo $mensagem;
?>
<a href="list.php">Voltar</a>
