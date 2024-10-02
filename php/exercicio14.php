<?php
// aqui eu criei a tabela com os nomes e informacoes
$usuarios =[
    ["id" => 1,
    "nome"=>"carlos"
    "cidade"=>"Springfield",
    "estado"=>"CA"],
    
    ["id" => 2,
    "nome"=>"Gandolf"
    "cidade"=>"Aral",
    "estado"=>"CA"],

    ["id" => 3,
    "nome"=>"Ana"
    "cidade"=>"Xique-xique",
    "estado"=>"BA"],

    ["id" => 4,
    "nome"=>"Joao"
    "cidade"=>"Boituva",
    "estado"=>"SP"],

    ["id" => 5,
    "nome"=>"Claudio"
    "cidade"=>"Tatui",
    "estado"=>"SP"],
    
    ]

    // o nome que eu irei buscar
    $busca = "Gandolf";
// procurando o nome com o search
    $indice = array_search(busca, array_column($usuarios, 'nome'));
// se o nome existir  irar mostrar se nao vai falar que nao foi encontrado
    if($indice !== false){

        echo "$busca foi encontrada com a cidade". $usuario[$indice]['cidade'];

    }else{

        echo "$busca não foi encontrada na lista de usuarios";
    }

?>