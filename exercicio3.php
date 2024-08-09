<?php
// aqui eu atribui as variaveis
$salario_funcionario = 2100;
$horas_extras_trabalhadas = 11;

// aqui eu utilizei do if, else if e elif para aplicar o que o problema pedia e utilizei do echo para mostrar no site
if ($salario_funcionario < 2000 && $horas_extras_trabalhadas > 10){
    echo 'você recebeu um bonus de 20% de seu salário';
}else if ($salario_funcionario >= 2000 && $horas_extras_trabalhadas > 5){
    echo 'você recebeu um bonus de 10% de seu salário';
}else{
    echo'você nao tem nenhum bonus';
}
?>