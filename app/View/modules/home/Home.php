<?php include 'app/View/layout/header.php' ?>

<div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom">ADevRN - Associação de Desenvolvedores do RN</h2>

    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
        <div class="col d-flex flex-column align-items-start gap-2">
            <h2 class="fw-bold text-body-emphasis">Boas vindas ao sistema de gestão da ADevRN</h2>
            <p class="text-body-secondary">Aqui você encontrará diversas funcionalidades para gerenciamento dos seus associados e anuidades, poderá dar baixa nos pagamentos, editar valores, dados e muito mais. Comece já!</p>
            <a href="/associado" class="btn btn-primary btn-lg">Iniciar</a>
        </div>

        <div class="col">
            <div class="row row-cols-1 row-cols-sm-2 g-4">
                <div class="col d-flex flex-column gap-2">
                    <h3><span class="badge bg-primary"><i class="fa-solid fa-users"></i></span></h3>
                    <h4 class="fw-semibold mb-0 text-body-emphasis">Associados</h4>
                    <p class="text-body-secondary">Liste associados e veja seus status.</p>
                </div>

                <div class="col d-flex flex-column gap-2">
                    <h3><span class="badge bg-primary"><i class="fa-solid fa-file-lines"></i></span></h3>
                    <h4 class="fw-semibold mb-0 text-body-emphasis">Anuidades</h4>
                    <p class="text-body-secondary">Liste ou cadastre novas anuidades.</p>
                </div>

                <div class="col d-flex flex-column gap-2">
                    <h3><span class="badge bg-primary"><i class="fa-solid fa-hand-sparkles"></i></span></h3>
                    <h4 class="fw-semibold mb-0 text-body-emphasis">Ações</h4>
                    <p class="text-body-secondary">Edite ou exclua associados conforme desejar.</p>
                </div>

                <div class="col d-flex flex-column gap-2">
                    <h3><span class="badge bg-primary"><i class="fa-solid fa-money-bill-trend-up"></i></span></h3>
                    <h4 class="fw-semibold mb-0 text-body-emphasis">Checkout</h4>
                    <p class="text-body-secondary">Realize o controle e pagamento de anuidades ao receber os valores.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'app/View/layout/footer.php' ?>