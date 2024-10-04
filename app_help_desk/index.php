<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">

    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <img src="./ricardoredondo.jfif" alt="" width="30" height="30">
                App Help Desk
      </a>
    </nav>
    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="painel.php" method="post">
                  <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="E-mail"required>
                </div>
                <div class="form-group">
                  <input type="password" name="senha"class="form-control" placeholder="Senha"required>
                </div>
                <?php
                if(isset($_GET['login']) && $_GET['login'] == 'erro'){;
                ?>
                <div class="text-danger">faça o login primeiro</div>
                <?php } ?>

                <?php
                if(isset($_GET['login']) && $_GET['login'] == 'erro'){
                ?>
                <div class="text-danger">usuario ou senha incorretos</div>
                <?php } ?>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>