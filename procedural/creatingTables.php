<?php

    #mysqli - conexão:
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "aula_php";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);
    if($conexao)
        echo "Connect OK";
    else
        echo "Not Connect";

    /*
    #Creating table:
    $query = "CREATE TABLE CURSOS (
        id int not null auto_increment,
        nome_curso varchar(255) not null,
        carga_horaria int not null,
        primary key(id)
    )";

    $executar = mysqli_query($conexao, $query);

    $query = "CREATE TABLE ALUNOS(
        id_aluno int not null auto_increment,
        nome_aluno varchar(255) not null,
        data_nascimento date,
        primary key(id_aluno)
    )";

    $executar = mysqli_query($conexao, $query);

    $query = "CREATE TABLE ALUNOS_CURSOS(
        id_aluno_curso int not null auto_increment,
        id_aluno int not null,
        id_curso int not null,
        primary key(id_aluno_curso)
    )";

    $executar = mysqli_query($conexao, $query);

    $query = "INSERT INTO ALUNOS(nome_aluno, data_nascimento) 
    VALUES('Jose', '1990-04-23')";
    #$executar = mysqli_query($conexao, $query);
    $query = "INSERT INTO ALUNOS(nome_aluno, data_nascimento) 
    VALUES('Gabriel', '1996-04-12')";
    #$executar = mysqli_query($conexao, $query);

    $query = "INSERT INTO CURSOS(nome_curso, carga_horaria) 
    VALUES('PHP E PYTHON', 40)";
    #$executar = mysqli_query($conexao, $query);
    #if($executar)
    #   echo "<br>OK";
    #else
    #    echo "<br>Not";

    $query = "INSERT INTO CURSOS(nome_curso, carga_horaria) 
    VALUES('PHP E PYTHON', 40)";
    #$executar = mysqli_query($conexao, $query);
    
    $query = "INSERT INTO ALUNOS_CURSOS(id_aluno, id_curso)
    VALUES(2, 2)";
    #$executar = mysqli_query($conexao, $query);

    if(mysqli_query($conexao, "DELETE FROM ALUNOS WHERE ID_ALUNO = 1"))
        echo "<br>deletado";
    else
        echo "<br>del";
    
    if(mysqli_query($conexao, "UPDATE ALUNOS SET NOME_ALUNO = 'GABRIEL ALCANTARA' WHERE ID_ALUNO = 2"))
        echo "<br>UPDATE";
    else
        echo "<br>N_UPDATE";

    echo '<table border=1> 
            <tr>
                <th>id</th> 
                <th>Nome</th> 
                <th>Dt_Nasc</th>
            </tr>';
    $consulta = mysqli_query($conexao, "SELECT * FROM ALUNOS");
    while($row = mysqli_fetch_array($consulta)){
        echo '<tr><td>'.$row['id_aluno'].'</td>';
        echo '<td>'.$row['nome_aluno'].'</td>';
        echo '<td>'.$row['data_nascimento'].'</td></tr>';
    }

    echo '</table>';
    

    $consulta = mysqli_query($conexao, "SELECT ALUNOS.nome_aluno, 
    CURSOS.nome_curso FROM ALUNOS, CURSOS, ALUNOS_CURSOS WHERE
    ALUNOS_CURSOS.id_aluno = ALUNOS.id_aluno and ALUNOS_CURSOS.id_curso = CURSOS.id_curso");

    echo '<table border=1> 
    <tr>
        <th>Nome Aluno</th> 
        <th>Curso</th>
    </tr>';
    while($row = mysqli_fetch_array($consulta)){
        echo '<tr><td>'.$row['nome_aluno'].'</td>';
        echo '<td>'.$row['nome_curso'].'</td></tr>';
    }

    echo '</table>';*/

