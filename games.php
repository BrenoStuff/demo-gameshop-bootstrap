<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos - JOGOS</title>
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

    <header class="container p-4">
        <h1 class="display-4 text-center">Jogos</h1>
        <div class="d-flex flex-row-reverse">
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#openModalAdicionar">Adicionar</button>
        </div>
    </header>

    <section class="container">
    <div class="row" style="padding-bottom: 50px;">

        <?php
            require('back-end\helpers\db-connect.php');

            try{

                $stmt = $conn->prepare("SELECT * FROM games");
                $stmt->execute();

                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                //print_r($result);

            } catch(PDOException $e) {

                echo "Error in searching game on DataBase: " . $e->getMessage();

            }
        ?>

        <?php foreach($result as $game){ ?>

            <!-- Cards -->
            <div class="card col-3" style="padding-bottom: 20px;">

                <!-- Ícone de editar/deletar -->
                <div class="container d-flex p-2">

                    <!-- DELETAR -->
                    <a class="btn bg-danger btn-dark col-6" href="back-end/delete-game.php?id=<?php echo $game['id']; ?>">
                        <img src="img/icon-trash.svg" width="15px" height="15px">
                    </a>

                    <!-- EDITAR -->
                    <div class="btn bg-primary btn-dark col-6" type="button" data-toggle="modal" data-target="#openModalEditar"  onclick="                 
                    editGame(
                    <?php echo $game['id']; ?>,
                    '<?php echo $game['nome']; ?>',
                    '<?php echo $game['desenvolvedora']; ?>',
                    '<?php echo $game['foto']; ?>',
                    '<?php echo $game['descricao']; ?>',
                    '<?php echo $game['preco']; ?>'
                    )">
                        <img src="img/icon-edit.svg" width="15px" height="15px">
                    </div>

                </div>

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
            </div>

        <?php } ?>

    </div>
    </section>
    

    <!-- MODAL DE ADICIONAR O JOGO -->
    <div class="modal fade" id="openModalAdicionar" tabindex="-1" role="dialog" aria-labelledby="openModalAdicionar" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Adicionar Jogo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <main>
                        <form method="POST" action="back-end\insert-game.php">

                            <div class="form-group" style="display: unset;">
                                <label>Nome do Jogo:</label><br>
                                <input class="form-control" type="text" placeholder="Nome do Jogo..." name="nome"/><br>
                            </div>

                            <div class="form-group" style="display: unset;">
                                <label>Desenvolvedora:</label><br>
                                <input class="form-control" type="text" placeholder="Desenvolvedora do jogo..." name="desenvolvedora"/><br>
                            </div>

                            <div class="form-group" style="display: unset;">
                                <label>Foto (url):</label><br>
                                <input class="form-control" type="text" placeholder="Foto em URL..." name="foto"/><br>
                            </div>

                            <div class="form-group" style="display: unset;">
                                <label>Descrição:</label><br>
                                <input class="form-control" type="text" placeholder="Descrição do Jogo..." name="descricao"/><br>
                            </div>


                            <div class="form-group" style="display: unset;">
                                <label>Preço: </label><br>
                                <input class="form-control" type="text" placeholder="R$ 99,99..." name="preco"/><br>
                            </div>

                            <input type="submit" class="btn btn-primary" value="Inserir Jogo" />
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </div>
    
    <!-- MODAL DE EDITAR O JOGO -->
    <div class="modal fade" id="openModalEditar" tabindex="-1" role="dialog" aria-labelledby="openModalEditar" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Jogo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <main>
                        <form method="POST" action="back-end/edit-game.php">
                            <input type="hidden" name="id" value=""/>

                            <div class="form-group" style="display: unset;">
                                <label for="nomeGame">Nome do Jogo:</label><br>
                                <input class="form-control" id=nomeGame type="text" placeholder="Nome do jogo..." name="nome" /><br>
                            </div>

                            <div class="form-group" style="display: unset;">
                                <label>Desenvolvedora:</label><br>
                                <input class="form-control" type="text" placeholder="Desenvolvedora do jogo..." name="desenvolvedora" /><br>
                            </div>
                            
                            <div class="form-group" style="display: unset;">
                                <label>Foto (url):</label><br>
                                <input class="form-control" type="text" placeholder="Foto em URL..." name="foto" /><br>
                            </div>
                            
                            <div class="form-group" style="display: unset;">
                                <label>Descrição:</label><br>
                                <input class="form-control" type="text" placeholder="Descrição do Jogo..." name="descricao" /><br>
                            </div>

                            <div class="form-group" style="display: unset;">
                                <label>Preço:</label><br>
                                <input class="form-control" type="text" placeholder="R$ 99,00..." name="preco" /><br>
                            </div>
                            
                            <input class="btn bg-primary btn-dark" type="submit" value="Editar Jogo" />
                        </form>
                    </main>
                </div>

            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="bg-info text-center text-white">

        <!-- Newseller -->
        <div class="container p-4">
            <!-- Section: Form -->
            <section class="">
            <form action="">
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                <!--Grid column-->
                <div class="col-auto">
                    <p class="pt-2">
                    <strong>Inscreva-se para o nosso newsletter</strong>
                    </p>
                    </div>
                    <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-5 col-12">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                    <input type="email" id="form5Example27" class="form-control" />
                    <label class="form-label" for="form5Example27">Endereço de email</label>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-auto">
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-warning mb-4">
                    Inscrever-se
                    </button>
                </div>
                <!--Grid column-->
                </div>
                <!--Grid row-->
            </form>
            </section>
            <!-- Section: Form -->
        </div>
        <!-- Grid container -->

        <!-- Redes Sociais -->
        <div class="container pb-0">

            <!-- Section: Social media -->
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
            <!-- Section: Social media -->
        </div>
        

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="#"> www.jogos.com </a>
        </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/myscripts.js"></script>
    
</body>
</html>