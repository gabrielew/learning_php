<h1 style="text-align:center"> Bem-vindos a Dog Cursos</h1>

<form method = "post" action="login.php">
    <label> <strong>Usuário: </strong> </label>
    <input autofocus type="text" name="usuario" placeholder="Digite seu usuário" class="form-control">
    <p></p>
    <label> <strong> Senha: </strong> </label>
    <input type="password" name="senha" placeholder="Digite sua senha" class="form-control">
    <p></p>
    <input type="submit" value="Entrar" class="btn btn-success">
    <p></p>
</form>

<?php if(isset($_GET['erro'])){ ?>
    <div class="alert alert-danger" role="alert">
        failed.
    </div>
<?php    
}?>
