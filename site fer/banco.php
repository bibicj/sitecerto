<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style-php.css">
    <title>Document</title>
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
                    <p class="nav2" href="#">CADASTRO</p>
                </li>
            </ul>
        </div>
    </nav>

    <section id="fundo">
        <div class="row container-fluid">
            <form>
                <div class="row">
                    <div class="form-row col-sm-12"></div>
                        <div class="col-sm-6">
                            <input type="text" name= "nome" class="form-control nome" placeholder="Nome">
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="col-sm-6">
                            <input type="text"vname= "telefone" class="form-control telefone" placeholder="Telefone">
                        </div>
                    </div>        
                    <div class="form-row">
                        <div class="col-sm-12">
                            <input type="email" name= "email" class="form-control email" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12">
                            <textarea name= "texto"class="form-control mensagem" placeholder="Preferências"></textarea>
                        </div> 
                    </div>
                    <div class="form-row">
                        <div class="col-sm-2">
                            <input type="submit" name= "boton2" class="form-control botao2" value="CADASTRAR" placeholder="CADASTRAR">
                        </div>
                    </div>
                </div>
            </form>
    </section>
    
    <footer>
        <a class="sair" href="file:///C:/xampp/htdocs/site%20fer/index.html#Home">Sair</a>
    </footer>  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>