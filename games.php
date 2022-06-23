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
    <div class="row">

        <?php
            require('back-end\helpers\db-connect.php');

            try{

                $stmt = $conn->prepare("SELECT * FROM games");
                $stmt->execute();

                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                //print_r($result);

            } catch(PDOException $e) {

                echo "Error in searching product on DataBase: " . $e->getMessage();

            }
        ?>

        <?php foreach($result as $product){ ?>

            <!-- Cards -->
            <div class="card col-3">

                <!-- Ícone de editar/deletar -->
                <div class="container d-flex">

                    <a class="btn btn-dark" href="back-end/delete-game.php?id=<?php echo $product['id']; ?>">
                        <img src="img/icon-trash.svg" width="15px" height="15px">
                    </a>

                    <div type="button" data-toggle="modal" data-target="#openModalEditar" class="btn btn-dark" onclick="                 
                    editGame(
                    <?php echo $product['id']; ?>,
                    '<?php echo $product['nome']; ?>',
                    '<?php echo $product['desenvolvedora']; ?>',
                    '<?php echo $product['foto']; ?>',
                    '<?php echo $product['descricao']; ?>',
                    '<?php echo $product['preco']; ?>'
                    )">
                        <img src="img/icon-edit.svg" width="15px" height="15px">
                    </div>

                </div>

                <!-- Card do jogo -->
                <img class="card-img-top" src="<?php echo $product['foto']; ?>">
                <div class="card-body">
                    <h6 class="card-title text-center"><?php echo $product['nome']; ?></h6>
                    <p class="card-text small"><?php echo substr($product['descricao'], 0, 100); ?>...</p>
                </div>
                <ul>
                    <li>Por: <?php echo $product['preco']; ?></li>
                </ul>
                <div class="justify-content-end p-2">
                    <a class="card-link" href="#">
                    <button class="btn btn-white btn-warning">Detalhes...</button>
                    </a>
                </div>
            </div>

        <?php } ?>

    </div>
    </section>
    
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
                            <label>Nome do Jogo:</label><br>
                            <input class="full" type="text" placeholder="Nome do Jogo..." name="nome"/><br>

                            <label>Desenvolvedora:</label><br>
                            <input class="full" type="text" placeholder="Desenvolvedora do jogo..." name="desenvolvedora"/><br>

                            <label>Foto (url):</label><br>
                            <input class="full" type="text" placeholder="Foto em Url..." name="foto"/><br>

                            <label>Descrição:</label><br>
                            <input class="full" type="text" placeholder="Descrição do Jogo..." name="descricao"/><br>

                            <label>Preço: </label><br>
                            <input type="text" placeholder="R$ 99,99..." name="preco"/><br>

                            <input type="submit" class="btn btn-primary" value="Adicionar Produto" />
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </div>

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

                            <label>Nome do Jogo:</label><br>
                            <input class="full" type="text" placeholder="Nome do jogo..." name="nome" /><br>

                            <label>Desenvolvedora:</label><br>
                            <input class="full" type="text" placeholder="URL da foto..." name="desenvolvedora" /><br>

                            <label>Foto (url):</label><br>
                            <input class="full" type="text" placeholder="Título do Produto..." name="foto" /><br>
                            
                            <label>Descrição:</label><br>
                            <input type="text" placeholder="R$ 99,00..." name="descricao" /><br>

                            <label>Preço:</label><br>
                            <input type="text" placeholder="R$ 99,00..." name="preco" /><br>
                            
                            <input type="submit" value="Editar Produto" />
                        </form>
                    </main>
                </div>

            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/myscripts.js"></script>
    
</body>
</html>