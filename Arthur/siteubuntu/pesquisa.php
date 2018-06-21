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

						<li><form class="navbar-form navbar-header navbar-right " method="get">
							<div class="input-group " style="margin-left: 10px; margin-right: 50px; ">
								<input type="search" name="pesquisa" class="form-control" size="70%" placeholder="Procurando a instituição ideal para doar ? " required>
								<div class="input-group-btn">
									<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
								</div>
							</div>
						</form></li>

						<li><a href="/#home">Ínicio</a></li>
						<li><a href="/#portfolio">Projetos</a></li>
						<li><a href="#pricing">Quem Somos</a></li>


					</ul>

				</div>

			</div>

	</nav>
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
			$nome = $_GET['pesquisa'];
			$sql = "select nome,textodesc,fotos from instituicoes where nome like '%$nome%';";


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
				echo "0 results";
				echo mysqli_num_rows($result);
				
				
			}


			mysqli_close($conn);

			?>

			


		</body>
		</html>