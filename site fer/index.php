

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style-php.css">
    <title>Padaria Três Irmãos</title>
</head>
<body>


<!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <a class="navbar-brand pl-4" href="#"><img src="../site fer/imagem/Logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <p class="nav" href="#">ÁREA DO ADMINISTRADOR</p>
                </li>
            </ul>
        </div>
    </nav>

<!-- FORMULÁRIO -->
    <section>
        <div class="container-fluid telatoda">
            <form class="log" action="login.php" method="POST">
                <div class="row">   
                    <div class="form-group col-md-8">
                        <input type="text" name="nome" class="form-control" placeholder="Nome:">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-8">
                        <input type="password" name="senha" class="form-control"  placeholder="Senha:">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 botao">
                        <input type="submit" name="boton" class="btn btn-light col-md-2"  value="Entrar" placeholfer="Entrar">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <a class="sair" href="file:///C:/xampp/htdocs/site%20fer/index.html#Home">Sair</a>
    </footer>  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   

</body>
</html>

