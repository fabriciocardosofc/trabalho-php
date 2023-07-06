<?php
require_once("includes/banco.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["password"];
$select_id = "(select max(id)+1 from tb_usuarios)";

cadastra_usuario($select_id, $nome, $email, $senha);

echo '
<script>
 window.location.href = "http://pessoal/pontosturisticos/form-login.html";
</script>
 ';
 
 //insert into tb_usuarios values((select max(id_usuario)+1 from tb_usuarios), 'fabricio', 'fab@email.com', '12345')

function cadastra_usuario($select_id, $nome, $email, $senha) {
	global $conn;
	$sth = $conn->prepare("insert into tb_usuarios values($select_id, '$nome', '$email', '$senha');");
	$sth->execute();
	
}
?>