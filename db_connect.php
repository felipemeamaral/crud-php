<?php
	// Banco
	$db_name = "banco.db";

	// Conexao banco
	$db = new SQLite3($db_name);
	
  // Criar tabela alunos e curso caso não exista

$query = "CREATE TABLE IF NOT EXISTS Alunos (idAluno int NOT NULL, ra NUMBER NOT NULL, nome STRING NOT NULL, idCurso NUMBER)";

$query2 = "CREATE TABLE IF NOT EXISTS Curso (idCurso int NOT NULL, nomeCurso STRING NOT NULL)";

$db->exec($query);
$db->exec($query2);