<?php include 'app/View/layout/header.php' ?>

<body>
    <div class="container">
        <div class="container-fluid">
            <div class="row vh-100 align-items-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-3 d-flex justify-content-between">
                            <h5 class="my-auto "><i class="fa-solid fa-users me-3"></i> Lista de Associados</h5>
                            <a class="my-auto btn btn-primary" href="/associado/form" role="button"><i class="fa-solid fa-plus me-2"></i>Cadastrar</a>
                        </div>
                        <table class="table table-striped table-bordered border-rounded">
                            <thead>
                                <tr>
                                    <th scope="col" class="d-none">id</th>
                                    <th scope="col">CPF</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Data de Filiação</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">

                                <?php foreach ($model->rows as $item) : ?>
                                    
                                    <tr>
                                        <td class="d-none"><?= $item->id?></td>
                                        <td><?= $item->nome?></td>
                                        <td><?= $item->nome?></td>
                                        <td><?= $item->email?></td>
                                        <td><?= $item->data_de_filiacao?></td>
                                    </tr>

                                <?php endforeach ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>