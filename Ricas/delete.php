<?php
require_once 'banco.php';
require_once 'tabelas.php';

$_POST['id'] = intval($_POST['id']);
delete();
header('Location: inform.php');
?>