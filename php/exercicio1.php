<?php
// aqui eu coloquei as tres variaveis que eu utilizei para representar as notas do aluno
$nota1 = 4;
$nota2 = 8;
$nota3 = 6;

// aqui eu fiz a conta para calcular a media do aluno dividindo a soma das notas por 3
$resultado = ($nota1 + $nota2 + $nota3) / 3;

// aqui eu fiz a o se senao, se a nota for maior que 7, aparece aporvado, senao, reprovado
if ($resultado >= 7){
    echo 'voce foi aprovado casca de bala';
}else{
    echo 'voce foi reprovado, acontece bora bill' . '<br/>';
}

// por fim e mostrei as variaveis e resultados com echo
echo 'a primeira nota é de :' . $nota1 . '<br/>';
echo 'a segunda nota é de :' . $nota2 . '<br/>';
echo  'a terceira nota é de :' . $nota3 . '<br/>';
echo 'a nota final é de :' . $resultado. '<br/>';
?>