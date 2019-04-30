<h1> Atualizar Curso: </h1>

<?php
    if(isset($_GET['editar']))
        while($row = mysqli_fetch_array($consulta_cursos)){
            if($row['id_curso'] == $_GET['editar']){
?>


<form method="post" action="processa_updateCurso.php">
    <br>
    <input type="hidden" name="id_curso" value="<?php echo $row['id_curso']; ?>">
    <label> <strong> Nome Curso: </strong> </label>
    <br>
    <input class="form-control" type="text" name="nome_curso" value="<?php echo $row['nome_curso']; ?>" autofocus>
    <p></p>
    <label> <strong> Carga Horária: </strong> </label>
    <br>
    <input class="form-control" type="text" name="carga_horaria" value="<?php echo $row['carga_horaria']; ?>">
    <p></p>
    <input class="btn btn-success" type="submit" value="Atualizar Curso">
    <p></p>
</form
<?php
        }
            }

?>