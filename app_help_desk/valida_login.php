<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<pre>";
    print_r($_POST);
    echo "<?pre>";
    echo "<hr>";

    echo "E-mail: ";
    echo $_POST['email'];
    echo"<br>";
    echo "Senha: ";
    echo $_POST['senha'];
    echo "<hr>";
    ?>
</body>
</html>