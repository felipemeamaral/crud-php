<?php
$mensagem = ""; // Mensagem inicial

// Inclur conexao com db
include "db_connect.php";

// Atualizar a linha da tabela com os dados enviados de acordo com o row id
if( isset($_POST['enviar_dados']) ){

	// Pega os dados do post
	$idAluno = $_POST['id'];
	$ra = $_POST['ra'];
	$nome = $_POST['name'];
	$idCurso = $_POST['email'];

	// Executa a query com post dados
	$query = "UPDATE Alunos set idAluno='$idAluno', ra='$ra', nome='$nome', idCurso='$idCurso' WHERE rowid=$id";
	
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
$query = "SELECT rowid, * FROM alunos WHERE rowid=$id";
$resultado = $db->query($query);
$dados = $resultado->fetchArray(); // set the row in $dados
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Aluno</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">

		<!-- Mostra a mensagem aqui -->
		<div><?php echo $mensagem;?></div>

		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<form action="" method="post">
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<tr>
				<td>idALuno:</td>
				<td><input name="idAluno" type="text" value="<?php echo $dados['idAluno'];?>"></td>
			</tr>
			<tr>
				<td>RA:</td>
				<td><input name="RA" type="text" value="<?php echo $dados['ra'];?>"></td>
			</tr>
			<tr>
				<td>Nome:</td>
				<td><input name="nome" type="text" value="<?php echo $dados['nome'];?>"></td>
			</tr>
			<tr>
				<td>idCurso:</td>
				<td><input name="idCurso" type="text" value="<?php echo $dados['idCurso'];?>"></td>
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
