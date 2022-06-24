<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos - FAQ</title>
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
                            <a href="https://discord.com/" class="dropdown-item">Discord</a>
                            <a href="https://twitter.com/" class="dropdown-item">Twiter</a>
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

    <div class="container">

        <div class="row">
            <div class="col-12 text-center my-3">
                <h1 class="display-1">Ajuda e Documentação</h1>
                <h1 class="display-4">Perguntas frequentes</h1>
            </div>
        </div>
    </div>

    <!--Scrollspy-->
    <div class="container">

    <!--Primeira linha contem um texto de boas vindas-->
    <div class="row">
        <div class="col-12 text-center my-5">
            <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            </p>
        </div>
    </div>

    <!--Segunda linha do contem o navbar e o conteudo do scrollspy-->
    <div class="row">

        <!--Àrea com o navbar do scrollpse-->
        <div class="col-3">
            <nav class="navbar navbar-light bg-light" id="navbarScrollpsy">
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link" href="#item1">Pergunta 1</a>
                    <a class="nav-link" href="#item2">Pergunta 2</a>
                    <a class="nav-link" href="#item3">Pergunta 3</a>
                    <a class="nav-link" href="#item4">Pergunta 4</a>
                    <a class="nav-link" href="#item5">Pergunta 5</a>
                    <nav class="navbar">
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ml-2" href="#item5-1">Pergunta 5.1</a>
                            <a class="nav-link ml-2" href="#item5-2">Pergunta 5.2</a>
                            <a class="nav-link ml-2" href="#item5-3">Pergunta 5.3</a>
                        </nav>
                    </nav>
                </nav>
            </nav>
        </div>

        <!--Area com o conteudo "espiado"-->
        <div class="col-9">
            <div class="scrollspyhome text-justify p-3 scroll" data-spy="scroll" data-target="#navbarScrollspy" data-offset="0">
                
                <h1 id="item1">Pergunta 1</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia metus placerat massa aliquet fermentum. Vivamus venenatis est at aliquam facilisis. Cras auctor justo et justo gravida vulputate. Nam commodo, nisi non iaculis dignissim, est lorem semper dolor, vel condimentum lacus orci et libero. Morbi ullamcorper et dui vitae elementum. Morbi at diam sed ante feugiat scelerisque. Cras accumsan tincidunt tellus, nec posuere ipsum tristique id. Nam ac viverra sapien. Sed hendrerit metus vel elit dapibus venenatis. In ultricies id mauris ac tempor. Duis non auctor eros. Integer consectetur metus a neque consequat gravida. In hac habitasse platea dictumst. Donec a congue ex. Ut id elit facilisis, pellentesque nibh a, euismod ex. Suspendisse ut semper orci.
                </p>

                <h1 id="item2">Pergunta 2</h1>
                <p>
                    Duis aliquet ullamcorper odio ac luctus. In suscipit lectus tellus, eu faucibus nulla ultrices cursus. Integer rutrum, augue lobortis viverra lobortis, magna ex venenatis eros, eu malesuada odio orci in lorem. Quisque tortor ipsum, convallis vitae scelerisque at, consectetur quis tellus. Praesent ultrices vulputate odio, in fringilla est rutrum nec. Morbi pulvinar, libero vel consectetur congue, mauris nulla accumsan metus, quis vehicula lacus lectus sit amet velit. Donec nec ante at mauris ullamcorper porttitor quis eu eros. Curabitur diam urna, scelerisque ut enim at, semper tempor leo.
                </p>

                <h1 id="item3">Pergunta 3</h1>
                <p>
                    Maecenas egestas imperdiet diam, et sagittis massa placerat id. Sed purus mauris, sodales vitae mauris eget, pulvinar sodales lectus. Aliquam ultricies sollicitudin commodo. Integer magna mi, interdum vel quam id, sagittis aliquet felis. Cras blandit in diam at molestie. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed vitae lectus vel risus finibus consectetur. Pellentesque viverra tincidunt turpis, eu efficitur ligula gravida quis. Quisque condimentum efficitur tincidunt. Phasellus eget tincidunt lacus. Quisque molestie quam diam, a viverra neque vehicula a. Quisque fermentum ligula sit amet nisi semper congue. Nulla vel quam metus. Cras sollicitudin id justo eget ullamcorper. In nunc lorem, consectetur eget mi at, lacinia maximus augue.
                </p>

                <h1 id="item4">Pergunta 4</h1>
                <p>
                    Fusce aliquam facilisis urna, eget auctor ligula accumsan eu. In ut commodo massa. Vivamus fermentum pretium nisi, at sagittis risus condimentum a. Cras imperdiet quam orci, vitae lacinia tellus auctor sit amet. Etiam venenatis vulputate felis sed suscipit. Morbi in volutpat ipsum. Mauris luctus lacus vitae arcu convallis varius ac eu felis. Nulla eu arcu at velit molestie vestibulum id sed ipsum. Cras interdum vitae felis in tempus. Sed sodales dolor sagittis diam viverra, vel pulvinar leo commodo. Donec facilisis metus risus, non malesuada lacus tristique vel. In ac nisi sed risus cursus iaculis. Pellentesque nec quam sed velit dapibus vehicula et a lacus. Aliquam luctus sed ex egestas laoreet.
                </p>

                <h1 id="item5">Pergunta 5</h1>
                <p>
                    Nulla ut libero eu tellus maximus hendrerit. Quisque fermentum odio eu urna viverra laoreet. Donec finibus, nisl vel rutrum sodales, eros quam blandit metus, id lacinia neque est vel tellus. 
                </p>

                <div class="ml-4">
                    <h2 id="item5-1">Pergunta 5.1</h2>
                    <p>
                        Donec consequat est in lacus ultrices dapibus. Sed quis turpis sed tellus tincidunt sodales. Sed lobortis tincidunt turpis, at euismod tellus cursus eu. 
                    </p>

                    <h2 id="item5-2">Pergunta 5.2</h2>
                    <p>
                        Sed a mi et lectus pharetra tristique at et mi. Etiam scelerisque imperdiet consequat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                    </p>

                    <h2 id="item5-3">Pergunta 5.3</h2>
                    <p>
                        Vivamus congue nisi vitae luctus malesuada. Phasellus pharetra mi eget ipsum ornare, a porttitor mauris suscipit.
                    </p>
                </div>

            </div>
        </div><!--Area com o conteudo "espiado"-->
    </div><!--Segunda linha do contem o navbar e o conteudo do scrollspy-->
        
    </div><!--Scrollspy-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/myscripts.js"></script>


</body>
</html>