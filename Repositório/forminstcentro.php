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
//recebe os campos inseridos
//if(isset(($_POST['inst_nome']) && ($_POST['inst_telefone']) && ($_POST['inst_email']) && ($_POST['inst_endereco'])){
		$dado = $_POST['inst_dado'];
		$campo = $_POST['inst_campo'];

		$id = $_SESSION["id"];
		$_serieSESSION = serialize($_SESSION);
		var_dump($_SESSION);

//			$_SESSION["inst"] = $inst['nome'];
		//$sql = mysql_query("UPDATE instituicoes SET textodesc = '$dado' WHERE idinst = '$id';");
	

//	$_serieSESSION = serialize($_SESSION);
//	var_dump($_SESSION);
		switch ($campo) {
			case 'Sobre':
				$sql = mysql_query("UPDATE instituicoes SET textodesc = '$dado' WHERE idinst = '$id';");
	
				break;
			
			case 'Voluntários':
				$sql = mysql_query("UPDATE instituicoes SET textovol = '$dado' WHERE idinst = '$id';");
	
				break;
		}


	echo "<script type='text/javascript'>setTimeout(window.location='instalt.php', 3000)</script>";	



//saporra ta salvando sempre o passado

	?>



	
</body>
</html>

