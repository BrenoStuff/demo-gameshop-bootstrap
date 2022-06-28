<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos - CADASTRO</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
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
                            <a href="https://discord.com/" target="_blank" class="dropdown-item">Discord</a>
                            <a href="https://www.instagram.com/" target="_blank" class="dropdown-item">Instagram</a>
                            <a href="https://twitter.com/" target="_blank" class="dropdown-item">Twiter</a>
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="cadastro.php" class="nav-link">
                            <button class="btn btn-white bg-warning" type="submit">
                                <i class="fa-regular fa-user"></i>
                                CONTA
                            </button>
                        </a>
                    </li>
                </ul>

                <!--Formulario de pesquisa-->
                <form class="form-inline">
                    <input class="form-control ml-lgl-5 mr-2" type="search" placeholder="Buscar...">
                    <button class="btn" type="submit">
                        <i class="fa-solid fa-magnifying-glass" style="color: white;"></i>
                    </button>
                </form>

            </div>
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
                                <label for="inputNomeCompleto">Nome</label>
                                <input class="form-control" type="text" id="inputNomeCompleto" placeholder="ex. Breno Machado Soares dos Santos">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="inputEmail"> E-Mail</label>
                                <input class="form-control" type="text" id="inputEmail" placeholder="ex. Breno@exemplo.com">
                            </div>
                        </div>

                        <div class="form-row">
                                <label for="inputSenha">Senha:</label>
                                <input class="form-control" type="text" id="inputSenha" placeholder="Batatinha">
                        </div><br>

                        <div class="form-row">
                            <div class="form-group col-6">
                                <button class="btn btn-warning" type="submit">Registrar</button>
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
                        <h1 class="display-4">Entrar</h1>
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
                                <button class="btn btn-warning" type="submit">Entrar</button>
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

    <!-- Rodapé -->
    <footer class="bg-info text-center text-white">

        <!-- Newseller -->
        <div class="container p-4">

            <!--Grid row-->
            <div class="row d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-auto">
                    <p class="pt-2">
                    <strong>Inscreva-se para o nosso newsletter</strong>
                    </p>
                </div>

                <!--Grid column-->
                <div class="col-md-5 col-12">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                    <input type="email" id="form5Example27" class="form-control" />
                    <label class="form-label" for="form5Example27">Endereço de email</label>
                    </div>
                </div>

                <!--Grid column-->
                <div class="col-auto">
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-warning mb-4">
                    Inscrever-se
                    </button>
                </div>

            </div>

        </div>

        <!-- Redes Sociais -->
        <section class="mb-4">

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-twitter"></i>
            </a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="fab fa-instagram"></i>
            </a>

            <!-- Discord -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="fa-brands fa-discord"></i>
            </a>

        </section>

        <div class="text-center p-3" style="display: block; background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="#"> www.jogos.com </a>
        </div>

    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/myscripts.js"></script>

</body>
</html>