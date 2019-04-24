<a href="?pagina=inserir_matricula"> Adicionar nova matrícula</a>

<table style="border:1px solid #ccc; width: 100%">
    <tr>
        <th> Nome Curso</th>
        <th> Carga Horária</th>
    </tr>

<?php
    while($row = mysqli_fetch_array($consulta_matriculas)){
        echo '<tr><td>'.$row['nome_aluno'].'</td>';
        echo '<td>'.$row['nome_curso'].'</td></tr>';
    }
?>

</table>