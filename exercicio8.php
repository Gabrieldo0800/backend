<?php
// aqui eu atribui a variavel que ira ir somando os valores
$contador = 0;

for ($i = 1; $i <= 100; $i++) {
    // aqui eu fiz a sintaxe do for e em baixo fiz com que o valor do contador ser o resultado da soma de i mais ele mesmo que ira ir somando de um em um
    $contador = ($i + $contador);
}
// e por fim exibi o resultado final
echo "o resultado é de $contador";
?>                                                                                                      