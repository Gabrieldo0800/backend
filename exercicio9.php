<?php
// apliquei a variavel
$contador = 0;
/*apliquei o teto de 50 e fiz a raiz quadrada com a sqrt e 
depois arredondei para duas casa decimais com o roud*/
for($i = 1; i <= 50; $i++){
    $contador = sqrt($i);
    $arredondado = roud($contador, 2);
    echo"A raiz quadrada é de: $arredondado <br>";
}
?>