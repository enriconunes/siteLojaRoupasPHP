<?php
session_start();

// Ordenaçao de produtos
// default = ordena pelo id de forma crescente
$order_by = 'id';
$order_direction = 'ASC';

if (isset($_GET["order-by"])) {
    if ($_GET["order-by"] == 'defaul') {
        $order_by = 'id';
        $order_direction = 'ASC';
    }
    if ($_GET["order-by"] == 'price_asc') {
        $order_by = 'price';
        $order_direction = 'ASC';
    }
    if ($_GET["order-by"] == 'price_desc') {
        $order_by = 'price';
        $order_direction = 'DESC';
    }
}


// recuperar dados do banco de dados
include_once('config_db.php');
$sql = "SELECT * FROM products ORDER BY $order_by $order_direction";
// result contem o informaçoes da query
$result = $conexao->query($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Magra&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">

    <link href="../css/style.css" rel="stylesheet" />

    <title>Produtos</title>
</head>

<body id="products_page">
    <header>

        <!-- START OF HEADER FIRST LINE -->
        <div id="first-line">
            <!-- <a href="#" id="sub-menu"><img src="./content/IconNavbar.png" alt=""></a> -->

            <!-- start of dropdown -->
            <div class="dropdown sub-menu">
                <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="../content/IconNavbar.png" alt="">
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Lorem, ipsum dolor.</a>
                    <a class="dropdown-item" href="#">Lorem, ipsum dolor.</a>
                    <a class="dropdown-item" href="#">Lorem, ipsum dolor.</a>
                    <a class="dropdown-item" href="#">Lorem, ipsum dolor.</a>
                    <a class="dropdown-item" href="#">Lorem, ipsum dolor.</a>
                    <a class="dropdown-item" href="#">Lorem, ipsum dolor.</a>
                    <a class="dropdown-item" href="#">Lorem, ipsum dolor.</a>
                    <a class="dropdown-item" href="#">Lorem, ipsum dolor.</a>
                    <a class="dropdown-item" href="#">Lorem, ipsum dolor.</a>
                    <a class="dropdown-item" href="#">Lorem, ipsum dolor.</a>
                    <a class="dropdown-item" href="#" style="font-weight: bold; color: red;">Promoções</a>
                </div>
            </div>
            <!-- end of dropdown -->

            <a href="../index.php" id="logo">
                <p>Nativos Streetwear</p>
            </a>
            <div id="persona">
                <div id="icons">
                    <a href="#">
                        <!-- <img src="./content/Favorito.png" alt="" id="fav-icon"> -->
                        <i class="fas fa-heart blocked"></i>
                    </a>
                    <a href="../pags/normal_user_page.php">
                        <!-- <img src="./content/Compra.png" alt="" id="bag-icon"> -->
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <a href="../pags/normal_user_page.php">
                        <!-- <img src="./content/Usuario.png" alt="" id="user-icon"> -->
                        <i class="fas fa-user"></i>
                    </a>
                </div>
                <br>
                <div id="text-persona">
                    <a href="#">Lorem
                        Lorem ipsum dolor sit amet.</a>
                    <a href="#">ipsum dolor sit.</a>
                </div>
            </div>
        </div>
        <!-- END OF HEADER FIRST LINE -->

        <!-- START OF HEADER SECOND LINE -->
        <div id="second-line">
            <!-- Header Nav -->
            <nav id="header-navigation">

                <ul>
                    <li><a href="../index.php">Início</a></li>
                    <li><a href="#">Mais Vendidos</a></li>
                    <li><a href="#">Promoções</a></li>
                    <li><a href="#">Destaques</a></li>
                </ul>


            </nav>

            <!-- Header Nav -->
        </div>
        <!-- END OF HEADER SECOND LINE -->

    </header>

    <!-- Content -->

    <div class="products-section">
        <form action="products_page.php" method="get" class="order-by">
            <label for="order-by">Ordenar por:</label>
            <select name="order-by" id="order-by">
                <option value="default">Padrão</option>
                <option value="price_asc">Preço mais baixo</option>
                <option value="price_desc">Preço mais alto</option>
            </select>
            <button type="submit">Ordenar</button>
        </form>

        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


                    <!-- Ciclo para exibir os produtos do banco de dados atraves da API /products -->
                    <?php

                    // chamar a API de listagem de produtos usando a função file_get_contents()
                    $url = "http://localhost/PHP_MySql_Projetos/nativos_v2/pags/apis.php/products";

                    if (isset($_GET['order-by'])) {
                        $url = "http://localhost/PHP_MySql_Projetos/nativos_v2/pags/apis.php/products" . "?order-by=" . $_GET["order-by"];
                    }

                    $resultado = file_get_contents($url);

                    // Converter o resultado da query JSON em um array
                    $dados = json_decode($resultado, true);

                    foreach ($dados as $product_data) {
                    ?>

                        <!-- Start of product -->
                        <div class="col mb-5" style="height: 400px; width: 300px;">
                            <div class="card h-100">
                                <!-- Product image-->
                                <div class="image" style="height: 300px; overflow: hidden;">
                                    <img class="card-img-top" src="<?= $product_data['image'] ?>" alt="..." style="border-radius: 0;" />
                                </div>

                                <!-- Product details-->
                                <div class="card-body" style="height: 50px;">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h6 class="m-0"><?= $product_data['name'] ?></h6>

                                        <!-- Product price-->
                                        R$ <?= $product_data['price'] ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer pt-3 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto mb-2 blocked" href="#">Adicionar ao carrinho</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- End of product -->
                    <?php
                    }
                    ?>
                    <!-- Fim do ciclo de exibição de produtos -->

                </div>
            </div>
        </section>

        <!-- End of content -->
    </div>

    <!-- START OF FOOTER -->
    <footer>
        <div class="logo-footer">
            <p>Porto Seguro - Bahia, Brasil</p>
            <p>Rua Lorem ipsum dolor sit amet. nª 5</p>
            <p>45810-000</p>
        </div>

    </footer>

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>