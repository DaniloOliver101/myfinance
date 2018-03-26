    $(document).ready(function() {
        /// Quando usuário clicar em salvar será feito todos os passo abaixo
        $('#btnsalvar').click(function() {

            var dados = $('#formMeta').serialize();

            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: 'inserir.php',
                async: true,
                data: dados,
                success: function(response) {
                    location.reload();
                }
            });

            return false;
        });