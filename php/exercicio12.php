<?php
// declarei a array principal
$cadastro =[];
// declarei a array secundaria
$cadastro['nome'] = ['jaoao', 'maria', 'gabriel', 'pedro', 'marcos'];
// declarei a array secundaria
$cadastro['email'] = ['joaolima@gmail.com', 'mariaalves@gmail.com', 'gabrielleardini@gmail.com', 'pedromiguel@gmail.com', 'marcospiv@gmail.com'];
// exibi a array principal
echo '<pre>';
print_r($cadastro);
echo '<pre>';
// exibi o indice 
echo $cadastro ['nome'] [2] . '<br>';
// exibi o indice
echo $cadastro ['email'] [3];
// alterei o indice
$cadastro ['nome'][1] = 'SENAI';
// alterei o indice
$cadastro ['email'][0] = 'aluno@senai.br';

// exibi o array 
echo '<pre>';
print_r($cadastro);
echo '<pre>';
?>