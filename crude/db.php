<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "aula_db";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "Select * from cursos";
$consulta_cursos = mysqli_query($conexao, $query);


$query = "Select * from alunos";
$consulta_alunos = mysqli_query($conexao, $query);


$query = "SELECT alunos.nome_aluno, cursos.nome_curso
    FROM alunos, cursos, alunos_cursos WHERE
    alunos_cursos.id_aluno = alunos.id_aluno
    and alunos_cursos.id_curso = cursos.id_curso";

$consulta_matriculas = mysqli_query($conexao, $query);