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
		document.getElementById("conteudo").innerHTML =  "<div class='row' style='margin-top: 0px'><big><b>Quem Somos ? </b></big></div><p><textarea id='textalt' class='form-control' rows='5'>" + quemsomos +"</textarea></p>";
		break;
		case "h.doa":
		document.getElementById("conteudo").innerHTML =  "<div class='row' style='margin-top: 0px'><b>Gostaria de ajudar ?</b></big></div><div class='jumbotrom'><p><big><span class='glyphicons glyphicons-dining-set'></span>Alimento<br><span class='glyphicons glyphicons-t-shirt'></span>Roupa<br><span class='glyphicons glyphicons-education'></span>Materias Didáticos<br><span class='glyphicons glyphicons-soccer-ball'></span>Brinquedos<br><span class='glyphicons glyphicons-usd'></span>Dinheiro<br><span class='glyphicons glyphicons-cleaning'></span>Materiais de Limpeza <br>";
		break;	
		case "h.voluntarios":
		document.getElementById("conteudo").innerHTML =  "<div class='row' style='margin-top: 0px'><b>O que esperamos dos volutários?</b></big></div><p><textarea id='textalt' class='form-control' rows='5'>"+ textVolunt +"</textarea></p>";
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

function postInst(){
	var nome = $("#nome").val();
    //var setor = $("#quem").val();
   // var impactados = $("#Num").val();
    var endereco = $("#endereco").val();
    var telefone = $("#insttelefone").val();
    var email = $("#instemail").val();

    $.ajax
    ({
    	type: 'post',
    	url: 'forminst.php',
    	data:
    	{
    		inst_nome : nome,
    		inst_endereco : endereco,
    		inst_telefone : telefone,
    		inst_email : email
    		//inst_setor = setor,
    		//inst_impactados = impactados,

    	},
    	success: function(response){

    		document.getElementById('status').style.display="block";
    	} 
    })


}