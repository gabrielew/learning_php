<h1> Adicionar nova matrícula</h1>


<form method="post" action="processa_matricula.php">
    <br><br>
    <p> Selecione o aluno </p>  
    <select name="escolha_aluno">
        <br><br>
        <option> Selecione um aluno </option>
        <?php
            while($row = mysqli_fetch_array($consulta_alunos)){
                echo '<option value="'.$row['id_aluno'].'">'
                .$row['nome_aluno'].'</option>';
                echo '<td>'.$row['carga_horaria'].'</td></tr>';
            }
        ?>    
    </select>
    <br><br>
    <p> Selecione o curso </p>
    <select name="escolha_curso">
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

    <input type="submit" value="Matricular">
</form>