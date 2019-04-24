<a href ="?pagina=inserir_aluno">Adicionar Aluno</a>

<table style="border:1px solid #ccc; width: 100%">
    <tr>
        <th> Nome Aluno</th>
        <th> Data Nascimento</th>
    </tr>

<?php
    while($row = mysqli_fetch_array($consulta_alunos)){
        echo '<tr><td>'.$row['nome_aluno'].'</td>';
        echo '<td>'.$row['data_nascimento'].'</td></tr>';
    }
?>

</table>