<?php
$nome = array("vinicius","gabriel", "pablo", "felipe", "pedro", "ana", "rosa", "amarela", "joanex", "alice");
$variavel = "joanex";
array_search('joanex', $nome);

echo '<pre>';
print_r($nome);
echo '<pre>';

if ($variavel !== false){
    echo "esse item existe e esta localizado na posicao. ". $variavel;

}else{
    echo "nao fia da puta";
}
?>