<?php include 'app/View/layout/header.php' ?>

<body>
    <div class="container vh-100">
        <div class="container-fluid">
            <div class="row vh-100 align-items-center">
                <div class="col-md-12">
                    <div class="card w-50 mx-auto" style="min-width: 300px">
                        <div class="card-header">
                            <h5><i class="fa-solid fa-user-pen me-3"></i>Editar Associado</h5>
                        </div>
                        <div class="card-body">
                            <form class="row mt-3" method="post" action="/associado/edit/update">
                                <div class="col-md-6">
                                    <label for="id" class="form-label d-none">id</label>
                                    <input type="text" class="form-control d-none" id="id" name="id" value="<?= $model->id?>" required readonly>

                                    <label for="nome" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" value="<?= $model->nome?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?= $model->email?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="CPF" class="form-label">CPF</label>
                                    <input type="text" class="form-control" id="CPF" name="cpf" placeholder="___.___.___-__" value="<?= $model->CPF?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="Data_de_filiacao" class="form-label">Data de Filiação</label>
                                    <input type="date" class="form-control" id="Data_de_filiacao" name="data_de_filiacao" value="<?= $model->data_de_filiacao?>" required>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>