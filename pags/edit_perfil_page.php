<?php

session_start();

if ((!isset($_SESSION['email'])) and (!isset($_SESSION['autenticado']))) {
    // se nao tiver uma sessao iniciada, redireciona para o login
    header('Location: login_page.php');
}

// recuperar dados do banco de dados

// users
include_once('config_db.php');

// url para a chamada da api com o parametro 'id' do produto selecionado
$url = "http://localhost/PHP_MySql_Projetos/nativos_v2/pags/apis.php/user_view" . "?id=" . $_GET["id"];
$resultado = file_get_contents($url);
// Converter o resultado da query JSON em um array
$dados = json_decode($resultado, true);

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css" integrity="sha384-FVQ2l/TdG7j5U6pYU6hOe6ZCOX6VjBfC1j0+oiJMObw8yyRvabOzNWdgfDxz+YzW" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Magra&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Perfil de adm</title>
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
                <h4>Editar produto</h4>

                <!-- formulario de edicao -->
                <form method="POST" action="APIs.php/edit_user?id=<?= $_GET['id'] ?>" style="margin: 0 auto;">
                    <?php
                    foreach ($dados as $user_data) {
                    ?>

                        <!-- id -->
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?= $user_data['id'] ?>" disabled>
                        </div>
                        <!-- name -->
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $user_data['name'] ?>" required>
                        </div>
                        <!-- email -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?= $user_data['email'] ?>" required>
                        </div>
                        <!-- tel -->
                        <div class="form-group">
                            <label for="tel">Tel</label>
                            <input type="text" name="tel" class="form-control" id="tel" value="<?= $user_data['tel'] ?>" required>
                        </div>
                        <!-- address -->
                        <div class="form-group">
                            <label for="address">Endereço</label>
                            <input type="text" name="address" class="form-control" id="address" value="<?= $user_data['address'] ?>" required>
                        </div>
                        <!-- cep -->
                        <div class="form-group">
                            <label for="cep">CEP</label>
                            <input type="text" name="cep" class="form-control" id="cep" value="<?= $user_data['cep'] ?>" required>
                        </div>

                    <?php
                    }
                    ?>
                    <a href="./adm_user_page.php" class="btn" style="width: 49.5%; background-color: rgb(160, 160, 160); color: white;">Cancelar e voltar</a>
                    <button type="submit" name="submit" class="btn" style="width: 49.5%;">Salvar alterações</button>

                </form>

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
    <script src="https://kit.fontawesome.com/3e16addb01.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>