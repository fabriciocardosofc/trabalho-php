<?php
require_once("includes/banco.php");
$email_form = $_POST["email"];
$senha_form = $_POST["password"];
$dados_usuario = pega_usuario($email_form);

//echo $email_form;
//echo $senha_form;

foreach ($dados_usuario as $dado){
	   $email_banco = $dado["email_pessoa"];
	   $senha_banco = $dado["senha_usuario"];
	   
	   //echo $email_banco;
	   //echo $senha_banco;
	   autentica_usuario($email_form, $senha_form, $email_banco, $senha_banco);
	}


function pega_usuario($email) {
	global $conn;
	$sth = $conn->prepare("select email_pessoa, senha_usuario from tb_usuarios where email_pessoa ilike '$email'");
	$sth->execute();
	return $sth->fetchAll();
}

function autentica_usuario($email_form, $senha_form, $email_banco, $senha_banco) {
	if($email_form == $email_banco && $senha_form == $senha_banco) {
		echo '
		 <script>
		   window.location.href = "http://pessoal/pontosturisticos/site.php?id_cidade=1";
		 </script>
		';
	} else {
		  echo '
		   <script>
		     window.location.href = "http://pessoal/pontosturisticos/form-login.html";
			 alert("email ou senha incorretos!");	
		   </script>
		  ';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Área logada</title>
</head>
<body>
    <h2>Bem Vindo</h2>
    
</body>
</html>