<?php
// declara a lista principal
$lista_coisas = [];
// declarando a primeira lista segundaria
$lista_coisas ['frutas'] = ['Banana', 'Maçã', 'Morango', 'Uva'];
// declarando a segunda lista secundaria
$lista_coisas ['pessoas'] = ['João', 'José', 'Maria'];
// alterando o valor da lista 1 segundo valor 
$lista_coisas['frutas'][2] = 'Abacaxi';

// exibindo os resultados em formato de lista
echo '<pre>';
print_r($lista_coisas);
echo '<pre>';
?>