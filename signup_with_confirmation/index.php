<?php

	if(isset($_POST['usuario']) && (!empty($_POST(['usuario'])))) {
		$usuario = addslashes($_POST['usuario']);
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = md5($_POST['senha']);

		require 'config.php';

		$pdo->query("INSERT INTO usuarios SET usuario = ?, nome = ?, email = ?, senha = ?");
		$id_usuario = $pdo->lastInsertId();
		$md5 = md5($id_usuario);

		$link = 'http://www.b7web.com.br/cadastroconfirma/confirmar.php?h='.$md5;

		$assunto = "Confirmar cadastro";
		$msg = "Cliente no link abaixo para confirmar seu cadastro:\n\n".$link;

		$headers = "From: suporte@b7.web.com.br"."\r\n"."X-Mailer: PHP/".phpversion();

		mail($email, $assunto, $msg, $headers);	

		echo "<h2> OK! Confirme seu cadastro agora !</h2>";
		exit;
	}

?>

<form method="POST"> 
	Usuário:<br/>
	<input autofocus type="text" name="usuario" /> <br/><br/>
	Nome:<br/>
	<input type="text" name="nome" /> <br/><br/>
	E-mail:<br/>
	<input type="text" name="email" /> <br/><br/>
	Senha:<br/>
	<input type="text" name="senha" /> <br/><br/>
	<input type="submit" value="CADASTRAR" />

</form>