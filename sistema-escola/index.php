<?php 

require_once './Controller/EstudanteController.php';

$app = new EstudanteController();

$action = $_GET['action'] ?? '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $app->salvar(); //salvar dados no banco
} else {
    if ($action === 'novo') {
        require_once './View/cadastro.php'; //mostrar formulário
    } else {
        $app->index(); //listar dados da Model
    }
}

?>