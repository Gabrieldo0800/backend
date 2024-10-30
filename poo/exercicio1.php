<?php
class Aluno{
public $nome = "Gabriel";
public $idade = 93;
public $curso = "Croche";

function exibirDadosAlunos(){
    return "nome do aluno: $this->nome, idade: $this->idade, curso: $this->curso";

}

function Alterarcurso($AlterarCurso){
    $this->curso = $AlterarCurso;
}

}
$y = new Aluno();
echo $y -> exibirDadosAlunos();
echo '<hr>';

$y = new Aluno();
echo $y-> Alterarcurso('Carpintaria');
echo $y -> exibirDadosAlunos();
echo '<hr>';
?>  