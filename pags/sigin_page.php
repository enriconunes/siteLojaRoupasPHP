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
    <title>Registrar</title>
</head>

<body id="sign-page">
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

                            <form style="width: 40rem;" action="APIs.php/creat_account" method="POST">

                                <h3 class="fw-normal mb-3 pb-3 pt-5" style="letter-spacing: 1px;">Criar uma nova conta</h3>

                                <!-- name -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example18">Nome</label>
                                    <input type="text" id="form2Example18" class="form-control form-control-lg" placeholder="Digite o seu nome" name="name" required />
                                </div>

                                <!-- email -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example18">Email</label>
                                    <input type="email" id="form2Example18" class="form-control form-control-lg" placeholder="Digite o seu email" name="email" required />
                                </div>

                                <!-- password -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example28">Senha</label>
                                    <input type="password" id="form2Example28" class="form-control form-control-lg" placeholder="Digite a sua senha" name="password" required />
                                </div>

                                <!-- address -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example18">Endereço</label>
                                    <input type="text" id="form2Example18" class="form-control form-control-lg" placeholder="Digite o seu endereço" name="address" required />
                                </div>

                                <!-- cep -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example18">CEP</label>
                                    <input type="text" id="form2Example18" class="form-control form-control-lg" placeholder="Ex: 00000-000" name="cep" required />
                                </div>

                                <!-- tel -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example18">Telefone</label>
                                    <input type="text" id="form2Example18" class="form-control form-control-lg" placeholder="Ex: (73) 90000-0000" name="tel" required/>
                                </div>

                                <div class="pt-1 mb-4">
                                    <button class="btn btn-lg btn-block" type="submit" name="submit">Cadastrar</button>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>
            </div>
        </section>
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