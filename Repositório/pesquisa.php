<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubuntu Social</title>
	<script type="text/javascript" src="scriptUs.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
<!-- Nav bar karalhuda -->

	<nav class="navbar navbar-default navbar-fixed-top ">
		<div class="container">
			<div class="navbar-header" ">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="#home" style="padding-top: 0px;"><img src="fotos/logo.png" style="width: 100%; margin-right: -410px;"  ></a>
				<!--fazer o search ser responsivo-->
			</div>
					<!--<div class="form-group">
						<input type="text" class="form-control" placeholder="Search" size="80%" >
					<button type="submit" class="btn btn-default">Pesquisar</button>
					
				</div>-->
<!-- Nova bara de pesquisa -->
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">											
					<li><form class="navbar-form navbar-header navbar-right " action="pesquisa.php" method="get">
							<div class="input-group" style="margin-left: 15px; margin-right: 15px;">
								<input type="search" name="pesquisa" class="form-control" size="45%" placeholder="Procurando a instituição ideal para doar ?" required>
									<div class="input-group-btn">
										<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> Pesquisar</button>
										<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><i class="glyphicon glyphicon-cog"></i> <span class="caret"></span></button>
										<!--<form action="pesquisa.php" method="post">-->
											<ul class="dropdown-menu dropdown-menu-right">
												<div class="radio" style="padding-left: 10px; padding-right: 10px">
													<li><label><input type="radio" name="filtro" value="Tudo" checked="checked">Tudo</label>
													<li><label><input type="radio" name="filtro" value="nome">Nome</label>
													<li><label><input type="radio" name="filtro" value="endereco">Local</label>
													<li><label><input type="radio" name="filtro" value="doacoes">Tipo de doação</label>
													<li><label><input type="radio" name="filtro" value="segmento">Segmento</label>
												</div>
											</ul>  
									</div>
							</div>
					</li></form>
<!-- fim da barra de pesquisa-->				
			<li><a href="#home">Ínicio</a></li>
			<li><a href="#portfolio">Projetos</a></li>
			<li><a href="#pricing">Quem Somos</a></li>
<!-- amiguinhos que aparecem e desaparecem quando há instiuição logada ou não -->
			<li id="menuinstalt" style="display:none;"><a href="instalt.php">Perfil</a></li>
			<li id="menulogout" style="display:none;"><a href="logout.php">Sair</a></li>
<!-- id para menulogin e menucadastro ps:sem eles vai dar merda -->
						<!--Código para a parte de login -->
			<li id="menulogin" class="dropdown">
				<a  class="dropdown-toggle" data-toggle="dropdown" href="#">Login<span class="caret"></span></a>
					<ul class="dropdown-menu" style="width: 300px">
						<!--Div do formulário -->
							<div class='login' style="max-width: 100%; padding: 5%">
								<fieldset>
										<!--Formulario com metodo post e a pagina para redirecionar -->
										<form method="post" action="verif.php" id="formlogin" name="formlogin" onsubmit="return validaForm()">
											<li>
												Usuário
											</li>
											<li>
												<!--Inputs -->
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
													<input id="usuario" type="text" class="form-control" name="login" placeholder="Usuário" style="width:100%">
												</div>
											</li>
											<li>
												Senha
											</li>
											<li>
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
													<input id="senha" type="password" class="form-control" name="senha" placeholder="Password" style="width:100%">
												</div>
												<br>
												<!--Alerta de erro -->
												<div id="erro" class="alert alert-danger" role="alert"></div>
											</li>										
											<li>
												<!--botão que limpa os inputs. Não usei função, ele limpa por html5 não sei se funciona no resto -->
												<input class="btn btn-danger" name='botao' value='Limpar' >
												<!--Botao que chama a função de validação -->
												<div><input class="btn btn-primary" type='submit' name='botao' value='Logar'></div>
											</li>
										</form>										
									</fieldset>
							</div>
					</ul>
			</li>
			<li id="menucadastro" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastro<span class="caret"></span></a>
					<ul id="cad" class="dropdown-menu" style="width: 400px">
						<!--Div do formulário -->
						<div class='login' style="max-width: 100%; padding: 5%">
							<fieldset>	
								<!--Formulario com metodo post e a pagina para redirecionar -->
								<form method="post" action="cadastrando.php" id="formcad" name="formcad" onsubmit="return validaFormCad()"">
								<h4>Preencha todos os Campos</h4>
								<!--Inputs -->
									<li>
										Nome da Instituição
									</li>
									<li>													
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-home" style=""></i></span>
											<input id="nomeinst" type="text" class="form-control" name="nomeinst" placeholder="Nome da Instituição" style="width:100%">
										</div>
									</li>
									<li>
										Telefone
									</li>
									<li>													
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt" style=""></i></span>
											<input id="telefone" type="text" class="form-control" name="telefone" placeholder="(xx) xxxx - xxxx" style="width:100%">
										</div>
									</li>
									<li>
										E-mail
									</li>
									<li>													
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-envelope" style=""></i></span>
											<input id="email" type="text" class="form-control" name="email" placeholder="email@servidor.com" style="width:100%">
										</div>
									</li>
									<li>
										Usuário
									</li>
									<li>													
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user" style=""></i></span>
											<input id="usu" type="text" class="form-control" name="usu" placeholder="Usuário" style="width:100%">
										</div>
									</li>													
									<li>
										Senha
									</li>
									<li>													
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock" style=""></i></span>
											<input id="pass" type="text" class="form-control" name="pass" placeholder="Senha" style="width:100%">
										</div>
									</li>	
									<li>
										Confirme a senha
									</li>
									<li>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock" style=""></i></span>
											<input id="confirmpass" type="text" class="form-control" name="confirmpass" placeholder="Confirme a senha" style="width:100%">
										</div>
										<br>
										<!--Alerta de erro -->
										<div id="erro1" class="alert alert-danger" role="alert"></div>
									</li>																
									<li>
										<!--Botao que chama a função de validação -->
										<div>
											<input class="btn btn-danger" type='reset' name='botao' value='Limpar'>
											<input class="btn btn-primary" type='submit' name='botao' value='Cadastrar' >
										</div>
									</li>
								</form>
							</fieldset>
						</div>
					</ul>
				</li>
				</ul>
			</div>
		</div>
	</nav>

<!-- Fim da  Nav bar karalhuda -->
		<div class="container-fluid" style="margin-top: 50px">

			<div class="row ">
				<div class="col-sm-4" name= "nome"></div>
				<div class="col-sm-4"  name= "nome"></div>
				<div class="col-sm-4"  name= "nome"></div>
			</div>
			<div class="row " >
				<div class="col-sm-4" name= "nome"></div>
				<div class="col-sm-4"  name= "nome"></div>
				<div class="col-sm-4"  name= "nome"></div>
			</div> 

			<?php
			//inicia sessão
			if (!isset($_SESSION)) session_start();
			// Verifica se não há a variável da sessão que identifica o usuário
			if (isset($_SESSION["inst"])) 
			{
			//esconde login e cadastro e exibe logout
			echo "<script>logon()</script>";
			}
			//se não há ninguém logado, destroi a sessao
			if (!isset($_SESSION["inst"])) 
			{
      		//destroi sessão por segurança
			session_destroy();
			}   			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ubuntusocial";
			//$servername = "127.0.0.1";
			//$username = "root";
			//$password = "";
			//$dbname = "ubuntusocial";
// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$nome = $_GET['pesquisa'];
			$filtro = $_GET['filtro'];
			if ($filtro == "tudo"){
			$sql = "SELECT nome,textodesc,fotos FROM instituicoes WHERE nome LIKE '%$nome%' OR textodesc LIKE '%$nome%' OR textovol LIKE '%$nome%' OR endereco LIKE '%$nome%' OR segmento LIKE '%$nome%' OR info LIKE '%$nome%';";
			}
			else{
				$sql = "SELECT nome,textodesc,fotos FROM instituicoes WHERE $filtro LIKE '%$nome%';";
			}
			$result =mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				$i = 0;
    // output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					$foto = '"'.utf8_encode ($row["fotos"]).'"';
					$l= '"';
					$anome = '"'.utf8_encode ($row["nome"]).'"';
					$textodesc = '"'.utf8_encode ($row["textodesc"]).'"'; 
					$complemento = "'<a href=".$l."inst.php?inst=".utf8_encode ($row["nome"])."".$l."><div class=".$l."thumbnail".$l." style=".$l."width:100%; overflow: hidden; text-overflow: ellipsis;".$l." ><img src=".$foto." alt=".$anome."  style=".$l."max-height:240px;".$l."><p><strong>".$anome."</strong></p><div class=".$l."thumbnail".$l." style=".$l." max-height:80px; overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical; border: 0px;".$l."><p  style=".$l." margin: 0 15px; ".$l." > ".$textodesc."</p></div></div></a> ' ";
					echo"<script type='text/javascript'>	document.getElementsByName('nome')[".$i."].innerHTML = ".$complemento." ; 
					</script>";
					$i++;
					
				}
			} else {
				echo "No results";
				
				
			}
			mysqli_close($conn);
			?>

			


		</body>
		</html>