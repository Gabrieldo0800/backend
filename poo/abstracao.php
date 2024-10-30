<?php
// Modelo -> entidade

class Funcionario{

// Atributos -> Caracteristicas
public $nome = "valter";
public $telefone = null;
public $numFilhos = 1324;

// Metodo ->ações

function resumirCadFunc(){
    return "$this->nome possui $this->numFilhos filho(s)";

}
function modificarNumFilhos(){
$this->numFilhos = $Filhos;
}

function modificarNome($AlterarNome){
    $this->nome =AlterarNome
}

}
// Objeto -> Identidade
$x = new Funcionario();
echo $y -> resumirCadFunc();
echo '<hr>';
$x->modificarNumFilhos(3);
echo $y->resumirCadFunc();
echo '<hr>';

// Objeto -> Identidade
$x = new Funcionario();
$x->modificarNome('gilmar');
echo $y -> resumirCadFunc();
echo '<hr>';

?>