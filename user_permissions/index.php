<?php 
    session_start();
    require 'config.php';
    require 'classes/usuarios.class.php';
    require 'classes/documentos.class.php';

    if(!isset($_SESSION['logado'])) {
        header("Location: login.php");
        exit;
    }

    $usuarios = new Usuarios($pdo);
    $usuarios ->setUsuario($_SESSION['logado']);

    $documentos = new Documentos($pdo);
    $lista = $documentos->getDocumentos();
?>

<!-- Permissões: <?php print_r($usuarios->getPermissoes()); ?> -->

<h1> Sistema </h1>

<?php 
    if($usuarios->temPermissao('ADD')) { ?>
        <a href = ""> ADD DOCUMENTO </a> <p></p>
<?php } ?>

<?php 
    if($usuarios->temPermissao('SECRET')) { ?>
        <a href = "secret.php"> Secret Page </a> <p></p>
<?php } ?> 

<table border = "1" width = "100%">
    <tr>
        <th> Nome do arquivo </th>
        <th> Ações </th>
    </tr>
    <?php foreach ($lista as $item) { ?>
        <tr>
            <td> <?php echo utf8_encode($item['titulo']); ?> </td>
            <td>
                <?php 
                    if($usuarios->temPermissao('EDIT')) { ?>
                        <a href = ""> Editar </a>
                <?php } ?> 

                <?php 
                    if($usuarios->temPermissao('DEL')) { ?>
                        <a href = ""> Excluir </a>
                <?php } ?>
            </td>
        </tr>
    <?php } ?>
</table>