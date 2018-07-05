<!DOCTYPE html>
<html lang="pt">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubuntu Social</title>
	<script type="text/javascript" src="scriptUs.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="styleUs.css">
	<link rel="icon" href= "fotos/logoUS.png" style="width: 100%;">


</head>

<body>
	<script type="text/javascript">
		function postInst(){
			var nome = $("#nome").val();
   var atuacao = $("#atuacao").val();
   var impactados = $("#impactados").val();
   var endereco = $("#endereco").val();
   var telefone = $("#insttelefone").val();
   var email = $("#instemail").val();

   $.ajax
   ({
   	type: 'post',
   	url: 'forminst.php',
   	async: false, 
   	data:
   	{
   		inst_nome : nome,
   		inst_endereco : endereco,
   		inst_telefone : telefone,
   		inst_email : email,
    	inst_atuacao : atuacao,
    	inst_impactados : impactados,

    	},
    	success: function(response){

    		document.getElementById('status').style.display="block";
    	} 
    })


}
		function postInstcentro(){
	var nome = document.getElementsByName('oi');
	var ativo;
	var dado
	for (var i = nome.length - 1; i >= 0; i--) {
		if(nome[i].className == "active col-sm-4"){
			ativo = nome[i].innerHTML;
		}
	}

    //dado = document.getElementById('textalt').innerHTML;

    dado = $("#textalt").val();;

    $.ajax
    ({
    	type: 'post',
    	url: 'forminstcentro.php',
    	async: false, 
    	data:
    	{
    		inst_dado : dado,
    		inst_campo : ativo,


    	},
    	success: function(response){

    		document.getElementById('status').style.display="block";
    	} 
    })


}function menualt(id, name){
	var nome = document.getElementsByName(name);
	var ativo;
	for (var i = nome.length - 1; i >= 0; i--) {
		if(nome[i].className == "active col-sm-4"){
			ativo = i;
		}
		nome[i].className = "col-sm-4";
	}
	document.getElementById(id).className = "active col-sm-4";
	if(ativo == 0){
		quemsomos = document.getElementById('textalt').innerHTML;
	}else if(ativo == 2){
		textVolunt = document.getElementById('textalt').innerHTML;
	}
	switch (id){
		case "h.sobre":
		document.getElementById("conteudo").innerHTML =  "<div class='row' style='margin-top: 0px'><big><b>Quem Somos ? </b></big></div><p><textarea id='textalt'  placeholder='informações não fornecidas pela instituição' class='form-control' rows='5'>" + quemsomos +"</textarea></p><div class='input-group-btn'><button type='submit' class='btn btn-default'></span> Salvar</button><button type='reset' class='btn btn-default'></span> Cancelar</button></div>";
		break;
		case "h.doa":
		document.getElementById("conteudo").innerHTML =  "<div class='row' style='margin-top: 0px'><b>Gostaria de ajudar ?</b></big></div><div class='jumbotrom'><p><big><span class='glyphicons glyphicons-dining-set'></span>Alimento<br><span class='glyphicons glyphicons-t-shirt'></span>Roupa<br><span class='glyphicons glyphicons-education'></span>Materias Didáticos<br><span class='glyphicons glyphicons-soccer-ball'></span>Brinquedos<br><span class='glyphicons glyphicons-usd'></span>Dinheiro<br><span class='glyphicons glyphicons-cleaning'></span>Materiais de Limpeza <br>";
		break;	
		case "h.voluntarios":
		document.getElementById("conteudo").innerHTML =  "<div class='row' style='margin-top: 0px'><b>O que esperamos dos volutários?</b></big></div><p><textarea  placeholder='informações não fornecidas pela instituição' id='textalt' class='form-control' rows='5'>"+ textVolunt +"</textarea></p><div class='input-group-btn'><button type='submit' class='btn btn-default'></span> Salvar</button><button type='reset' class='btn btn-default'></span> Cancelar</button></div>";
		break;
		/**case "h.contatos":
		document.getElementById("conteudo").innerHTML =   "";
		break;**/
	}

}
function menualt(id, name){
	var nome = document.getElementsByName(name);
	var ativo;
	for (var i = nome.length - 1; i >= 0; i--) {
		if(nome[i].className == "active col-sm-4"){
			ativo = i;
		}
		nome[i].className = "col-sm-4";
	}
	document.getElementById(id).className = "active col-sm-4";
	if(ativo == 0){
		quemsomos = document.getElementById('textalt').innerHTML;
	}else if(ativo == 2){
		textVolunt = document.getElementById('textalt').innerHTML;
	}
	switch (id){
		case "h.sobre":
		document.getElementById("conteudo").innerHTML =  "<div class='row' style='margin-top: 0px'><big><b>Quem Somos ? </b></big></div><p><textarea id='textalt'  placeholder='informações não fornecidas pela instituição' class='form-control' rows='5'>" + quemsomos +"</textarea></p><div class='input-group-btn'><button type='submit' class='btn btn-default'></span> Salvar</button><button type='reset' class='btn btn-default'></span> Cancelar</button></div>";
		break;
		case "h.doa":
		document.getElementById("conteudo").innerHTML =  "<div class='row' style='margin-top: 0px'><b>Gostaria de ajudar ?</b></big></div><div class='jumbotrom'><p><big><span class='glyphicons glyphicons-dining-set'></span>Alimento<br><span class='glyphicons glyphicons-t-shirt'></span>Roupa<br><span class='glyphicons glyphicons-education'></span>Materias Didáticos<br><span class='glyphicons glyphicons-soccer-ball'></span>Brinquedos<br><span class='glyphicons glyphicons-usd'></span>Dinheiro<br><span class='glyphicons glyphicons-cleaning'></span>Materiais de Limpeza <br>";
		break;	
		case "h.voluntarios":
		document.getElementById("conteudo").innerHTML =  "<div class='row' style='margin-top: 0px'><b>O que esperamos dos volutários?</b></big></div><p><textarea  placeholder='informações não fornecidas pela instituição' id='textalt' class='form-control' rows='5'>"+ textVolunt +"</textarea></p><div class='input-group-btn'><button type='submit' class='btn btn-default'></span> Salvar</button><button type='reset' class='btn btn-default'></span> Cancelar</button></div>";
		break;
		/**case "h.contatos":
		document.getElementById("conteudo").innerHTML =   "";
		break;**/
	}

}
var quemsomos;
var textVolunt;

function menu(id, name){
	var nome = document.getElementsByName(name);
	for (var i = nome.length - 1; i >= 0; i--) {
		nome[i].className = "col-sm-4";
	}
	document.getElementById(id).className = "active col-sm-4";
	switch (id){
		case "h.sobre":
		document.getElementById("conteudo").innerHTML =  "<div class='row' style='margin-top: 0px'><big><b>Quem Somos ? </b></big></div><div class='jumbotrom'><p><big id='quemss'> "+quemsomos+"</big></p></div>";
		break;
		case "h.doa":
		document.getElementById("conteudo").innerHTML =  "<div class='row' style='margin-top: 0px'><b>Gostaria de ajudar ?</b></big></div><div class='jumbotrom'><p><big><span class='glyphicons glyphicons-dining-set'></span>Alimento<br><span class='glyphicons glyphicons-t-shirt'></span>Roupa<br><span class='glyphicons glyphicons-education'></span>Materias Didáticos<br><span class='glyphicons glyphicons-soccer-ball'></span>Brinquedos<br><span class='glyphicons glyphicons-usd'></span>Dinheiro<br><span class='glyphicons glyphicons-cleaning'></span>Materiais de Limpeza <br>";
		break;	
		case "h.voluntarios":
		document.getElementById("conteudo").innerHTML =  "<div class='row' style='margin-top: 0px'><b>O que esperamos dos volutários?</b></big></div><div class='jumbotrom'><p><big>"+textVolunt+"</big></p></div>";
		break;
		/**case "h.contatos":
		document.getElementById("conteudo").innerHTML =   "";
		break;**/
	}

}
function menualt(id, name){
	var nome = document.getElementsByName(name);
	var ativo;
	for (var i = nome.length - 1; i >= 0; i--) {
		if(nome[i].className == "active col-sm-4"){
			ativo = i;
		}
		nome[i].className = "col-sm-4";
	}
	document.getElementById(id).className = "active col-sm-4";
	if(ativo == 0){
		quemsomos = document.getElementById('textalt').innerHTML;
	}else if(ativo == 2){
		textVolunt = document.getElementById('textalt').innerHTML;
	}
	switch (id){
		case "h.sobre":
		document.getElementById("conteudo").innerHTML =  "<div class='row' style='margin-top: 0px'><big><b>Quem Somos ? </b></big></div><p><textarea id='textalt'  placeholder='informações não fornecidas pela instituição' class='form-control' rows='5'>" + quemsomos +"</textarea></p><div class='input-group-btn'><button type='submit' class='btn btn-default'></span> Salvar</button><button type='reset' class='btn btn-default'></span> Cancelar</button></div>";
		break;
		case "h.doa":
		document.getElementById("conteudo").innerHTML =  "<div class='row' style='margin-top: 0px'><b>Gostaria de ajudar ?</b></big></div><div class='jumbotrom'><p><big><span class='glyphicons glyphicons-dining-set'></span>Alimento<br><span class='glyphicons glyphicons-t-shirt'></span>Roupa<br><span class='glyphicons glyphicons-education'></span>Materias Didáticos<br><span class='glyphicons glyphicons-soccer-ball'></span>Brinquedos<br><span class='glyphicons glyphicons-usd'></span>Dinheiro<br><span class='glyphicons glyphicons-cleaning'></span>Materiais de Limpeza <br>";
		break;	
		case "h.voluntarios":
		document.getElementById("conteudo").innerHTML =  "<div class='row' style='margin-top: 0px'><b>O que esperamos dos volutários?</b></big></div><p><textarea  placeholder='informações não fornecidas pela instituição' id='textalt' class='form-control' rows='5'>"+ textVolunt +"</textarea></p><div class='input-group-btn'><button type='submit' class='btn btn-default'></span> Salvar</button><button type='reset' class='btn btn-default'></span> Cancelar</button></div>";
		break;
		/**case "h.contatos":
		document.getElementById("conteudo").innerHTML =   "";
		break;**/
	}

}

//wesley
function validaForm()
{
	var counterro = 0;
	document.getElementById('erro').innerHTML="";
	document.getElementById('erro').style.display="none";
	document.getElementById('usuario').style.border="";
	document.getElementById('senha').style.border="";

	if (document.getElementById('usuario').value== "" && document.getElementById('senha').value == "")
	{
		document.getElementById('erro').innerHTML="Preencha o campo usuario<br>Preencha o campo senha";
		document.getElementById('erro').style.display="block";
		document.getElementById('usuario').style.border="2px solid red";
		document.getElementById('senha').style.border="2px solid red";
		counterro+=1;
	}
	if (document.getElementById('usuario').value == "")
	{
		document.getElementById('erro').innerHTML="Preencha o campo usuario <br>";
		document.getElementById('erro').style.display="block";
		document.getElementById('usuario').style.border="2px solid red";
		counterro+=1;
	}
	if (document.getElementById('senha').value == "")
	{
		document.getElementById('erro').innerHTML+="Preencha o campo senha";
		document.getElementById('erro').style.display="block";
		document.getElementById('senha').style.border="2px solid red";
		counterro+=1;
	}
	if(counterro>=1)
	{
		return false;
	}
	else
	{
		return true;
	}
}

function validaFormCad()
{
	var counterro1=0;
	document.getElementById('erro1').innerHTML="";
	document.getElementById('erro1').style.display="none";
	document.getElementById('usuario').style.border="";
	document.getElementById('senha').style.border="";


	if (document.getElementById('nomeinst').value == "")
	{
		document.getElementById('erro1').innerHTML="Preencha o campo Nome da instituição <br>";
		document.getElementById('erro1').style.display="block";
		document.getElementById('nomeinst').style.border="2px solid red";
		counterro1+=1;
	}
	if (document.getElementById('telefone').value == "")
	{
		document.getElementById('erro1').innerHTML+="Preencha o campo Telefone <br>";
		document.getElementById('erro1').style.display="block";
		document.getElementById('telefone').style.border="2px solid red";
		counterro1+=1;
	}
	if (document.getElementById('email').value == "")
	{
		document.getElementById('erro1').innerHTML+="Preencha o campo Email <br>";
		document.getElementById('erro1').style.display="block";
		document.getElementById('email').style.border="2px solid red";
		counterro1+=1;
	}
	if (document.getElementById('usu').value == "")
	{
		document.getElementById('erro1').innerHTML+="Preencha o campo Usuário <br>";
		document.getElementById('erro1').style.display="block";
		document.getElementById('usu').style.border="2px solid red";
		counterro1+=1;
	}
	if (document.getElementById('pass').value == "")
	{
		document.getElementById('erro1').innerHTML+="Preencha o campo Senha <br>";
		document.getElementById('erro1').style.display="block";
		document.getElementById('pass').style.border="2px solid red";
		counterro1+=1;
	}
	if (document.getElementById('pass').value != document.getElementById('confirmpass').value)
	{
		document.getElementById('erro1').innerHTML+="A confirmação de senha não confere <br>";
		document.getElementById('erro1').style.display="block";
		document.getElementById('confirmpass').style.border="2px solid red";
		counterro1+=1;
	}
	if(counterro1>=1)
	{
		return false;
	}
	else
	{
		return true;
	}
}

function logon()
{
	document.getElementById('menulogin').style.display="none";
	document.getElementById('menucadastro').style.display="none";
	document.getElementById('menulogout').style.display="block";
	document.getElementById('menuinstalt').style.display="block";
}

</script>
<!-- Nav bar karalhuda -->

	<nav class="navbar navbar-default navbar-fixed-top ">
		<div class="container">
			<div class="navbar-header" ">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="index.php" style="padding-top: 0px;"><img src="fotos/logo.png" style="width: 100%; margin-right: -400px;"  ></a>
				<!--fazer o search ser responsivo-->
			</div>

					<!--<div class="form-group">
						<input type="text" class="form-control" placeholder="Search" size="80%" >
					<button type="submit" class="btn btn-default">Pesquisar</button>
					
				</div>-->

<!-- Nova bara de pesquisa -->
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">											
					<li><form class="navbar-form navbar-header  " action="pesquisa.php" method="get">
							<div class="input-group" style="margin-left: 15px; margin-right: 15px;">
								<input type="search" name="pesquisa" class="form-control" size="60%" placeholder="Procurando a instituição ideal para doar ?" required>
									<div class="input-group-btn">
										<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> Pesquisar</button>
										<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><i class="glyphicon glyphicon-cog"></i> <span class="caret"></span></button>
										<!--<form action="pesquisa.php" method="post">-->
											<ul class="dropdown-menu dropdown-menu-right">
												<div class="radio" style="padding-left: 10px; padding-right: 10px">
													<li><label><input type="radio" name="filtro" value="tudo" checked="checked">Tudo</label>
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

		<!--	<li><a href="#home">Ínicio</a></li>-->
			<li><a href="projetos.php">Projetos</a></li>
		<!--	<li><a href="#pricing">Quem Somos</a></li>-->
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
												<div>
													<input class="btn btn-danger" type='reset' name='botao' value='Limpar'>
													<input class="btn btn-primary" type='submit' name='botao' value='Entrar' >
												</div>
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

						<div class="panel panel-default text-center " style="margin-right: 0px;
						margin-left: 0px; 	border: solid #dbdbdb;">
						<div class="panel-heading">
							<form method="post" action="" onsubmit="return postInst();"  id="forminst">
								<label>Nome da Instituição</label>
								<input type="text" class="form-control" name="nome" id="nome">
							</div>
							<div class="panel-body">

								<p ><strong>Área de atuação: </strong> </p>
								<textarea id="atuacao" name = "atuacao" class="form-control" rows="5">teste</textarea>
								<p ><strong>Número de impactados: </strong> </p>
								<input id="impactados" name = "impactados" type="number" class="form-control" placeholder="Não fornecido">
								<p ><strong>Endereço: </strong></p>
								<textarea id="endereco" name = "endereco" class="form-control" rows="3" >teste</textarea>
								<p ><strong>Contato: </strong> </p>
								<input id="insttelefone" name = "insttelefone" type="text" class="form-control">
								<p ><strong>Email: </strong></p>
								<input id="instemail" name = "instemail" type="email" class="form-control">

								<span id="status" style="display: none;">Informações cadastradas com sucesso</span>
								<div class="input-group-btn">

									<button type="submit" class="btn btn-default"></span> Salvar</button>
									<button type="reset" class="btn btn-default"></span> Cancelar</button>
								</div>
							</form>

						</div>
					</div> 


				</div>

				<div class="col-sm-9" style="padding-right: 0px" >
					<!-- Teste-->
					<div class="topnav row" style="margin: 0px">

							<a class="active col-sm-4" name="oi" onclick="menualt('h.sobre', 'oi')" href="#home" id="h.sobre">Sobre</a></a>
							<a class=" col-sm-4" href="#news" name="oi" onclick="menualt('h.doa', 'oi')" id = "h.doa">Doações</a>
							<a class=" col-sm-4" href="#volunt" name="oi" onclick="menualt('h.voluntarios', 'oi')" id = "h.voluntarios" >Voluntários</a>
							<!--
								se voltar botar col-sm-3
								<a class=" col-sm-3" href="#contact" name="oi" onclick="menu('h.contatos', 'oi')" id = "h.contatos" >Comentários</a> -->

							</div>
							<!--<h1 style="text-align: center; " id="nome1"> Apae de vila velha </h1>-->
							<form method="post" action="" onsubmit="return postInstcentro();"  id="forminstcentro">

							<div id = "conteudo" class="containerm">
								<div class="row" style="margin-top: 0px"><big><b>Quem Somos ? </b></big></div>
								<div class="jumbotrom"> 
									<p>
									<textarea id='textalt' class='form-control' placeholder="informações não fornecidas pela instituição" rows='5'></textarea>
									</p>
									<div class='input-group-btn'><button type='submit' class='btn btn-default'></span> Salvar</button><button type='reset' class='btn btn-default'></span> Cancelar</button></div>
								</div>
								
							</div>
							</form>	

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

//Presente em todos
				if (!isset($_SESSION))session_start();
			// Verifica se não há a variável da sessão que identifica o usuário
				if (!isset($_SESSION["inst"]))
				{
      		// Redireciona o visitante de volta pro login
					echo '<script type="text/javascript">window.location="index.php"</script>';
      		//encerra todas as funçoes
					exit;
				}
			// Verifica se não há a variável da sessão que identifica o usuário
				if (isset($_SESSION["inst"])) 
				{
			//esconde login e cadastro e exibe logout
					echo "<script>logon()</script>";
				}

			//var_dump($_SESSION);



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

	//garante o utf8
   mysql_query("SET character_set_results=utf8",$conn);
   mb_language('uni'); 
   mb_internal_encoding('UTF-8');
   mysql_query("set names 'utf8'",$conn);
   //fim 



// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

//FIM - Presente em todos   

				$nome = $_SESSION["inst"];
				$idinst = $_SESSION["id"];
				$sql = "select idinst, nome,textodesc, atuacao, impactados, textovol,email,telefone,endereco,info,fotos from instituicoes where idinst = '$idinst';";

				$result = mysqli_query($conn, $sql);
				$depois = 'class="box" style="margin-left: 30px; max-height:240px">';

				if (mysqli_num_rows($result) > 0) {
					
    // output data of each row
					//document.getElementById('voluntario').innerHTML = '" .utf8_encode ($row["textovol"]). "' ;
					//						document.getElementById('info').innerHTML = '" .utf8_encode ($row["info"]). "' ;
					//echo "<span>".$row["nome"]."</span>";
					while($row = mysqli_fetch_assoc($result)) {

						$anome = '"'.utf8_encode ($row["nome"]).'"';
						$foto = '"'.utf8_encode ($row["fotos"]).'"';
						$idinst = utf8_encode ($row["idinst"]);

						

// trocar o quem por segmento
						echo"<script type='text/javascript'>document.getElementById('nome').value = " .$anome. " ; 
						document.getElementById('instemail').value = '" .utf8_encode ($row["email"]). "' ;
						document.getElementById('insttelefone').value = '" .utf8_encode ($row["telefone"]). "' ;
						document.getElementById('endereco').value = '" .utf8_encode ($row["endereco"]). "' ;
						textVolunt = '" .utf8_encode ($row["textovol"]). "' ;
						quemsomos =  '" .utf8_encode ($row["textodesc"]). "' ;
						document.getElementById('atuacao').innerHTML = '" .utf8_encode ($row["atuacao"]). "' ;
						document.getElementById('impactados').value = '" .utf8_encode ($row["impactados"]). "' ;
						document.getElementById('textalt').innerHTML = '" .utf8_encode ($row["textodesc"]). "' ;
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