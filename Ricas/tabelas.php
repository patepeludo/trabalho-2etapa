<?php

function select_pag() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM `forma_pagamento`");
	$sth->execute();
	return $sth->fetchAll();
}
function insert() {
	global $conn;
	$sth = $conn->prepare("INSERT INTO `cliente` (`id`, `nome`, `cpf`, `email`, `data_nasc`, `formas_pagamento`) VALUES (NULL, :nome, :cpf, :gmail, :data_nasc, :formas_pagamento);");
	$sth->bindParam(':nome', $_POST['n1']);
	$sth->bindParam(':cpf', $_POST['n2']);
	$sth->bindParam(':gmail', $_POST['n3']);
	$sth->bindParam(':formas_pagamento', $_POST['pag']);
	$sth->execute();
}
+
?>
