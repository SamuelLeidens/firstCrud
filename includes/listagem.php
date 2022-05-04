<?php
$mensagem = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
            break;
        case 'error':
            $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
            break;
        default:
            # code...
            break;
    }
}
?>

<?php if ($mensagem != '') { ?>
    <section>
        <?php echo $mensagem; ?>
    </section>
<?php } ?>

<section>

    <a href="cadastrar">
        <button class="btn btn-success">Cadastrar</button>
    </a>

    <?php if (count($Vaga) == 0) { ?>
        <div class="alert alert-secondary mt-3">Nenhuma vaga encontrada</div>
    <?php } else { ?>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th>Status</th>
                    <th>Ações</th> <!-- Para editar e excluir -->
                </tr>
            </thead>

            <tbody>
                <?php foreach ($Vaga as $key => $value) { ?>
                    <tr>
                        <td><?php echo $value->id; ?></td>
                        <td><?php echo $value->titulo; ?></td>
                        <td><?php echo $value->descricao; ?></td>
                        <td><?php echo date('d/m/y - H:i:s', strtotime($value->data)); ?></td>
                        <td><?php echo ($value->status == 's' ? 'Ativo' : 'Inativo'); ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $value->id; ?>">
                                <button type="button" class="btn btn-primary">Editar</button>
                            </a>

                            <a href="excluir.php?id=<?php echo $value->id; ?>">
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>
    <div class="card" style="width: 18rem;">
        <img src="img/img.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>


</section>