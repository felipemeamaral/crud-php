<?php
$mensagem = ""; // Mensagem inicial

// Inclur conexao com db
include "db_connect.php";

// Atualizar a linha da tabela com os dados enviados de acordo com o row id
if( isset($_POST['enviar_dados']) ){

	// Pega os dados do post
	$idCurso = $_POST['idCurso'];
	$nomeCurso = $_POST['nomeCurso'];

	// Executa a query com post dados
	$query = "UPDATE Cursos set idCurso='$idCurso', nomeCurso='$nomeCurso' WHERE rowid=$id";
	
	// Executa a query
	// Se os dados foram inseridos com sucesso mostra a mensagem, senão, mostra a mensagem de erro
	// Here $db comes from "db_connect.php"
	if( $db->exec($query) ){
		$mensagem = "Dados atualizados com sucesso.";
	}else{
		$mensagem = "Desculpe, os dados não foram atualizados.";
	}
}

$id = $_GET['id']; // pega rowid da url
// Prepara a query para os dados da linha pelo rowid
$query = "SELECT rowid, * FROM Cursos WHERE rowid=$id";
$resultado = $db->query($query);
$dados = $resultado->fetchArray(); // set the row in $dados
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Curso</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">

		<!-- Mostra a mensagem aqui -->
		<div><?php echo $mensagem;?></div>

		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<form action="" method="post">
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<tr>
				<td>idCurso:</td>
				<td><input name="idCurso" type="text" value="<?php echo $dados['idCurso'];?>"></td>
			</tr>
			<tr>
				<td>nomeCurso:</td>
				<td><input name="nomeCurso" type="text" value="<?php echo $dados['idCurso'];?>"></td>
			</tr>
			<tr>
				<td><a href="list.php">Voltar</a></td>
				<td><input name="enviar_dados" type="submit" value="Atualizar Dados"></td>
			</tr>
			</form>
		</table>
	</div>
</body>
</html>
