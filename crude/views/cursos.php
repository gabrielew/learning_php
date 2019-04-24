<a href ="?pagina=inserir_curso">Adicionar curso</a>

<table style="border:1px solid #ccc; width: 100%">
    <tr>
        <th> Nome Curso</th>
        <th> Carga Horária</th>
    </tr>

<?php
    while($row = mysqli_fetch_array($consulta_cursos)){
        echo '<tr><td>'.$row['nome_curso'].'</td>';
        echo '<td>'.$row['carga_horaria'].'</td></tr>';
    }
?>

</table>