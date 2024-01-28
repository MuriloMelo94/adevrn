<?php include 'app/View/layout/header.php' ?>

<div class="bg-body-tertiary">
    <div class="container">
        <div class="container-fluid">
            <div class="row pt-5 align-items-center">
                <div class="col-md-12">
                    <div class="card shadow p-3 mb-5  rounded">
                        <div class="card-header p-3 d-flex justify-content-between">
                            <h5 class="my-auto "><i class="fa-solid fa-users me-3"></i> Lista de Associados</h5>
                            <a class="my-auto btn btn-primary" href="/associado/form" role="button"><i class="fa-solid fa-plus me-2"></i>Cadastrar</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered border-rounded">
                                <thead>
                                    <tr>
                                        <th scope="col" class="d-none">id</th>
                                        <th scope="col">CPF</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Data de Filiação</th>
                                        <th scope="col" class="col-md-3">Ações</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">

                                    <?php foreach ($model->rows as $item) : ?>

                                        <tr>
                                            <td class="d-none"><?= $item->id ?></td>
                                            <td><?= $item->CPF ?></td>
                                            <td><?= $item->nome ?></td>
                                            <td><?= $item->email ?></td>
                                            <td><?= date("d/m/Y", strtotime($item->data_de_filiacao)) ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="/associado/edit?id=<?= $item->id ?>">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a class="btn btn-danger" onclick="confirmarExclusao(<?= $item->id ?>)">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </a>
                                                
                                                <?php foreach ($model->statusPagamento as $arrayPagamentos) : ?>
                                                    <?php if ($arrayPagamentos['0'] == $item->id) : ?>
                                                        <?php if ($arrayPagamentos['1'] == true) : ?>

                                                            <span class="badge rounded-pill text-bg-danger mt-2">Em atraso</span>
                                                            <button type="button" class="btn btn-primary mx-xxl-2 my-2"><i class="fa-solid fa-dollar-sign"></i> Checkout</button>

                                                        <?php else : ?>

                                                            <span class="badge rounded-pill text-bg-success mt-2">Em dia</span>

                                                        <?php endif ?>
                                                    <?php endif ?>

                                                <?php endforeach ?>
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
    </div>

</div>

<script>
    function confirmarExclusao(id) {

        var confirmacao = confirm("Tem certeza de que deseja excluir este associado?");

        if (confirmacao) {
            window.location.href = "/associado/delete?id=" + id;
        }
    }
</script>

<?php include 'app/View/layout/footer.php' ?>