<?php

// Inclui conexão ao banco
include "db_connect.php";

// faz a query com o rowid
$query = "SELECT rowid, * FROM Alunos";

// Roda a a query e salva o resultado para $resultado
$resultado = $db->query($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Listar Alunos</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">
		<a href="insert.php">Adicionar Aluno</a>
		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<tr>
				<td>idAluno</td>
				<td>RA</td>
				<td>Nome</td>
				<td>idCurso</td>
				<td>Ação</td>
			</tr>
			<?php while($row = $resultado->fetchArray()) {?>
			<tr>
				<td><?php echo $row['idAluno'];?></td>
				<td><?php echo $row['ra'];?></td>
				<td><?php echo $row['nome'];?></td>
				<td><?php echo $row['idCurso'];?></td>
				<td>
					<a href="update.php?id=<?php echo $row['rowid'];?>">Editar</a> | 
					<a href="delete.php?id=<?php echo $row['rowid'];?>"  confirm('Tem certeza?');">Deletar</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>

  <div style="width: 500px; margin: 20px auto;">
		<a href="insert.php">Adicionar Curso</a>
		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<tr>
				<td>idCurso</td>
				<td>nomeCurso</td>
				<td>Ação</td>
			</tr>
			<?php while($row = $resultado->fetchArray()) {?>
			<tr>
				<td><?php echo $row['idCurso'];?></td>
				<td><?php echo $row['nomeCurso'];?></td>
				<td>
					<a href="update_curso.php?id=<?php echo $row['rowid'];?>">Editar</a> | 
					<a href="delete_curso.php?id=<?php echo $row['rowid'];?>"  confirm('Tem certeza?');">Deletar</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>
