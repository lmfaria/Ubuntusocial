<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubuntu Social</title>
	<script type="text/javascript" src="scriptUS.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="styleUs.css">


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


		<div class="container-fluid">
			
			<div class="row content"  style="margin-top:50px">
				<div class="project_cover hidden-xs hidden-sm" style="background-image: url(fotos/ff2c4539-1d10-42fa-ac2a-2f8fd9e635de.jpg);">
					<!--<img src="fotos/apaees.jpg" alt="apae de vila velha
					" class="box" style="margin-left: 30px; max-height:240px;" id="fotos">-->
					<!--trocar qnd for passar para php-->
					<span id="fotos"></span>
				</div>


				<div class="col-sm-3" style="padding: 10px 0px; " >
					
					<div class="panel panel-default text-center" style="margin-right: 0px;
    margin-left: 0px;">
						<div class="panel-heading" >
							<h1 id="nome">Apae de vila velha</h1>
						</div>
						<div class="panel-body">
							<p id="quem"><strong>Área de atuação: </strong>Auxílio a pessoas com definciência intelectual </p>
							<p id="Num"><strong>Número de impactados: </strong> Não fornecido </p>
							<p id="endereco"><strong>Endereço: </strong> rua cabo aylson simoes 185 centro 29100320</p>
							<p id="insttelefone"><strong>Contato: </strong>32992628
							<p id="instemail"><strong>Email: </strong>ubuntu.vv@gmail.com
							</p>
       <!-- <div class="panel-footer">
          <h3>$19</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
      </div>-->
  </div>
</div> 
						<!-- 
						<h4 id="nome">Apae de vila velha</h4>
						<ul class="nav nav-pills nav-stacked">
							<li class="active"><a href="#quem">Quem Somos</a></li>
							<li><a href="#doa">Doações</a></li>
							<li><a href="#voluntario">Seja um Voluntário</a></li>
							<li><a href="#mais">Conheça Mais</a></li>
						</ul><br>-->


					</div>

					<div class="col-sm-9" style="padding-right: 0px" >
						<!-- Teste-->
						<div class="topnav row" style="margin: 0px">

							<a class="active col-sm-4" name="oi" onclick="menu('h.sobre', 'oi')" href="#home" id="h.sobre">Sobre</a>
							<a class=" col-sm-4" href="#news" name="oi" onclick="menu('h.doa', 'oi')" id = "h.doa">Doações</a>
							<a class=" col-sm-4" href="#volunt" name="oi" onclick="menu('h.voluntarios', 'oi')" id = "h.voluntarios" >Voluntários</a> 
						<!--	<a class=" col-sm-3" href="#contact" name="oi" onclick="menu('h.contatos', 'oi')" id = "h.contatos" >Comentários</a> -->
						</div>
						<!--<h1 style="text-align: center; " id="nome1"> Apae de vila velha </h1>-->
						<div id = "conteudo" class="containerm">
							<div class="row" style="margin-top: 0px"><big><b>Quem Somos ? </b></big></div>
							<div class="jumbotrom"> 
								<p><big id="quemss"> 	Comunidade que se une para prevenir e tratar a deficiência e promover o bem estar e desenvolvimento da pessoa com deficiência.</big></p></div>
								<!--<div class="row" id="doa"><big><b>Doações</b></big></div>
								<div class="row" id="doa"><big style="text-align: center;"><b>Gostaria de ajudar ?</b></big></div>

								<div class="jumbotrom"> 
									<p><big> 	
										<span class="glyphicons glyphicons-dining-set"></span>Alimento<br>

										<span class="glyphicons glyphicons-t-shirt"></span>Roupa<br>

										<span class="glyphicons glyphicons-education"></span>Materias Didáticos
										<br>

										<span class="glyphicons glyphicons-soccer-ball"></span>Brinquedos<br>

										<span class="glyphicons glyphicons-usd"></span>Dinheiro<br>

										<span class="glyphicons glyphicons-cleaning"></span>Materiais de Limpeza <br>
<!-
<span class="glyphicons glyphicons-dining-set"></span>n>Alimento

<span class="glyphicons glyphicons-t-shirt"></span>n>Roupa

<span class="glyphicons glyphicons-shoes"></span>n>Sapatos

<span class="glyphicons glyphicons-education"></span>n>Materias Didáticos

<span class="glyphicons glyphicons-soccer-ball"></span>n>Brinquedos

<span class="glyphicons glyphicons-book-open"></span>n>Livros

ass="glyphicons glyphicons-lab-alt"></span>n> Remédios

<span class="glyphicons glyphicons-usd"></span>n>Dinheiro

<span class="glyphicons glyphicons-cleaning"></span>n>Materiais de Limpeza

<span class="glyphicons glyphicons-pen"></span>n>Materiais de escrita

<span class="glyphicons glyphicons-bed-alt"></span>n> Materiais de Cama e banho

<span class="glyphicons glyphicons-pot"></span>n>Utensilios Domésticos

<span class="glyphicons glyphicons-claw-hammer"></span>n>Materiais de Construção-->
<!--
</big></p></div>
<div class="row"><big><b>Seja um Voluntário!</b></big></div><div class="row" id="doa"><big style="text-align: center;">Não perca tempo, venha nos ajudar!</big></div>
<div class="jumbotrom"> 
	<p><big id="voluntario"> 		Precisamos de Voluntários que tenham facilidade de cozinhar, limpeza, relacionar com crianças, etc. 
		Comprometimento, ir de coração, para fazer a Instituição crescer.</big></p></div>

	<div class="row" id="mais"><big><b>Mais informações</b></big></div><div class="row" id="doa"><big style="text-align: center;"><b>Quer nos conhecer um pouco mais ? Busque mais informações nos contatos a baixo.</b></big></div>
	<div class="jumbotrom"> 
		<p><big> 	Email:<span id="email"> apaevv.presidencia@apaebrasil.org.br</span><br>
			Telefone: <span id="telefone">(027)32992628</span><br>
			Venha nos visitar, endereço: <span id="endereco"> rua cabo aylson simoes 185 centro 29100320.</span><br><span id="info"></span></big></p>
		</div>-->


							<!--<h4>Leave a Comment:</h4>
							<form role="form">
								<div class="form-group">
									<textarea class="form-control" rows="3" required></textarea>
								</div>
								<button type="submit" class="btn btn-success">Submit</button>
							</form>
							<br><br>

							<p><span class="badge">2</span> Comments:</p><br>

							<div class="row">
								<div class="col-sm-2 text-center">
									<img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
								</div>
								<div class="col-sm-10">
									<h4>Anja <small>Sep 29, 2015, 9:12 PM</small></h4>
									<p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<br>
								</div>
								<div class="col-sm-2 text-center">
									<img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
								</div>
								<div class="col-sm-10">
									<h4>John Row <small>Sep 25, 2015, 8:25 PM</small></h4>
									<p>I am so happy for you man! Finally. I am looking forward to read about your trendy life. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<br>
									<p><span class="badge">1</span> Comment:</p><br>
									<div class="row">
										<div class="col-sm-2 text-center">
											<img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
										</div>
										<div class="col-xs-10">
											<h4>Nested Bro <small>Sep 25, 2015, 8:28 PM</small></h4>
											<p>Me too! WOW!</p>
											<br>
										</div>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>

				<!--<footer class="container-fluid">
					<p></p>
				</footer>-->
				




		



				<!--<footer class="container-fluid">
					<p></p>
				</footer>-->
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
			//$servername = "177.52.161.146";
			//$username = "daniell2_lucas";
			//$password = "1ixHK6vi";
			//$dbname = "daniell2_ubuntusocial";

// Create connection
				$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				$nome = $_GET['inst'];
				$sql = "select nome,textodesc,textovol,email,telefone,endereco,info,fotos from instituicoes where nome like '%$nome%';";

				$result = mysqli_query($conn, $sql);
				$depois = 'class="box" style="margin-left: 30px;  max-height:240px; ">';

				if (mysqli_num_rows($result) > 0) {
					
    // output data of each row
					//document.getElementById('voluntario').innerHTML = '" .utf8_encode ($row["textovol"]). "' ;
					//						document.getElementById('info').innerHTML = '" .utf8_encode ($row["info"]). "' ;
					echo "<span>".$row["nome"]."</span>";
					while($row = mysqli_fetch_assoc($result)) {

						$anome = '"'.utf8_encode ($row["nome"]).'"';
						$foto = '"'.utf8_encode ($row["fotos"]).'"';

						echo"<script type='text/javascript'>document.getElementById('nome').innerHTML = " .$anome. " ; 
						document.getElementById('quemss').innerHTML = quemsomos
						document.getElementById('quem').innerHTML = '<strong>Área de atuação: </strong>" .utf8_encode ($row["textodesc"]). "' ;
						document.getElementById('instemail').innerHTML = '<strong>Email: </strong>" .utf8_encode ($row["email"]). "' ;
						document.getElementById('insttelefone').innerHTML = '<strong>Telefone: </strong>" .utf8_encode ($row["telefone"]). "' ;
						document.getElementById('endereco').innerHTML = '<strong>Endereço: </strong>" .utf8_encode ($row["endereco"]). "' ;
						textVolunt = '" .utf8_encode ($row["textovol"]). "' ;
						quemsomos =  '" .utf8_encode ($row["textodesc"]). "' ;
						if(quemsomos == ''){
							quemsomos = 'instituição não ofereceu informações para esse campo';
						}
						if(textVolunt == ''){
							textVolunt = 'instituição não ofereceu informações para esse campo';
						}
						document.getElementById('quemss').innerHTML = quemsomos;
						document.getElementById('fotos').innerHTML = '<img  src=".$foto." alt=".$anome." ".$depois." ' ;					
						</script>";
						
						


					}
				} else {
					echo "0 results";

				}

				mysqli_close($conn);

				?>





			</body>
			</html>