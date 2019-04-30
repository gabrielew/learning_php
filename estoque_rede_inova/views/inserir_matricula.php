<h1> Adicionar nova matrícula</h1>


<form method="post" action="processa_matricula.php">
    <p></p>
    <p> <strong> Selecione o aluno </strong> </p>  
    <select class="form-control" name="escolha_aluno" autofocus>
        <p></p>
        <option> Selecione um aluno </option>
        <?php
            while($row = mysqli_fetch_array($consulta_alunos)){
                echo '<option value="'.$row['id_aluno'].'">'
                .$row['nome_aluno'].'</option>';
                echo '<td>'.$row['carga_horaria'].'</td></tr>';
            }
        ?>    
    </select>
    <p></p>
    <p> <strong> Selecione o curso </strong> </p>
    <select class="form-control" name="escolha_curso">
        <br><br>
        <option> Selecione um curso </option>    
        <?php
            while($row = mysqli_fetch_array($consulta_cursos)){
                echo '<option value="'.$row['id_curso'].'">'
                .$row['nome_curso'].'</option>';
            }
        ?>
    </select>
    <br><br>

    <input class="btn btn-success" type="submit" value="Matricular Aluno">
</form>