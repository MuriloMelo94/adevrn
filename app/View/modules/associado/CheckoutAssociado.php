<?php include 'app/View/layout/header.php' ?>

<div class="bg-body-tertiary">
    <div class="container">
        <div class="container-fluid">
            <div class="row pt-5 justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow p-3 mb-5 rounded">
                        <div class="card-header p-3 justify-content-between">
                            <h5 class="my-auto "><i class="fa-solid fa-dollar-sign"></i> Pagamento - Checkout Anuidades</h5>
                            <h6 class="card-subtitle my-2 text-body-secondary">Associado: <?= $model['0']->nome ?></h6>
                            <h6 class="card-subtitle my-2 text-body-secondary">Filiado desde: <?= date("d/m/Y", strtotime($model['0']->data_de_filiacao)) ?></h6>
                        </div>
                        <table class="table table-striped table-bordered border-rounded">
                            <thead>
                                <tr>
                                    <th scope="col" class="d-none">id</th>
                                    <th scope="col">Ano</th>
                                    <th scope="col" class="text-end pe-3">Valor - Subtotal</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">

                                <?php foreach ($model as $item) : ?>

                                    <tr>
                                        <td class="d-none"><?= $item->id ?></td>
                                        <td><?= date("Y", strtotime($item->ano)) ?></td>
                                        <td class="text-end pe-3"><?= $item->valor ?> <i class="fa-regular fa-circle-check text-success"></i></td>

                                    </tr>

                                <?php endforeach ?>

                                <?php if (count($model) == 0) : ?>
                                    <tr>
                                        <td colspan="5" class="fs-6 text-center">Nenhum registro encontrado.</td>
                                    </tr>
                                <?php endif ?>


                            </tbody>
                            <tfoot class="table-group-divider">
                                <tr>

                                    <td scope="col" class="fw-semibold">Total</td>
                                    <td scope="col" class="text-end pe-3">
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="d-flex justify-content-end">
                                <button type="button" onclick="confirmarPagamento(<?= $model['0']->associado_id ?>)" class="btn btn-success my-3 w-25 fs-5"><i class="fa-solid fa-money-bill-1-wave"></i> Pagar</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmarPagamento(id) {

        var confirmacao = confirm("Confirma o pagamento das anuidades?");

        if (confirmacao) {
            window.location.href = "/associado/checkout/update?id=" + id;
        }
    }
</script>

<?php include 'app/View/layout/footer.php' ?>