<?php

require_once ('class_professor.php');


$professor = new Professor();

$professor -> nome = ('Ricardo');
$professor -> disciplina = ('matematica');
$professor ->ensinar();
echo '<hr>';
$professor ->corrigirProva();
echo '<hr>';
$professor ->prepararAula();
?>
