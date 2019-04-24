<h1> Atualizar aluno: </h1>

<?php
    if(isset($_GET['editar']))
        while($row = mysqli_fetch_array($consulta_alunos)){
            if($row['id_aluno'] == $_GET['editar']){
?>


<form method="post" action="processa_updateAluno.php">
    <br>
    <input type="hidden" name="id_aluno" value="<?php echo $row['id_aluno']; ?>">
    <label> <strong> Nome Aluno: </strong> </label>
    <br>
    <input class="form-control" type="text" name="nome_aluno" value="<?php echo $row['nome_aluno']; ?>" autofocus>
    <p></p>
    <label> <strong> Data Nascimento: </strong> </label>
    <br>
    <input class="form-control" type="text" name="data_nascimento" value="<?php echo $row['data_nascimento']; ?>">
    <p></p>
    <input class="btn btn-success" type="submit" value="Atualizar Cadastro">
    <p></p>
</form
<?php
        }
            }

?>