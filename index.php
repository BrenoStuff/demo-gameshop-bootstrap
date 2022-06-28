<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos - HOME</title>
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="fontawesome/css/all.css">
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

    <!-- row das colunas -->
    <div class="row">

        <!-- Primeira div (esquerda)-->
        <div class="col-lg-9">

            <div class="carousel slide" id="carouselHome" data-ride="carousel">
                <!--bloco que irá sustentar as imagens e textos-->
                <div class="carousel-inner">
        
                    <div class="carousel-item active">
                        <img src="img/trilha-sonora.jpg" class="img-fluid d-block">
                        <div class="carousel-caption">
                            <h3>Titulo 1</h3>
                            <p class="d-none d-sm-block"> Descrição 1</p>
                        </div>
                    </div>
                    
                    <div class="carousel-item">
                        <img src="img/assassins creed.webp" class="img-fluid d-block">
                    <div class="carousel-caption">
                        <h3>Titulo 2</h3>
                        <p class="d-none d-sm-block">Descrição 2</p>
                    </div>
                    </div>
        
                    <div class="carousel-item">
                        <img src="img/valorant.jpg" class="img-fluid d-block">
                        <div class="carousel-caption">
                            <h3>Titulo 3</h3>
                            <p class="d-nome d-sm-block">Descrição 3</p>
        
                        </div>
                    </div>
                </div>

                <!--link com os controles dos slides-->
                <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Anterior</span>
                </a>
        
        
                <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Próximo</span>
                </a>
        
                <!--listas com os indicadores do slide corrente-->
                <ol class="carousel-indicators">
                    <li class="active" data-target="#carouselHome" data-slide-to="0"></li>
                    <li data-target="#carouselHome" data-slide-to="1"></li>
                    <li data-target="#carouselHome" data-slide-to="2"></li>
                </ol>
            </div>

            <div class="row">
                <div class="col-12 text-center my-5">
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>
                </div>
            </div>

            <!-- Jumbotron -->
            <div class="jumbotron">
                <h1 class="display-4">Quem nós somos?</h1>

                <div class="row">
                    <div class="col-6">
                    <p class="lead">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                    </div>

                    <div class="col-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UPYYHTjw-fY"></iframe>
                        </div>
                    </div>
                </div>

                <hr class="my-4">
                <p class="lead">
                    <a class="btn btn-warning btn-lg" href="faq.php" role="button">FAQ</a>
                </p>
            </div>

        </div>
    
        <!-- COLUNA DIREITA-->
        <div class="col-lg-3 d-none d-lg-block">

            <div class="row">
                <div class="col-12 text-center my-3">
                    <h3>ÚLTIMOS CADASTRADOS</h3>
                </div>
            </div>

            <!--Cards-->
            <div class="container">

                <?php
                    require('back-end\helpers\db-connect.php');

                    try{

                        $stmt = $conn->prepare("SELECT * FROM games ORDER BY id DESC LIMIT 0, 3");
                        $stmt->execute();

                        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        //print_r($result);

                    } catch(PDOException $e) {

                        echo "Error in searching product on DataBase: " . $e->getMessage();

                    }
                ?>

                <?php foreach($result as $game){ ?>

                    <!-- Cards -->
                    <div class="card">
                        
                        <!-- Card do jogo -->
                        <img class="card-img-top" src="<?php echo $game['foto']; ?>">
                        <div class="card-body">
                            <h6 class="card-title text-center"><?php echo $game['nome']; ?></h6>
                            <p class="card-text small"><?php echo substr($game['descricao'], 0, 100); ?>...</p>
                        </div>
                        <ul>
                            <li>Por: <?php echo $game['preco']; ?></li>
                        </ul>
                        <div class="justify-content-end p-2">
                            <a class="card-link btn btn-white btn-warning" href="listagem.php?id=<?php echo $game['id']; ?>">
                                Detalhes...
                            </a>
                        </div>
                    </div><br>

                <?php } ?>

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