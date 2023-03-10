<?php
require_once 'banco.php';
require_once 'tabelas.php';

if (!isset($_POST['n8'])) {
    $_POST['n8'] = "";
}
$_POST['pag'] = intval($_POST['pag']);

insert();
header('Location: inform.php')

?>