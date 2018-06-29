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
//confere se o usuário já existe e outras condições
	$sql = ("SELECT usu FROM cadastro WHERE usu = '$usu'");
	$ususelect = mysql_query($sql);
	$array = mysql_fetch_array($ususelect);
	$logarray = $array['usu'];
	if($nome == "" || $nome == null)
	{
		echo"<script language='javascript' type='text/javascript'>alert('O campo nome da instituição deve ser preenchido');window.location.href='index.php';</script>";
	}
	if($telefone == "" || $telefone == null)
	{
		echo"<script language='javascript' type='text/javascript'>alert('O campo telefone deve ser preenchido');window.location.href='index.php';</script>";
	}
	if($email == "" || $email == null)
	{
		echo"<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido');window.location.href='index.php';</script>";
	}
	if($usu == "" || $usu == null)
	{
		echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='index.php';</script>";
	}
	else
	{
		if($logarray == $usu)
		{
		echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
		die();
		}
	}
	if($pass == "" || $pass == null)
	{
		echo"<script language='javascript' type='text/javascript'>alert('O campo senha deve ser preenchido');window.location.href='index.php';</script>";
	}
	if($confirmpass == "" || $confirmpass == null)
	{
		echo"<script language='javascript' type='text/javascript'>alert('O campo de confirmação de senha deve ser preenchido');window.location.href='index.php';</script>";
	}
	if($confirmpass != $pass)
	{
		echo"<script language='javascript' type='text/javascript'>alert('A confirmação de senha não confere');window.location.href='index.php';</script>";
	}
	$sql = mysql_query("INSERT INTO cadastro(nomedainstituicao, telefone, email, usu, pass) VALUES('$nome', '$telefone', '$email', '$usu', '$pass')");
	echo "<center><h1>Cadastrado com sucesso<h1>";
    echo "<script type='text/javascript'> setTimeout(window.location='index.php', 3000);</script>";
	?>





	
</body>
</html>