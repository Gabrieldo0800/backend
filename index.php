<?php
// aqui eu declarei todas as variaveis que utilizarei no codigo, como nome, escola, CE, curso e media, com enfase nas variaveis media e CE, que sao variaveis int e float
$nome = 'Gabriel ';
$escola = 'SESI Cerquilho ';
$CE = 428 ;
$curso = 'Desenvolvimento de Sistemas ';
$media = 9.5 ;

// aquii eu chamei as variaveis com o echo e depois utilizei o comando br para pular as linhas
echo $nome . '<br>';
echo $escola . '<br>';
echo $CE . '<br>';
echo $curso . '<br>';
echo $media . '<br>';

// e por fim eu fiz uma frase com as variaveis em sequencia, chamei elas usando o echo, abri aspas para exibir o que esta dentro, e chamei as variaveis em seus determinados lugares
echo "ola $nome, seja bem vindo ao $escola, da unidade escolar $CE, cursando o curso de $curso"
?>