<?php

session_start();

if ((!isset($_SESSION['email'])) and (!isset($_SESSION['autenticado']))) {
    // se nao tiver uma sessao iniciada, redireciona para o login
    header('Location: login_page.php');
} else {
    // sessao iniciada
    // conferir se o usuario é um usuario normal e, se for, redireciona para a pagina de usuario normal
    if (($_SESSION['user_type'] == 'normal_user')) {
        header('Location: normal_user_page.php');
    }
}

// recuperar dados do banco de dados

// users
include_once('config_db.php');
$query_users = "SELECT * FROM users ORDER BY id ASC";
// result contem o informaçoes da query
$result_users = $conexao->query($query_users);
// print_r($result);

// products
$query_products = "SELECT * FROM products ORDER BY id ASC";
$result_products = $conexao->query($query_products);

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
                <h4>Bem-vindo ao perfil de administrador, <?= $_SESSION['user_name'] ?>!</h4>
                <div class="accordion" id="accordionExample">
                    <!-- card 'visualizar produtos cadastrados' -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link button-normal-user" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Visualizar produtos cadastrados
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="max-height: 450px; overflow: scroll;">
                            <div class="card-body">
                                <!-- start of products list -->
                                <div class="table-div" style="margin: 0px; ">
                                    <table class="table" style="background: rgba(255, 69, 0,0.2); margin: 0;">
                                        <thead>
                                            <tr style="background: rgba(255, 69, 0,0.4);">
                                                <th scope=" col">ID</th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Preço</th>
                                                <th scope="col">Tipo</th>
                                                <th scope="col">Imagem Link</th>
                                                <th scope="col">Alterações</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php

                                            // chamar a API de listagem de produtos usando a função file_get_contents()
                                            $url = "http://localhost/PHP_MySql_Projetos/nativos_v2/pags/apis.php/products";
                                            $resultado = file_get_contents($url);

                                            // Converter o resultado da query JSON em um array
                                            $dados = json_decode($resultado, true);

                                            foreach ($dados as $product_data) {
                                                echo "<tr style='border-bottom: 1px solid grey'>";
                                                echo "<td>" . $product_data['id'] . "</td>";
                                                echo "<td>" . $product_data['name'] . "</td>";
                                                echo "<td>" . $product_data['price'] . "</td>";
                                                echo "<td>" . $product_data['type'] . "</td>";
                                                $image = $product_data['image'];
                                                echo "<td> <a href='$image' target='blank' style='color: black; font-size: 11px;'>$image</a></td>";

                                                $id = $product_data['id'];
                                                echo "<td>" .
                                                    "<a href='./edit_product_page.php?id=$id' style='display: inline; margin-left: 10px; float: left;'><i class='fa-solid fa-pencil' style='color: #000000;'></i></a>" .

                                                    "<a href='./APIs.php/delete_product?id=$id' style='float: right; display: inline; margin-right: 10px;'> <i class='fa-solid fa-trash' style='color: #000000;'></i> </a>"
                                                    . "</td>";
                                                echo "</tr>";
                                            }
                                            ?>

                                        </tbody>
                                    </table>

                                </div>
                                <!-- end of products list -->
                                    <div class="card-body">
                                        <a href="./downloadPDF.php"><button class="btn btn-dark" style="width: 25%;">Descarregar relatório de produtos PDF</button></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- card 'visualizar perfis cadastrados' -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed button-normal-user" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Visualizar perfis cadastrados
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="max-height: 450px; overflow: scroll;">
                            <div class="card-body">
                                <!-- start of perfis list -->
                                <div class="table-div" style="margin: 0px; ">
                                    <table class="table" style="background: rgba(255, 69, 0,0.25); margin: 0;">
                                        <thead>
                                            <tr style="background: rgba(255, 69, 0,0.4);">
                                                <th scope=" col">ID</th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Tel</th>
                                                <th scope="col">Endereço</th>
                                                <th scope="col">CEP</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            // chamar a API de listagem de perfis usando a função file_get_contents()
                                            $url = "http://localhost/PHP_MySql_Projetos/nativos_v2/pags/apis.php/users";
                                            $resultado = file_get_contents($url);

                                            // Converter o resultado da query JSON em um array
                                            $dados = json_decode($resultado, true);

                                            foreach ($dados as $user_data) {
                                                echo "<tr>";
                                                echo "<td>" . $user_data['id'] . "</td>";
                                                echo "<td>" . $user_data['name'] . "</td>";
                                                echo "<td>" . $user_data['email'] . "</td>";
                                                echo "<td>" . $user_data['tel'] . "</td>";
                                                echo "<td>" . $user_data['address'] . "</td>";
                                                echo "<td>" . $user_data['cep'] . "</td>";
                                                echo "</tr>";
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- end of perfis list -->
                            </div>
                        </div>
                    </div>
                    <!-- card 'cadastrar novo produto' -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed button-normal-user" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Cadastrar novo produto
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <!-- formulario de cadastro -->
                                <form method="POST" action="APIs.php/add_product">
                                    <!-- name -->
                                    <div class="form-group">
                                        <label for="name">Nome</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome do produto" required>
                                    </div>
                                    <!-- price -->
                                    <div class="price">
                                        <label for="price">Preço</label>
                                        <input type="number" step=".01" class="form-control" name="price" id="price" placeholder="Preço do produto" required>
                                    </div>
                                    <!-- type -->
                                    <div class="form-group">
                                        <label for="type">Tipo do produto</label>
                                        <br>
                                        <select class="custom-select" id="type" name="type" required>
                                            <option selected value="tshirt">T-shirt</option>
                                            <option value="sweatshirt">Sweatshirt</option>
                                            <option value="pants">Calça</option>
                                            <option value="glasses">Óculos</option>
                                            <option value="cap">Cap</option>
                                            <option value="bag">Bolsa</option>
                                        </select>
                                    </div>
                                    <!-- image -->
                                    <div class="form-group">
                                        <label for="image">Imagem</label>
                                        <input type="text" name="image" class="form-control" id="image" placeholder="Url da imagem do produto" required>
                                    </div>
                                    <button type="reset" class="btn" style="width: 49.5%; background-color: rgb(160, 160, 160)">Cancelar</button>
                                    <button type="submit" name="submit" class="btn" style="width: 49.5%;">Cadastrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- card 'visualizar perfil' -->
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed button-normal-user" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Visualizar perfil
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
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
                                <a href="./APIs.php/logout"><button class="btn btn-dark" style="width: 10%;">Sair</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- exibir mensagem de sucesso -->
                <?php
                if (isset($_SESSION['success'])) {

                    $succes_message = "Ação realizada com sucesso!";

                    if ($_SESSION['success'] == 'update') {
                        $succes_message = 'Produto editado com sucesso!';
                    }
                    if ($_SESSION['success'] == 'delete') {
                        $succes_message = 'Produto deletado com sucesso!';
                    }
                    if ($_SESSION['success'] == 'register') {
                        $succes_message = 'Produto registrado com sucesso!';
                    }
                    if ($_SESSION['success'] == 'update_perfil') {
                        $succes_message = 'Perfil editado com sucesso!';
                    }
                ?>

                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert" style="padding-right: 1em;">
                        <span style=" text-align: center;"><?= $succes_message ?></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="width: 5%; float: right; margin: 0; background: none; font-size: 1.6em; color: black;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <?php
                    // exibe a mensagem somente uma vez
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
    <script src="https://kit.fontawesome.com/3e16addb01.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>