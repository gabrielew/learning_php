<a class ="btn btn-success" href ="?pagina=inserir_aluno">Adicionar Aluno</a>
<p></p>
<table class ="table table-hover table-striped"  id="alunos">
    <thead>
        <tr>
            <th> Aluno </th>
            <th> Data Nascimento </th>
            <th> Editar </th>
            <th> Deletar </th>
        </tr>
    </thead>

    <tbody>
        <?php
            while($row = mysqli_fetch_array($consulta_alunos)){
                echo '<tr><td>'.$row['nome_aluno'].'</td>';
                echo '<td>'.$row['data_nascimento'].'</td>';
        ?> 
                <td>
                        <a href="?pagina=update_aluno&editar=<?php echo $row['id_aluno'];?>">
                            <i class="fas fa-user-edit"></i>
                        </a>
                </td>
                <td>
                    <a href="deleta_aluno.php?id_aluno=<?php echo $row['id_aluno'];?>">
                        <i class="fas fa-user-times"></i>
                    </a>
                </td>
            </tr>
        <?php
            }
        ?>
    </tbody>
</table>