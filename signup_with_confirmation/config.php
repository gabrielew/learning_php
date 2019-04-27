<?php

	try{
		$dsn = "mysql:dbname=blog;host=localhost";
		$dbuser = "root";
		$dbpass = "";
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	}catch(PDOException $ex){
		die($ex->getMessage());
	}

?>