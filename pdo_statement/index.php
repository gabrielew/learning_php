<?php 
    require 'usuarios.php';
    $user = new Usuarios();
    $res = $user->select(1);
    //print_r($res);
    echo "<br><br>";
    $user->insert('leticia', 'Letícia Rosa', 'leticia@redeinova.com.br', '123');
    //print_r($user);
    $user->update("Leticia", "Leticia Rosa", "leticia@rede.com.br", "12345", 2);
    $user->delete(2);
?>