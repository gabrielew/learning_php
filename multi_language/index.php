<?php

    session_start();

    if(!empty($_GET['lang'])) {
        $_SESSION['lang'] = $_GET['lang'];
    }
    require 'config.php';
    require 'language.class.php';
    $lang = new Language();
?>
    <a href = "index.php?lang=en-us">English</a>
    <a href = "index.php?lang=pt-br">Português</a>
    <a href = "index.php?lang=es">Español</a>
    <hr/>     
    Linguagem Definida: <?php echo $lang->getLanguage(); ?>
    <hr/>

    <button> <?php $lang->get('BUY'); ?> </button>
    <button> <?php $lang->get('LOGOUT'); ?> </button>
    <hr/>
    <!-- Categoria: <?php $lang->get('CATEGORIA-PHOTO'); ?> -->

    <?php 
    $sql = "SELECT id, (SELECT valor FROM language WHERE language.lang = :lang and language.nome = categories.lang_item) as nome FROM categories"; 
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":lang", $lang->getLanguage());
    $sql->execute();

    if($sql->rowCount() > 0){
        foreach ($sql->fetchAll() as $categories) {
            echo $categories['nome'].'<br/>';
        }
    }
    ?>