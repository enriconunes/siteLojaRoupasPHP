<?php

session_start();

if ((!isset($_SESSION['email'])) and (!isset($_SESSION['autenticado']))) {
    // se nao tiver uma sessao iniciada, redireciona para o login
    header('Location: login_page.php');
} else {
    // sessao iniciada
    // conferir se o usuario é um adm, senao, continua nesta pagina atual
    if (($_SESSION['user_type'] == 'adm_user')) {
        header('Location: adm_user_page.php');
    }
    $email_logado = $_SESSION['email'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Magra&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Meu Perfil</title>
</head>

<body id="profile-page">
    <div id="container">
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
                            <i class="fas fa-heart"></i>
                        </a>
                        <a href="#">
                            <!-- <img src="./content/Compra.png" alt="" id="bag-icon"> -->
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <a href="./login_page.php">
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
        </header>

        <!-- START OF PROFILE PAGE CONTENT -->
        <div id="user-container">
            <div class="menu-user">
                <h4>Bem-vindo, <?= $_SESSION['user_name'] ?>!</h4>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link button-normal-user" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Carrinho de compras
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <!-- SHOPPING CART -->

                                <div class="px-4 px-lg-0">

                                    <div class="pb-5">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                                                    <!-- Shopping cart table -->
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" class="border-0 bg-light">
                                                                        <div class="p-2 px-3 text-uppercase">Produto</div>
                                                                    </th>
                                                                    <th scope="col" class="border-0 bg-light">
                                                                        <div class="py-2 text-uppercase">Preço</div>
                                                                    </th>
                                                                    <th scope="col" class="border-0 bg-light">
                                                                        <div class="py-2 text-uppercase">Quantidade</div>
                                                                    </th>
                                                                    <th scope="col" class="border-0 bg-light">
                                                                        <div class="py-2 text-uppercase">Remover</div>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row" class="border-0">
                                                                        <div class="p-2">
                                                                            <img src="https://imageswscdn.wslojas.com.br/files/24465/MED_calca-cargo-sarja-fire-reta-especial-marrom-647294.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                                            <div class="ml-3 d-inline-block align-middle" style="margin-left: 3%;">
                                                                                <h5 class=" mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Calça Cargo Marrom</a></h5><span class="text-muted font-weight-normal font-italic d-block">Tamanho: M</span>
                                                                            </div>
                                                                        </div>
                                                                    </th>
                                                                    <td class="border-0 align-middle"><strong>€69.00</strong></td>
                                                                    <td class="border-0 align-middle"><strong>1</strong></td>
                                                                    <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="p-2">
                                                                            <img src="https://images.tcdn.com.br/img/img_prod/1032302/touca_gorro_marinheiro_preto_com_pompom_chronic_limitada_2443_1_e1618fac8213903063b1d639cb684518.jpeg" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                                            <div class="ml-3 d-inline-block align-middle" style="margin-left: 3%;">
                                                                                <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Touca Preta</a></h5><span class="text-muted font-weight-normal font-italic">Tamanho: Tamanho único</span>
                                                                            </div>
                                                                        </div>
                                                                    </th>
                                                                    <td class="align-middle"><strong>€19.99</strong></td>
                                                                    <td class="align-middle"><strong>2</strong></td>
                                                                    <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="p-2">
                                                                            <img src="https://img.freepik.com/fotos-gratis/homem-elegante-bonito-com-roupa-urbana_1303-17744.jpg?w=360&t=st=1682975643~exp=1682976243~hmac=bb7ae55e72903a5f5ecf08634b2097269cd9f7d85c39c527113147d7f6100bfc" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                                            <div class="ml-3 d-inline-block align-middle" style="margin-left: 3%;">
                                                                                <h5 class=" mb-0"> <a href="#" class="text-dark d-inline-block">Óculos Vintage Preto</a></h5><span class="text-muted font-weight-normal font-italic">Tamanho: Tamanho único</span>
                                                                            </div>
                                                                        </div>
                                                                    <td class="align-middle"><strong>€29.59</strong></td>
                                                                    <td class="align-middle"><strong>1</strong></td>
                                                                    <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- End -->
                                                </div>
                                            </div>

                                            <div class="row py-5 p-4 bg-white rounded shadow-sm">
                                                <div class="col-lg-6">
                                                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Cupom de desconto</div>
                                                    <div class="p-4">
                                                        <p class="font-italic mb-4">Insira aqui o seu cupom de desconto.</p>
                                                        <div class="input-group mb-4 border rounded-pill p-2">
                                                            <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
                                                            <div class="input-group-append border-0">
                                                                <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-4" style="margin-right: 5px;"></i>Adicionar cupom</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Informações adicionais</div>
                                                    <div class="p-4">
                                                        <p class="font-italic mb-4">Se você precisar nos passar alguma informação sobre o pedido, insira aqui.</p>
                                                        <textarea name="" cols="30" rows="2" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Resumo da compra </div>
                                                    <div class="p-4">
                                                        <p class="font-italic mb-4">Os custos adicionais são calculados com base nos valor total da compra.</p>
                                                        <ul class="list-unstyled mb-4">
                                                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Subtotal </strong><strong>€105.58</strong></li>
                                                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Valor da entrega</strong><strong>€0.00</strong></li>
                                                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Taxa</strong><strong>€0.00</strong></li>
                                                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                                                <h5 class="font-weight-bold">€105.58</h5>
                                                            </li>
                                                        </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block" style="width: 100%;">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <span>*Este carrinho de compras é ilustrativo e possui o conteúdo fixo.</span>
                                </div>

                                <!-- END SHOPPING CART -->
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed button-normal-user" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Visualizar perfil
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <?php
                                // API visualizar perfil
                                $url = "http://localhost/PHP_MySql_Projetos/nativos_v2/pags/apis.php/user_view?id=" . $_SESSION['user_id'];
                                $resultado = file_get_contents($url);
                                // Converter o resultado da query JSON em um array
                                $resultado_array = json_decode($resultado, true);

                                foreach ($resultado_array as $perfil) {
                                ?>
                                    <b>Nome:</b>
                                    <p><?= $perfil['name'] ?></p>
                                    <b>Email:</b>
                                    <p><?= $perfil['email'] ?></p>
                                    <b>Tel:</b>
                                    <p><?= $perfil['tel'] ?></p>
                                    <b>Endereço:</b>
                                    <p><?= $perfil['address'] ?></p>
                                    <b>CEP:</b>
                                    <p><?= $perfil['cep'] ?></p>
                                <?php
                                }
                                ?>
                                <a href='./edit_perfil_page.php?id=<?= $_SESSION["user_id"] ?>'><button class="btn btn-dark" style="width: 10%;">Editar perfil</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed button-normal-user" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Editar perfil
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Formulario de edicao
                            </div>
                        </div>
                    </div>

                    <!-- card 'mais' -->
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed button-normal-user" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Mais
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <a href="./APIs.php/logout"><button class="btn" style="width: 10%;">Sair</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_SESSION['success'])) {
                ?>
                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert" style="padding-right: 1em;">
                        <span style=" text-align: center;">Perfil atualizado com sucesso!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="width: 5%; float: right; margin: 0; background: none; font-size: 1.6em; color: black;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php
                    unset($_SESSION['success']);
                }
                ?>
            </div>
        </div>
    </div>
    <!-- END OF PROFILE PAGE CONTENT -->

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

</body>

</html>