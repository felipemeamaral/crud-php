<?php
// Incluir banco
include "db_connect.php";

	$mensagem = "";
	if( isset($_POST['submit_data']) ){
	    // Includs database connection
	    include "db_connect.php";
	 
	    // Gets the data from post
	    $idAluno = $_POST['idAluno'];
	    $ra = $_POST['ra'];
	    $nome = $_POST['nome'];
	    $idCurso = $_POST['idCurso'];
	 
	    // Chama a query com um post
	    $query = "INSERT INTO Alunos (idAluno, ra, nome, idCurso) VALUES ('$idAluno', '$ra', '$nome', '$idCurso')";
	     
	    // Executa a query
	    // Mostra mensagem de sucesso ou ero ao inserir os dados
	    if( $db->exec($query) ){
	        $mensagem = "Dados inseridos com sucesso.";
	    }else{
	        $mensagem = "Desculpe, os dados nao foram inseridos com sucesso.";
	    }
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Inserir Aluno</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">

		<!-- Mostra a mensagem aqui -->
		<div><?php echo $mensagem;?></div>

		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<form action="insert.php" method="post">
      <tr>
				<td>idAluno:</td>
				<td><input name="idAluno" type="text"></td>
			</tr>
			<tr>
				<td>RA:</td>
				<td><input name="ra" type="text"></td>
			</tr>
			<tr>
				<td>Nome:</td>
				<td><input name="nome" type="text"></td>
			</tr>
			<tr>
				<td>idCurso:</td>
				<td><input name="idCurso" type="text"></td>
			</tr>
			<tr>
				<td><a href="list.php">Voltar</a></td>
				<td><input name="enviar_dados" type="submit" value="Inserir Dados"></td>
			</tr>
			</form>
		</table>
	</div>
</body>
</html>
