<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubuntu Social</title>
	<script type="text/javascript" src="scriptUbuntu.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top ">
		<div class="container">
			<div class="navbar-header" ">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="/" style="padding-top: 0px;"><img src="fotos/logo.png" style="width: 100%; margin-right: -400px;""  ></a>
				<!--fazer o search ser responsivo-->
			</div>

					<!--<div class="form-group">
						<input type="text" class="form-control" placeholder="Search" size="80%" >
					<button type="submit" class="btn btn-default">Pesquisar</button>
					
				</div>-->


				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">

						<li><form class="navbar-form navbar-header navbar-right " action="pesquisa.php" method="get">
							<div class="input-group " style="margin-left: 10px; margin-right: 50px; ">
								<input type="search" name="pesquisa" class="form-control" size="70%" placeholder="Procurando a instituição ideal para doar ? " required>
								<div class="input-group-btn">
									<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
								</div>
							</div>
						</form></li>

						<li><a href="/#home">Ínicio</a></li>
						<li><a href="/#portfolio">Projetos</a></li>
						<li><a href="#">Quem Somos</a></li>


					</ul>

				</div>

			</div>

		</nav>

		<div class="container-fluid" style="margin-top: 50px">
			<div class="row content">
				<div class="col-sm-3 sidenav">
					<!--<img src="fotos/apaees.jpg" alt="apae de vila velha
						" class="box" style="max-height:240px" id="fotos">-->
						<span id="fotos"></span>
						<h4 id="nome">Apae de vila velha</h4>
						<ul class="nav nav-pills nav-stacked">
							<li class="active"><a href="#quem">Quem Somos</a></li>
							<li><a href="#doa">Doações</a></li>
							<li><a href="#voluntario">Seja um Voluntário</a></li>
							<li><a href="#mais">Conheça Mais</a></li>
						</ul><br>

					</div>

					<div class="col-sm-9" >
						<h1 style="text-align: center; " id="nome1"> Apae de vila velha </h1>
						<div class="row"><big><b>Quem Somos ? </b></big></div>
						<div class="jumbotrom"> 
							<p><big id="quem"> 	Comunidade que se une para prevenir e tratar a deficiência e promover o bem estar e desenvolvimento da pessoa com deficiência.</big></p></div>
							<div class="row" id="doa"><big><b>Doações</b></big></div>
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
<!--
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
		</div>


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


				<!--<footer class="container-fluid">
					<p></p>
				</footer>-->

				<?php

			//$servername = "localhost";
			//$username = "root";
			//$password = "";
			//$dbname = "ubuntusocial";
				$servername = "177.52.161.146";
				$username = "daniell2_lucas";
				$password = "1ixHK6vi";
				$dbname = "daniell2_ubuntusocial";

// Create connection
				$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				$nome = $_GET['inst'];
				$sql = "select nome,textodesc,textovol,email,telefone,endereco,info,fotos from instituicoes where nome like '%$nome%';";

				$result =mysqli_query($conn, $sql);
				$depois = 'class="box" style="max-height:240px; max-width: 250px;">';

				if (mysqli_num_rows($result) > 0) {
					
    // output data of each row
					while($row = mysqli_fetch_assoc($result)) {

						$anome = '"'.utf8_encode ($row["nome"]).'"';
						$foto = '"'.utf8_encode ($row["fotos"]).'"';
						

						echo"<script type='text/javascript'>document.getElementById('nome').innerHTML = " .$anome. " ; 
						document.getElementById('nome1').innerHTML = " .$anome." ;
						document.getElementById('quem').innerHTML = '" .utf8_encode ($row["textodesc"]). "' ;
						document.getElementById('voluntario').innerHTML = '" .utf8_encode ($row["textovol"]). "' ;
						document.getElementById('email').innerHTML = '" .utf8_encode ($row["email"]). "' ;
						document.getElementById('telefone').innerHTML = '" .utf8_encode ($row["telefone"]). "' ;
						document.getElementById('endereco').innerHTML = '" .utf8_encode ($row["endereco"]). "' ;
						document.getElementById('info').innerHTML = '" .utf8_encode ($row["info"]). "' ;
						document.getElementById('fotos').innerHTML = '<img src=".$foto." alt=".$anome." ".$depois." ' ;					
						</script>";
						
						


					}
				} else {
					echo "0 results";

				}

				mysqli_close($conn);

				?>


			</body>
			</html>