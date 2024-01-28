<?php include 'app/View/layout/header.php' ?>

<div class="bg-body-tertiary">
    <div class="container">
        <div class="container-fluid">
            <div class="row pt-5 align-items-center">
                <div class="col-md-12">
                    <div class="card w-50 mx-auto shadow p-3 mb-5  rounded" style="min-width: 300px">
                        <div class="card-header">
                            <h5><i class="fa-solid fa-file-circle-plus"></i> Nova Anuidade</h5>
                        </div>
                        <div class="card-body">
                            <form class="row mt-3" method="post" action="/anuidade/form/store">
                                <div class="col-md-6">
                                    <label for="ano" class="form-label">Ano</label>
                                    <input type="date" class="form-control" id="ano" name="ano" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="valor" class="form-label">Valor</label>
                                    <input type="number" class="form-control" id="valor" name="valor" required>
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

</div>

<?php include 'app/View/layout/footer.php' ?>