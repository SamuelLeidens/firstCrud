<?php 
    require __DIR__.'/vendor/autoload.php';

    define('TITLE', 'Editar Vaga');
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


   if(isset($_POST['titulo'], $_POST['descricao'], $_POST['status'])){
    $obVaga->titulo = $_POST['titulo'];
    $obVaga->descricao = $_POST['descricao'];
    $obVaga->status = $_POST['status'];

    $obVaga->atualizar();
    // echo "<pre>"; print_r($this); echo "</pre>"; exit;

    header('location: index.php?status=success');
    exit;
 }

    
    require __DIR__.'/includes/header.php';
    require __DIR__.'/includes/formulario.php';
    require __DIR__.'/includes/footer.php';
        
?>