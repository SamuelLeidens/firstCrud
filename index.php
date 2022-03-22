<?php 
    require __DIR__.'/vendor/autoload.php';

    use \App\Entity\Vaga;
    $Vaga = Vaga::getVagas();
    // echo "<pre>"; print_r($Vaga); echo"</pre>"; exit;

    require __DIR__.'/includes/header.php';
    require __DIR__.'/includes/listagem.php';
    require __DIR__.'/includes/footer.php';
?>