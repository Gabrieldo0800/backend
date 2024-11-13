<?php
class Professor {

    public $nome;
    public $disciplina;
    protected $cpf;
    protected $salario;
    public $ensinar;
    public $corrigirProva;
    public $prepararAula;
    private $fazerChamada;
    private $corrigirTarefa;




    public function ensinar(){
        echo "$this->nome está ensinando";
}

    public function corrigirProva(){
        echo "$this->nome está corrigindo provas";
}

public function prepararAula(){
    echo "$this->nome está preparando a aula";
}

private function fazerChamada(){
    echo "$this->nome está fazendo a chamada";
}

private function dormir(){
    echo "$this->nome está corrigindo a tarfa dos alunos";
}
}
?>