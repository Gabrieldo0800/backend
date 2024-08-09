<?php
// aqui eu atribui as variaveis
$valor_total_comprado = 400;
$cliente_vip = 'nao';

// aqui eu utilizei do if e else para para atribuir a situacao problema e se um ou o outro for verdadeiro, o cliente ganha desconto
if ($valor_total_comprado >= 500 || $cliente_vip == 'sim'){
    echo 'Parabéns, você é tem direito a promoção';
}else{
    echo 'Você não tem direito a promoção, lamentamos';
}
// aqui em cima eu utilizei o echo para mostar os resultados
?>  