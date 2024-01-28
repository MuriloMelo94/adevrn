<?php include 'app/View/layout/header.php' ?>

<div class="container">
    <div class="container-fluid">
        <div class="row vh-100 align-items-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-3 d-flex justify-content-between">
                        <h5 class="my-auto "><i class="fa-solid fa-file-lines"></i> Lista de Anuidades</h5>
                        <a class="my-auto btn btn-primary" href="/anuidade/form" role="button"><i class="fa-solid fa-plus me-2"></i>Cadastrar</a>
                    </div>
                    <table class="table table-striped table-bordered border-rounded">
                        <thead>
                            <tr>
                                <th scope="col" class="d-none">id</th>
                                <th scope="col">Ano</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">

                            <?php foreach ($model->rows as $item) : ?>

                                <tr>
                                    <td class="d-none"><?= $item->id ?></td>
                                    <td><?= $item->ano ?></td>
                                    <td><?= $item->valor ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="/anuidade/edit?id=<?= $item->id ?>">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a class="btn btn-danger" onclick="confirmarExclusao(<?= $item->id ?>)">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </a>
                                    </td>
                                </tr>

                            <?php endforeach ?>

                            <?php if (count($model->rows) == 0) : ?>
                                <tr>
                                    <td colspan="5" class="fs-6 text-center">Nenhum registro encontrado.</td>
                                </tr>
                            <?php endif ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmarExclusao(id) {

        var confirmacao = confirm("Tem certeza de que deseja excluir esta anuidade?");

        if (confirmacao) {
            window.location.href = "/anuidade/delete?id=" + id;
        }
    }
</script>

<?php include 'app/View/layout/footer.php' ?>