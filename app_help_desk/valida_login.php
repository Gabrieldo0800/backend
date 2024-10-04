<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->
    <?php
    /*echo "<pre>";
    print_r($_POST);
    echo "<?pre>";
    echo "<hr>";

    echo "E-mail: ";
    echo $_POST['email'];
    echo"<br>";
    echo "Senha: ";
    echo $_POST['senha'];
    echo "<hr>";
    */?>
<!-- </body>
</html> -->

<?php
session_start();
// aqui estou declarando a variavel
$usuario_autenticado = false;
     
// aqui estou cadastrando os emails e a senhas para poderem trocar a pagina quando estiver certo
$usuario_cadastrado = [
    ['email' =>  'gabriel@senai.br',
    'senha' => 54321
],
    ['email' => 'aluno@senai.br',
    'senha' => 'abcde'
],
    ['email' => 'suporte@senai.br',
    'senha' => '1a2b3c']
];
// aqui faça a altenticaçao do codigo, se o email e a senha forem corretos a pagina vai ser trocada, se nao a pagina nao vai abrir
foreach ($usuario_cadastrado as $user){
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}
// aqui e o que vai ser mostrado se a pagina for ou nao autenticada, se senha e email estiver certo, ira mostar usuario autenticado com sucesso se nao a pagina ou vai voltar para o painel de login ou vai aparecer usuario ou senha incorreta
if ($usuario_autenticado == true){
    $_SESSION['autenticado'] = 'SIM';
    echo "usuario autenticado com sucesso";
    header('Lcation: painel.php');
}else {
    $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
}
?>