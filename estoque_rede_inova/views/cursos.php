<a class ="btn btn-success" href ="?pagina=inserir_curso">Adicionar Curso</a>
<p></p>
    <table class ="table table-hover table-striped" id="cursos">
        <thead>
            <tr>
                <th> Curso </th>
                <th> Carga Horária </th>
                <th> Editar </th>
                <th> Deletar </th>
            </tr>
        </thead>

        <tbody>
            <?php
                while($row = mysqli_fetch_array($consulta_cursos)){
                    echo '<tr><td>'.$row['nome_curso'].'</td>';
                    echo '<td>'.$row['carga_horaria'].'</td>';
            ?> 
                    <td>
                        <a  href="?pagina=update_curso&editar=<?php echo $row['id_curso'];?>">
                            <i class="fas fa-user-edit"></i>
                        </a>
                    </td>
                    <td>
                        <a href="deleta_curso.php?id_curso=<?php echo $row['id_curso'];?>">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>