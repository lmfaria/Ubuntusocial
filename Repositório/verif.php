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
<html>
<head>
	<title></title>
<script type="text/javascript">
	function loginsuccessfully()
	{
		setTimeout("window.location='instalt.php'", 1000);
	}
	function loginfailed()
	{
		setTimeout("window.location='index.php'", 3000);
	}	
</script>
</head>
<body>

<?php
//recebe os campos inseridos
$login = $_POST['login'];
$senha = $_POST['senha'];
//confere se não estão vazios
if($login == "" || $login == null)
	{
		echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='index.php';</script>";
	}
if($senha == "" || $senha == null)
	{
		echo"<script language='javascript' type='text/javascript'>alert('O campo senha deve ser preenchido');window.location.href='index.php';</script>";
	}
//confere se há usuário e senha cadastrados no banco de dados 
$sql = mysql_query("SELECT * FROM cadastro WHERE usu = '$login' and pass = '$senha'") or die (mysql_error());
$row = mysql_num_rows($sql);
if( $row > 0 )
{
	//cria sessão para as variaveis login, senha e inst(deverá ser mudado com urgência de acordo com o novo padrão do banco de dados)
	session_start();
	$_SESSION["login"] = $login;
	$_SESSION["senha"] = $senha;
	$sql2 = mysql_query("SELECT nomedainstituicao FROM cadastro WHERE usu = '$login' and pass = '$senha'");
	$inst = mysql_fetch_array($sql2);
	$_SESSION["inst"] = $inst['nomedainstituicao'];
	//echo "Você foi autenticado com sucesso, aguarde um instante";
	echo "<script>loginsuccessfully()</script>";
	$_serieSESSION = serialize($_SESSION);

    
}
else
{
    echo "Nome de usuário ou senha inválidos, aguarde um instante e tente novamente";
    echo "<script>loginfailed()</script>";
}

 
?>

</body>
</html>