<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos - CADASTRO</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>

    <!--Navbar do site-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info" >

        <div class="container">

            <a class="navbar-brand" href="index.php"><i class="fa-solid fa-house"></i></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">

            <!--Itens do navbar-->
            <ul class="navbar-nav">
                <li class="nav-item"><a href="games.php" class="nav-link">Jogos</a></li>
                <li class="nav-item"><a href="sales.php" class="nav-link">Promoções</a></li>
                <li class="nav-item"><a href="events.php" class="nav-link">Eventos</a></li>
                <li class="nav-item"><a href="faq.php" class="nav-link">FAQ</a></li>
            </ul>

            <!--Dropdown-->
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navDrop">
                        Social...
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Discord</a>
                        <a href="#" class="dropdown-item">Twiter</a>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="cadastro.php" class="nav-link">
                        <button class="btn btn-white bg-warning" type="submit">
                            <i class="fa-regular fa-user"></i>
                        </button>
                    </a>
                </li>
            </ul>

            <!--Formulario de pesquisa-->
            <form class="form-inline">
                <input class="form-control ml-lgl-5 mr-2" type="search" placeholder="Buscar...">
                <button class="btn" type="submit">
                    <i class="fa-solid fa-magnifying-glass" style="color: white;"></i>
                    CONTA
                </button>
            </form>

        </div>
    </nav>
    
    <div class="row">

    <!-- COL ESQUERDA -->
    <div class="col-6">

        <div class="container">

            <div class="row">
                <div class="col-12 text-center my-3">
                    <h1 class="display-4">Cadastrar</h1>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-11">
                <form>

                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="inputNomeCompleto">Nome Completo</label>
                            <input class="form-control" type="text" id="inputNomeCompleto" placeholder="ex. Breno Machado Soares dos Santos">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="inputEmail"> E-Mail</label>
                            <input class="form-control" type="text" id="inputEmail" placeholder="ex. Breno@exemplo.com">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="inputEndereco">Endereço</label>
                            <input class="form-control" type="text" id="inputEndereco" placeholder="ex. Rua Maria Pereira de Souza, 626 - Perequê Mirim">
                        </div>
                        <div class="form-group col-sm-2">
                            <label for="inputCep">CEP</label>
                            <input class="form-control" type="text" id="inputCep" placeholder="ex. 19778-407">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="inputCidade">Cidade</label>
                            <input class="form-control" type="text" id="inputCidade" placeholder="ex. Caraguatatuba">
                        </div>
                        <div class="form-group col-sm-1">
                            <label for="inputUF">UF</label>
                            <select class="form-control" id="inputUF">
                                <option>AC</option>
                                <option>...</option>
                                <option selected>SP</option>
                                <option>...</option>
                                <option>EX</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="inputExperiencia">Formação e Experiência</label>
                            <textarea class="form-control" id="inputExperiencia" rows="7" placeholder="ex. Técnico em Informática para a Internet. Trabalhei com as linguagens..."></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-6">
                            <button class="btn btn-primary" type="submit">Registrar</button>
                        </div>
                        <div class="form-group col-6 d-flex justify-content-end">
                            <div class="form-check-inline">
                                <label class="form-check-label text-muted">
                                    <input class="form-check-input" type="checkbox"> Receber avisos por e-mail
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- COL DIREITA -->
    <div class="col-6">

        <div class="container">

            <div class="row">
                <div class="col-12 text-center my-3">
                    <h1 class="display-4">Fazer login</h1>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-11">
                <form>

                    <div class="form-row">
                            <label for="inputEmail">Email:</label>
                            <input class="form-control" type="text" id="inputEmail" placeholder="Breno@exem.com">
                    </div><br>

                    <div class="form-row">
                            <label for="inputSenha">Senha:</label>
                            <input class="form-control" type="text" id="inputSenha" placeholder="Batatinha">
                    </div><br>

                    <div class="form-row">
                        <div class="form-group col-6">
                            <button class="btn btn-warning" type="submit">Logar</button>
                        </div>
                        <div class="form-group col-6 d-flex justify-content-end">
                            <div class="form-check-inline">
                                <label class="form-check-label text-muted">
                                    <input class="form-check-input" type="checkbox"> Deixar sua conta logada
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/myscripts.js"></script>

</body>
</html>