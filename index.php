<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Magra&display=swap" rel="stylesheet">
    <title>Nativos Streetwear</title>
</head>

<body>
    <div id="container">
        <header>

            <!-- START OF HEADER FIRST LINE -->
            <div id="first-line">
                <!-- <a href="#" id="sub-menu"><img src="./content/IconNavbar.png" alt=""></a> -->

                <!-- start of dropdown -->
                <div class="dropdown sub-menu">
                    <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="./content/IconNavbar.png" alt="">
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item blocked" href="#">Lorem, ipsum dolor.</a>
                        <a class="dropdown-item blocked" href="#">Lorem, ipsum dolor.</a>
                        <a class="dropdown-item blocked" href="#">Lorem, ipsum dolor.</a>
                        <a class="dropdown-item blocked" href="#">Lorem, ipsum dolor.</a>
                        <a class="dropdown-item blocked" href="#">Lorem, ipsum dolor.</a>
                        <a class="dropdown-item blocked" href="#">Lorem, ipsum dolor.</a>
                        <a class="dropdown-item blocked" href="#">Lorem, ipsum dolor.</a>
                        <a class="dropdown-item blocked" href="#">Lorem, ipsum dolor.</a>
                        <a class="dropdown-item blocked" href="#">Lorem, ipsum dolor.</a>
                        <a class="dropdown-item blocked" href="#">Lorem, ipsum dolor.</a>
                        <a class="dropdown-item blocked" href="#" style="font-weight: bold; color: red;">Promoções</a>
                    </div>
                </div>
                <!-- end of dropdown -->

                <a href="#" id="logo">
                    <p>Nativos Streetwear</p>
                </a>
                <div id="persona">
                    <div id="icons">
                        <a href="#">
                            <!-- <img src="./content/Favorito.png" alt="" id="fav-icon"> -->
                            <i class="fas fa-heart blocked"></i>
                        </a>
                        <a href="#">
                            <!-- <img src="./content/Compra.png" alt="" id="bag-icon"> -->
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <a href="./pags/normal_user_page.php">
                            <!-- <img src="./content/Usuario.png" alt="" id="user-icon"> -->
                            <i class="fas fa-user"></i>
                        </a>
                    </div>
                    <br>
                    <div id="text-persona">
                        <a href="#" class="blocked">Lorem
                            Lorem ipsum dolor sit amet.</a>
                        <a href="#" class="blocked">ipsum dolor sit.</a>
                    </div>
                </div>
            </div>
            <!-- END OF HEADER FIRST LINE -->

            <!-- START OF HEADER SECOND LINE -->
            <div id="second-line">
                <!-- Header Nav -->
                <nav id="header-navigation">

                    <ul>
                        <li><a href="./index.php">Início</a></li>
                        <li><a href="./pags/products_page.php">Mais Vendidos</a></li>
                        <li><a href="./pags/products_page.php">Promoções</a></li>
                        <li><a href="./pags/products_page.php">Destaques</a></li>
                    </ul>


                </nav>

                <!-- Header Nav -->
            </div>
            <!-- END OF HEADER SECOND LINE -->

        </header>

        <!-- START OF MAIN CONTENT - COVER PAGE -->
        <div id="main-content">
            <input type="search" name="" id="search" placeholder="Encontre um produto..." class="blocked">

            <div id="main-btn">
                <a href="./pags/products_page.php">Novidades</a>
                <a href="./pags/products_page.php">Em Alta</a>
                <a href="#" id="different-btn" class="blocked">Monte seu estilo</a>
            </div>

            <div id="cover-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, ea iusto. Ullam atque non possimus nulla expedita at accusamus laborum consequuntur, repellat quos, asperiores nihil pariatur porro! Molestiae, velit eos! Lorem, ipsum dolor.</p>
            </div>

        </div>
        <!-- END OF MAIN CONTENT - COVER PAGE -->

        <!-- START OF FRAME 1 -->
        <div id="frame-1">
            <h2>Últimas Coleções</h2>

            <div id="show-1">

                <div class="show-box show-box-1">
                    <p>Nome da Coleção nº01</p>
                    <a href="#" class="blocked">Veja mais</a>
                </div>

                <div class="show-box show-box-2">
                    <p>Nome da Coleção nº02</p>
                    <a href="#" class="blocked">Veja mais</a>
                </div>

                <div class="show-box show-box-3">
                    <p>Nome da Coleção nº03</p>
                    <a href="#" class="blocked">Veja mais</a>
                </div>

            </div>
        </div>
        <!-- END OF FRAME 1 -->

        <!-- START OF FRAME 2 -->
        <div id="frame-2">
            <div class="division"></div>
            <div id="light"></div>

            <div class="text-frame">
                <h3>Estilo? <br> Temos de sobra!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, nam autem. Debitis ipsa a doloremque repellendus quam perferendis officia accusantium, earum quia exercitationem. Quia quibusdam quisquam ullam sint dolores exercitationem praesentium, quaerat necessitatibus vero commodi illum! Architecto obcaecati eius pariatur nihil, in dicta non cumque expedita, iure, voluptatibus facere molestiae.</p>
                <a href="#" class="blocked"><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong></a>
            </div>

            <div id="show-2">
                <!-- <img src="./content/logopreta.png" alt="nativos"> -->
                <div class="grade-img grade-img-1"><img src="https://img.freepik.com/fotos-gratis/vista-frontal-de-adolescente-com-skate-e-copie-o-espaco_23-2148758453.jpg?size=626&ext=jpg&ga=GA1.2.633426756.1682978295&semt=robertav1_2_sidr" alt=""></div>
                <div class="grade-img grade-img-2"><img src="https://img.freepik.com/fotos-gratis/par-jovem-posar-enquanto-homem-chapeu-tocante_23-2148134009.jpg?size=626&ext=jpg&ga=GA1.2.633426756.1682978295&semt=robertav1_2_sidr" alt=""></div>
                <div class="grade-img grade-img-3"><img src="https://img.freepik.com/fotos-gratis/menina-de-tiro-medio-posando-no-skate_23-2148499566.jpg?size=626&ext=jpg&ga=GA1.1.633426756.1682978295&semt=robertav1_2_sidr" alt=""></div>
                <div class="grade-img grade-img-4"><img src="https://img.freepik.com/fotos-gratis/menino-ouvindo-musica-com-fones-de-ouvido_23-2148645004.jpg?size=626&ext=jpg&ga=GA1.1.633426756.1682978295&semt=robertav1_2_sidr" alt=""></div>
            </div>
            <div class="division-2" style="clear:both"></div>
        </div>
        <!-- END OF FRAME 2 -->

        <!-- START OF FRAME 3 -->
        <div id="frame-3">

            <!-- START OF LEFT BOX -->
            <div class="form">
                <h3>
                    <span class="line-1">Inscreva-se agora</span>
                    <span class="line-2">na nossa Newsletter!</span>
                </h3>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt placeat ullam odit nam quo ea dolorem, distinctio officia voluptas id nobis debitis similique, maxime ipsum labore laborum totam provident nulla sequi quam fugiat. Rem deserunt fugit repellendus quae fugiat! Porro!
                </p>

                <form action="">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" id="name" placeholder="Digite o seu nome">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Digite o seu email">
                    <input type="submit" value="Inscrever">
                </form>
            </div>
            <!-- END OF LEFT BOX -->

            <!-- START OF RIGHT BOX -->
            <div class="box-instagram">
                <div class="content-instagram">

                    <div class="div-logo">
                        <h4>Siga-nos nas redes sociais</h4>
                        <p>E marque a tag <span class="hashtag">#USENATIVOS</span>!</p>
                    </div>


                    <!-- start carousel -->
                    <div class="div-carousel">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./content/exemplo-3x4.png" class="d-block w-100" alt="">

                                    <div class="carousel-caption">
                                        <p>@perfil_pessoa</p>
                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <img src="./content/exemplo-3x4.png" class="d-block w-100" alt="">

                                    <div class="carousel-caption">
                                        <p>@perfil_pessoa</p>
                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <img src="./content/exemplo-3x4.png" class="d-block w-100" alt="">

                                    <div class="carousel-caption">
                                        <p>@perfil_pessoa</p>
                                    </div>

                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                        <div style="clear: both;"></div>
                    </div>
                    <!-- end of carousel -->

                    <div class="perfil-instagram">
                        <a href="https://instagram.com/use.nativos?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fab fa-instagram"></i></i> use.nativos</a>
                    </div>

                </div>


            </div>
            <!-- END OF RIGHT BOX -->

        </div>
        <!-- END OF FRAME 3 -->


    </div>

    <!-- START OF FOOTER -->
    <footer>
        <div class="logo-footer">
            <p>Porto Seguro - Bahia, Brasil</p>
            <p>Rua Lorem ipsum dolor sit amet. nª 5</p>
            <p>45810-000</p>
        </div>

    </footer>



    <!-- SCRIPTS SECTION -->
    <!-- <script src="./scripts/popper.js"></script> -->

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>