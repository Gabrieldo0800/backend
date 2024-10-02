<?php
// aqui eu declarei a lista principal
$cadastro = [];

// aqui e criei as duas sublistas, usuarios e senhas
$cadastro ['usuarios'] = ['joao', 'maria', 'pedro'];
$cadastro ['senha'] = ['1234', 'abcd', '5678'];

// exibi as listas originais
echo '<pre>';
print_r($cadastro);
echo '<pre>';

// mostrei o que sera alterado
echo("aqui estao os valores que serao alterados abcd da lista senha e maria da lista usuarios");

// aqui eu eu acrescentei a outra tabela
$cadastro ['usuarios'] = ['joao', 'maria', 'pedro'];
$cadastro ['senha'] = ['1234', 'abcd', '5678'];

// e por fim eu alterei a tabela
$cadastro['usuarios'][1] = 'ana';
$cadastro['senha'][1] = 'efgh';

// exibi as listas originais
echo '<pre>';
print_r($cadastro);
echo '<pre>';


?>