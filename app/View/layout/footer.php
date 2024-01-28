
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Obtém o caminho da URL atual
        var path = window.location.pathname;

        // Seleciona todos os links na navbar
        var links = document.querySelectorAll('.nav-pills .nav-item a');

        // Flag para verificar se pelo menos um link foi correspondido
        var linkMatched = false;

        // Itera sobre os links
        links.forEach(function (link) {
            // Verifica se o caminho da URL é exatamente igual ao atributo href do link
            if (path === link.getAttribute('href')) {
                // Adiciona a classe "active" ao link correspondente
                link.classList.add('active');
                linkMatched = true; // Define a flag como verdadeira
            }
        });

        // Se nenhum link foi correspondido, adiciona a classe "active" ao link "Home"
        if (!linkMatched) {
            document.querySelector('.nav-pills .nav-item a[href="/"]').classList.add('active');
        }
    });
</script>


</body>

</html>