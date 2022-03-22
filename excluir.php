<?php 
    require __DIR__.'/vendor/autoload.php';

    use \App\Entity\Vaga;

    //Validação do ID
    if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
        header('location: index.php?status=error');
        exit;
    }

    //Consulta vaga
    $obVaga = Vaga::getVaga($_GET['id']);

    //Validação da Vaga
    if(!$obVaga instanceof Vaga){
        header('location: index.php?status=error');
        exit;
    }

    //Validação do Post
    if(isset($_POST['excluir'])) {
        $obVaga->excluir();

        header('location: index.php?status=success');
        exit;
    }


    require __DIR__.'/includes/header.php';
    require __DIR__.'/includes/confirmarExclusao.php';
    require __DIR__.'/includes/footer.php';
?>