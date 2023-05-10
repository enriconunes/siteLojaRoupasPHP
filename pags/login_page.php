<?php
session_start();

if ((isset($_SESSION['user_type'])) and $_SESSION['user_type'] == 'adm_user') {
    // se nao tiver uma sessao iniciada, redireciona para o login
    header('Location: adm_user_page.php');
}
if ((isset($_SESSION['user_type'])) and $_SESSION['user_type'] == 'normal_user') {
    // se nao tiver uma sessao iniciada, redireciona para o login
    header('Location: normal_user_page.php');
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
    <title>Login</title>
</head>

<body id="login-page">
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

        <!-- START OF FORM -->
        <div id="user-container">
            <section class="vh-100" id="login-form">
                <div class="container-fluid">
                    <div class="row">
                        <div class="text-black">

                            <div class="d-flex align-items-center justify-content-center h-custom-2 px-5 ms-xl-4 pt-5 pt-xl-0 mt-xl-n5">

                                <form style="width: 23rem;" action="APIs.php/check_login" method="POST">

                                    <h3 class="fw-normal mb-3 pb-3 pt-5" style="letter-spacing: 1px;">Entre na sua conta</h3>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example18">Endereço de email</label>
                                        <input type="email" name="email" id="form2Example18" class="form-control form-control-lg" placeholder="Digite o seu email" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example28">Senha</label>
                                        <input type="password" name="password" id="form2Example28" class="form-control form-control-lg" placeholder="Digite a sua senha" />
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-lg btn-block" type="submit" name="submit">Entrar</button>
                                    </div>

                                    <?php
                                    if (isset($_SESSION['autenticado']) and $_SESSION['autenticado'] == false) {
                                        echo '<p class="invalid_login" style="text-align: center; color: red; font-size: 14px; margin-top: -20px; margin-bottom: -1px;">Senha ou email inválidos.</p>';
                                        unset($_SESSION['autenticado']);
                                    }
                                    if (isset($_SESSION['autenticado']) and $_SESSION['autenticado'] == true) {
                                        echo '<p class="invalid_login" style="text-align: center; color: green; font-size: 14px; margin-top: -20px;">Entrando...</p>';
                                    }
                                    ?>

                                    <p class="small mb-5 pb-lg-2"><a class="text-muted blocked" href="#!">Esqueceu a senha?</a></p>
                                    <p style="text-align: center; margin-top: -20px;">Não tem uma conta? <a href="./sigin_page.php"> <span class="register">Registre-se aqui</span>.</a></p>

                                    <!-- exibir mensagem de sucesso -->
                                    <?php
                                    if (isset($_SESSION['register_account'])) {
                                    ?>

                                        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert" style="padding-right: 1em;">
                                            <span style="text-align: center;">Perfil criado com sucesso!</span>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="width: 5%; float: right; margin: 0; background: none; font-size: 1.6em; color: black;">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                    <?php
                                        // exibe a mensagem somente uma vez
                                        unset($_SESSION['register_account']);
                                    }
                                    ?>
                                    <!-- fim da mensagem de sucesso -->

                                </form>

                            </div>

                        </div>

                    </div>
                </div>
            </section>
        </div>
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

</body>

</html>