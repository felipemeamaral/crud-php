<?php
	// Banco
	$db_name = "banco.db";

	// Conexao banco
	$db = new SQLite3($db_name);
	
  // Criar tabela alunos e curso caso não exista

$query = "CREATE TABLE IF NOT EXISTS Alunos (idAluno int, ra int, nome STRING, idCurso int)";

$query2 = "CREATE TABLE IF NOT EXISTS Curso (idCurso int, nomeCurso STRING)";

$db->exec($query);
$db->exec($query2);