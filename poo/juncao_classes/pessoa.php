<?php

require_once ('class_pessoa.php');


$pessoa = new Pessoa();

$pessoa -> nome = ('Ricardo');
$pessoa -> idade = ('45');
$pessoa ->apresentar();
echo '<hr>';
$pessoa ->caminhar();
echo '<hr>';
$pessoa ->falar();
?>
