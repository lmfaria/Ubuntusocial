<?php 
session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];
$con = mysql_connect("177.52.161.146", "daniell2_lucas", "1ixHK6vi") or die ("Sem conexão com o servidor");
$select = mysql_select_db("daniell2_ubuntusocial") or die("Sem acesso ao DB, Entre em contato com o Administrador, lucasmerhi@algumacoisa.com.br");
 
$result = mysql_query("SELECT * FROM `Temos que criar uma tabela de usuarios com nome e senha` WHERE `NOME` = '$login' AND `SENHA`= '$senha'");
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:pagina_para_instituicao.php');
}
else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:index.php'); 
    }
 
?>