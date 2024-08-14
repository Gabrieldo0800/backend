<?php
$cor_escolhida = "vermelho";

switch (cor_escolhida) {
    case "vermelho":
        echo "voce escolheu a cor vermelha. ";
        break;
    
    case "azul":
        echo "voce escolheu a cor azul";
        break;

    case "verde":
         echo "voce escolheu a cor verde";
        break;

    default:
        echo"cor nao disponivel";
        break;
}
?>