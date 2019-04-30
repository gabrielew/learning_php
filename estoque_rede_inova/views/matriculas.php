<a class ="btn btn-success" href="?pagina=inserir_matricula"> Adicionar Matrícula</a>
<p></p>
<table class ="table table-hover table-striped" id="matriculas">
    <thead>
        <tr>
            <th> Aluno </th>
            <th> Curso </th>
            <th> Deletar </th>
        </tr>
    </thead>

    <tbody>
        <?php
            while($row = mysqli_fetch_array($consulta_matriculas)){
                echo '<tr><td>'.$row['nome_aluno'].'</td>';
                echo '<td>'.$row['nome_curso'].'</td>';

        ?>
                <td>
                    <a href="deleta_matricula.php?id_aluno_curso=<?php echo $row['id_aluno_curso'];?>">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>

        <?php
            }
        ?>
    </tbody>
</table>