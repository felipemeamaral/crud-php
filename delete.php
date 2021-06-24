<?php

// Inclui conexão com o banco
include "db_connect.php";

$idAluno = $_GET['idAluno']; // pega o row id da url

// Preparar para remover os dados de acordo com o rowid
$query = "DELETE FROM Aluno WHERE idAluno=$idAluno";

// Executa a query para remover o dado
if( $db->query($query) ){
	$mensagem = "Dados removido com sucesso";
}else {
	$mensagem = "Desculpe, dados não removidos.";
}

echo $mensagem;
?>
<a href="list.php">Voltar</a>
