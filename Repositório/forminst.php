<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ubuntusocial";
// Create connection
$conn = mysql_connect($servername, $username, "", $dbname) or die (mysql_error());
define('CHARSET', 'UTF-8');

	//garante o utf8
   mysql_query("SET character_set_results=utf8",$conn);
   mb_language('uni'); 
   mb_internal_encoding('UTF-8');
   mysql_query("set names 'utf8'",$conn);
   //fim 


$select = mysql_select_db('ubuntusocial') or die (mysql_error());
		session_start();

/*$nome = $_POST['nome'];
		$telefone = $_POST['insttelefone'];
		$email = $_POST['instemail'];
		$endereco = $_POST['endereco'];*/

//recebe os campos inseridos
//if(isset(($_POST['inst_nome']) && ($_POST['inst_telefone']) && ($_POST['inst_email']) && ($_POST['inst_endereco'])){
		$nome = $_POST['inst_nome'];
		$telefone = $_POST['inst_telefone'];
		$email = $_POST['inst_email'];
		$endereco = $_POST['inst_endereco'];
		$atuacao = $_POST['inst_atuacao'];
		$impactados = $_POST['inst_impactados'];

		$id = $_SESSION["id"];
		$_serieSESSION = serialize($_SESSION);
		var_dump($_SESSION);

//			$_SESSION["inst"] = $inst['nome'];

//	$_serieSESSION = serialize($_SESSION);
//	var_dump($_SESSION);

	$sql = mysql_query("UPDATE instituicoes SET nome = '$nome', telefone = '$telefone', email = '$email', endereco = '$endereco', impactados = '$impactados', atuacao = '$atuacao' WHERE idinst = '$id';");
	
	echo "<script type='text/javascript'>setTimeout(window.location='instalt.php', 1000)</script>";	



//saporra ta salvando sempre o passado

	?>
</body>
</html>






	
