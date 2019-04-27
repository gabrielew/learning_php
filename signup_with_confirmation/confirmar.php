<?php
	require 'config.php';
	$h = $_GET['h'];

	if(!empty($h)){
		$pdo->query("UPDATE usuarios SET state = '1' WHERE md5(id_usuario) = '$h'");

		echo '<h2> CADASTRO CONFIRMADO COM SUCESSO! </h2>';
	}
?>