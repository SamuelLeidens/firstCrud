<?php
require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar Vaga');
use \App\entity\Vaga;

$obvaga = new Vaga;

if (isset($_POST['titulo'], $_POST['descricao'], $_POST['status'])) {
    $obvaga->titulo = $_POST['titulo'];
    $obvaga->descricao = $_POST['descricao'];
    $obvaga->status = $_POST['status'];
    // echo "<pre>"; print_r($_POST); echo "</pre>"; exit;

    $obvaga->cadastrar();

    header('location: index.php?status=success');
    exit;
}

require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/formulario.php';
require __DIR__ . '/includes/footer.php';