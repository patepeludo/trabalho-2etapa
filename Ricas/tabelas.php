<?php

function select_pag() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM `formas_pagamento`");
	$sth->execute();
	return $sth->fetchAll();
}
function select_cliente() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM cliente INNER JOIN formas_pagamento WHERE cliente.pag = formas_pagamento.id_pag;");
	$sth->execute();
	return $sth->fetchAll();
}
function insert() {
	global $conn;
	$sth = $conn->prepare("INSERT INTO `cliente` (`id`, `nome`, `cpf`, `gmail`, `pag`,`comentario`) VALUES (NULL, :nome, :cpf, :gmail, :pag,:comentario);");
	$sth->bindParam(':nome', $_POST['n1']);
	$sth->bindParam(':cpf', $_POST['n2']);
	$sth->bindParam(':gmail', $_POST['n3']);
	$sth->bindParam(':pag', $_POST['pag']);
	$sth->bindParam(':comentario', $_POST['n8']);
	$sth->execute();
}
function delete() {
	global $conn;
	$sth = $conn->prepare("DELETE FROM cliente WHERE `cliente`.`id` = :id");
	$sth->bindParam(':id', $_POST['id']);
	$sth->execute();
	return $sth->fetchAll();
}
?>
