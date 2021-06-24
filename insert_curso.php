<?php
	$mensagem = "";
	if( isset($_POST['enviar_dados']) ){
	    // Includs database connection
	    include "db_connect.php";
	 
	    // Gets the data from post
	    $idCurso = $_POST['idCurso'];
	    $nomeCurso = $_POST['nomeCurso'];
	 
	    // Chama a query com um post
	    $query = "INSERT INTO Curso (idCurso, nomeCurso) VALUES ('$idCurso', '$nomeCurso')";
	     
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
	<title>Inserir Curso</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">

		<!-- Mostra a mensagem aqui -->
		<div><?php echo $mensagem;?></div>

		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<form action="insert.php" method="post">
			<tr>
				<td>idCurso:</td>
				<td><input name="idCurso" type="text"></td>
			</tr>
			<tr>
				<td>NomeCurso:</td>
				<td><input name="nomeCurso" type="text"></td>
			</tr>
				<td><a href="list.php">Ver Dados</a></td>
				<td><input name="enviar_dados" type="submit" value="Inserir Dados"></td>
			</tr>
			</form>
		</table>
	</div>
</body>
</html>
