<?php
class Aluno{
public $titulo = "O Pqueno Principe";
public $autor = 'Gabriel';
public $anoPublicacao = 1258;

function exibirDetalhes(){
    return "nome do aluno: $this->titulo, idade: $this->autor, curso: $this->anoPublicacao";

}

function alteraranoPublicacao($alteraranoPublicacao){
    $this->anoPublicacao = $alteraranoPublicacao;
}

}
$x = new Aluno();
echo $x -> exibirDetalhes();
echo '<hr>';

$x = new Aluno();
echo $x-> alteraranoPublicacao('300 A.C');
echo $x -> exibirDetalhes();
echo '<hr>';
?>  