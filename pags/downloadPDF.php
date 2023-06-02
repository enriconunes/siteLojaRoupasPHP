<?php

require_once('./config_db.php');
require_once('../bibliotecas/dompdf/autoload.inc.php');

// Executa a consulta SQL para listar todos os produtos
$sql = "SELECT * FROM products";
$result = $conexao->query($sql);

$html = "<h1>Lista de Produtos</h1>";

if ($result->num_rows > 0) {
    $html .= "<table>";
    $html .= '<tr"><th>ID</th><th>Nome</th><th>Preço</th><th>Tipo</th><th>Link da Imagem</th></tr>';

    while ($row = $result->fetch_assoc()) {
        $html .= "<tr>";

        $html .= "<td>" . $row['id'] . "</td>";
        $html .= "<td style='padding: 0 7px 0 7px;'>" . $row['name'] . "</td>";
        $html .= "<td style='padding: 0 7px 0 7px;'>" . $row['price'] . "</td>";
        $html .= "<td style='padding: 0 7px 0 7px;'>" . $row['type'] . "</td>";
        $imagem_link = $row['image'];
        $html .= "< style='padding: 0 7px 0 7px;' td><a href='$imagem_link'>" . "[Click Here]" . "</a></td>";

        $html .= "</tr>";
    }
    $html .= "</table>";
    
} else {
    $html .= "<h4>Nenhum produto encontrado!</h4>";
}

$html .= "<h4>Quantidade de produtos: $result->num_rows</h4>";

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$dompdf->loadHtml($html);

$dompdf->set_option('defaultFont', 'times');

$dompdf->setPaper('A4', 'Portrait');

$dompdf->render();

$dompdf->stream();

header('Location: http://localhost/PHP_MySql_Projetos/nativos_v2/pags/adm_user_page.php');
exit();