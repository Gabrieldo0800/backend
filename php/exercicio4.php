<?php
for($i = 1; $i <= 10; $i++){
    $conta = ($i % 2 == 0 ) ? "Par": "Impar";
    switch(true){
        case($i <= 3):
        $categoria = "baixo.";
        break;
        case ($i > 3 && $i <= 7):
        $categoria = "medio.";
        break;
        case ($i > 7 && $i <= 10):
        $categoria = "alto.";
        break;
    }
    echo "O numero si é $conta e esta na classe $categoria <br>";
}
?>