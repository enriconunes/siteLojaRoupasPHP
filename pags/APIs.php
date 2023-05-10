<?php
// importar conexao a db / importar $conexao
include_once('config_db.php');

// iniciar sessao
session_start();

// Recebe a requisição do cliente
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'], '/'));


// Roteia a requisição para o endpoint correto

// LISTAR PRODUTOS
if ($method == 'GET' && $request[0] == 'products') {
    // Chama a função para o endpoint /products

    // id = order default
    $order_by = 'id';
    $direction = 'ASC';

    if (isset($_GET['order-by'])) {
        if ($_GET['order-by'] == 'default') {
            $order_by = 'id';
            $direction = 'ASC';
        }
        if ($_GET['order-by'] == 'price_asc') {
            $order_by = 'price';
            $direction = 'ASC';
        }
        if ($_GET['order-by'] == 'price_desc') {
            $order_by = 'price';
            $direction = 'DESC';
        }
    }
    get_products($conexao, $order_by, $direction);
}

// LISTAR USERS
elseif ($method == 'GET' && $request[0] == 'users') {
    get_users($conexao);
}

// LISTAR DADOS DO PERFIL
elseif ($method == 'GET' && $request[0] == 'user_view') {
    get_user_id($conexao, $_GET['id']);
}

// LISTAR PRODUTOS NA PAGINA DE EDICAO
elseif ($method == 'GET' && $request[0] == 'product_id') {
    get_products_edit($conexao, $_GET['id']);
}

// CADASTRAR PRODUTO
elseif ($method == 'POST' && $request[0] == 'add_product') {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $type = $_POST["type"];
    $image = $_POST["image"];

    // importar db
    include_once('config_db.php');

    // '$conexao' é importado de 'config_db.php'
    $sql = mysqli_query(
        $conexao,
        "INSERT INTO products(name, price, type, image)
            VALUES ('$name', $price, '$type', '$image');"
    );

    $_SESSION['success'] = 'register';
    header('Location: ../adm_user_page.php');
}

// EDITAR PRODUTO
elseif ($method == 'POST' && $request[0] == 'edit_product') {
    $id = $_GET["id"]; //id é passado pela url
    $name = $_POST["name"];
    $price = $_POST["price"];
    $type = $_POST["type"];
    $image = $_POST["image"];

    // importar db
    include_once('config_db.php');

    // '$conexao' é importado de 'config_db.php'
    $sql = mysqli_query(
        $conexao,
        "UPDATE products
        SET name = '$name', price = $price, type = '$type', image = '$image'
        WHERE id=$id;"
    );

    $_SESSION['success'] = 'update';
    header('Location: ../adm_user_page.php');
}

// EXCLUIR PRODUTO
elseif ($request[0] == 'delete_product') {
    $id = $_GET["id"];

    // importar db
    include_once('config_db.php');

    // '$conexao' é importado de 'config_db.php'
    $sql = mysqli_query(
        $conexao,
        "DELETE from products WHERE id=$id;"
    );

    $_SESSION['success'] = 'delete';
    header('Location: ../adm_user_page.php');
}

// CADASTARAR USUARIO
elseif ($method == 'POST' && $request[0] == 'creat_account') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $cep = $_POST['cep'];

    // $senha = $password;
    $hash_password = hash('sha256', "$password");

    // '$conexao' vem de 'config_db.php'
    $sql = mysqli_query(
        $conexao,
        "INSERT INTO users(name, email, password, tel, address, cep)
        VALUES ('$name', '$email', '$hash_password', '$tel', '$address', '$cep');"
    );

    $_SESSION['register_account'] = true;

    header('Location: ../login_page.php');
}

// EDITAR USUARIO
elseif ($method == 'POST' && $request[0] == 'edit_user') {
    $id = $_GET["id"]; //id é passado pela url
    $name = $_POST["name"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $address = $_POST["address"];
    $cep = $_POST["cep"];

    // importar db
    include_once('config_db.php');

    // '$conexao' é importado de 'config_db.php'
    $sql = mysqli_query(
        $conexao,
        "UPDATE users
        SET name = '$name', email = '$email', tel = '$tel', address = '$address', cep = '$cep'
        WHERE id=$id;"
    );

    // UPDATE nome_da_tabela
    // SET nome_da_coluna1 = valor_da_coluna1, nome_da_coluna2 = valor_da_coluna2
    // WHERE condição; 

    $_SESSION['success'] = 'update_perfil';
    header('Location: ../normal_user_page.php');
}

// VALIDAR LOGIN
elseif ($method == 'POST' && $request[0] == 'check_login') {

    // recuperar dados do formulario
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash_password = hash('sha256', "$password");

    // realizar query ao db com os dados do formulario
    $sql = "SELECT * FROM users WHERE email = '$email' and password = '$hash_password'";

    // '$conexao' vem de 'config_db.php'
    $resultado_query = $conexao->query($sql);

    // funcao para acessar os valores da query
    $registro_query = mysqli_fetch_assoc($resultado_query);

    // conferir quantidade de registros recebidos da query
    if (
        mysqli_num_rows($resultado_query) < 1
    ) {
        // nao retornou nenhum registro / login invalido
        $_SESSION['autenticado'] = false;
        header('Location: ../login_page.php');
    } else {
        // login valido
        $_SESSION['email'] = $registro_query['email'];
        $_SESSION['user_id'] = $registro_query['id'];
        $_SESSION['user_name'] = $registro_query['name'];
        $_SESSION['autenticado'] = true;
        $_SESSION['user_type'] = 'normal_user';

        // conferir se é o email de administração
        if ($_SESSION['email'] == 'adm@nativos.com') {
            $_SESSION['user_type'] = 'adm_user';
        }

        header('Location: ../normal_user_page.php');
    }
}

// LOGOUT
elseif (
    $request[0] == 'logout'
) {
    unset($_SESSION['email']);
    unset($_SESSION['autenticado']);
    unset($_SESSION['user_type']);
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    header('Location: ../login_page.php');
} else {
    // Retorna um erro 404 se o endpoint não existir
    http_response_code(404);
    echo "Endpoint não encontrado.";
}


// FUNCOES

// Função para o endpoint /users
function get_products($conexao, $order_by, $direction)
{
    // Executa a consulta SQL para listar todos os produtos
    $sql = "SELECT * FROM products ORDER BY $order_by $direction";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        // Monta um array com os produtos encontrados
        $products = array();
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        // Retorna os produtos como JSON
        header('Content-Type: application/json');
        echo json_encode($products);
    } else {
        // Retorna um erro se não houver produtos cadastrados
        header('HTTP/1.0 404 Not Found');
        echo "Nenhum produto encontrado";
    }
}

function get_products_edit($conexao, $id)
{
    // Executa a consulta SQL para listar somente o produto escolhido
    $sql = "SELECT * FROM products WHERE id=$id";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        // Monta um array com os produtos encontrados
        $products = array();
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        // Retorna os produtos como JSON
        header('Content-Type: application/json');
        echo json_encode($products);
    } else {
        // Retorna um erro se não houver produtos cadastrados
        header('HTTP/1.0 404 Not Found');
        echo "Nenhum produto encontrado com este id";
    }
}

function get_users($conexao)
{
    // Executa a consulta SQL para listar todos os usuarios
    $sql = "SELECT * FROM users ORDER BY id";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        // Monta um array com os usuarios encontrados
        $users = array();
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        // Retorna os usuarios como JSON
        header('Content-Type: application/json');
        echo json_encode($users);
    } else {
        // Retorna um erro se não houver usuários cadastrados
        header('HTTP/1.0 404 Not Found');
        echo "Nenhum usuário encontrado";
    }
}

function get_user_id($conexao, $id)
{
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        // Monta um array com os usuarios encontrados
        $user = array();
        while ($row = $result->fetch_assoc()) {
            $user[] = $row;
        }
        // Retorna os usuarios como JSON
        header('Content-Type: application/json');
        echo json_encode($user);
    } else {
        // Retorna um erro se não houver usuários cadastrados
        header('HTTP/1.0 404 Not Found');
        echo "Nenhum usuário encontrado";
    }
}
