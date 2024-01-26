<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>ADev-RN - Cadastrar Associado</title>
</head>

<body>
    <div class="container vh-100">
        <div class="container-fluid">
            <div class="row vh-100 align-items-center">
                <div class="col-md-12">
                    <div class="card w-50 mx-auto" style="min-width: 300px">
                        <div class="card-header">
                            <h5><i class="fa-solid fa-user-plus me-3"></i>Novo Associado</h5>
                        </div>
                        <div class="card-body">
                            <form class="row mt-3" method="post" action="/associado/form/store">
                                <div class="col-md-6">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="CPF" class="form-label">CPF</label>
                                    <input type="text" class="form-control" id="CPF" name="cpf" placeholder="___.___.___-__" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="Data_de_filiacao" class="form-label">Data de Filiação</label>
                                    <input type="date" class="form-control" id="Data_de_filiacao" name="data_de_filiacao" required>
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