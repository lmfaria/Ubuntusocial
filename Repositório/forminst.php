<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ubuntusocial";
// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname) or die (mysql_error());;
define('CHARSET', 'UTF-8');
$select = mysql_select_db('ubuntusocial') or die (mysql_error());
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastrando</title>
</head>
<body>




	<?php
//recebe os campos inseridos
	$nome = $_POST['nomeinst'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$usu = $_POST['usu'];
	$pass = $_POST['pass'];
	$confirmpass = $_POST['confirmpass'];



	$sql = mysql_query("INSERT INTO cadastro(nomedainstituicao, telefone, email, usu, pass) VALUES('$nome', '$telefone', '$email', '$usu', '$pass')");
	echo "<center><h1>Cadastrado com sucesso<h1>";


	?>





	
</body>
</html>
