<?php
$nome_da_cidade = "";
$historia_da_cidade = "";
$cultura_da_cidade = "";

function carrega_dados_da_cidade($id_cidade){
	global $nome_da_cidade, $historia_da_cidade,$cultura_da_cidade;
	$nome = "";
	$registros = select_cidade($id_cidade);
	//var_dump($registros);
	foreach ($registros as $registro){
	$nome_da_cidade = $registro ['nm_cidade'];
	$historia_da_cidade = $registro ['historia'];
	$cultura_da_cidade = $registro ['cultura'];
	}
	
}
function select_cidade($id_cidade) {
	global $conn;
	$sth = $conn->prepare("select *from tb_pontosturisticos_cidades where id_cidade = $id_cidade");
	$sth->execute();
	return $sth->fetchAll();
}
function select_pontoturistico_da_cidade($id_cidade) {
	global $conn;
	$sth = $conn->prepare("select *from tb_pontosturisticos_pontoturistico where id_cidade = $id_cidade");
	$sth->execute();
	return $sth->fetchAll();
}

?>