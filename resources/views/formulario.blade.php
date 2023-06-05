<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Dados</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
    <div class="container mt-5">
        <form method="POST" action="/salvar-dados" id="formulario">
            <!-- Adicione o campo do token CSRF manualmente -->
            {{ csrf_field() }}

            <!-- Adicione os campos do formulário correspondentes às colunas da planilha -->
            <div class="form-group row">
                <label for="coluna1" class="col-sm-3 col-form-label">Timestamp</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="coluna1" name="coluna1" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="coluna2" class="col-sm-3 col-form-label">AM Service - Adult Count</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="coluna2" name="coluna2" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="coluna3" class="col-sm-3 col-form-label">AM Service - Children Count</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="coluna3" name="coluna3" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="coluna4" class="col-sm-3 col-form-label">AM Service - Salvations</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="coluna4" name="coluna4" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="coluna5" class="col-sm-3 col-form-label">AM Service - Dream Team</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="coluna5" name="coluna5" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="coluna6" class="col-sm-3 col-form-label">PM Service - Adult Count</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="coluna6" name="coluna6" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="coluna7" class="col-sm-3 col-form-label">PM Service - Children Count</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="coluna7" name="coluna7" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="coluna8" class="col-sm-3 col-form-label">PM Service - Salvations</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="coluna8" name="coluna8" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="coluna9" class="col-sm-3 col-form-label">PM Service - Dream Team</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="coluna9" name="coluna9" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="coluna10" class="col-sm-3 col-form-label">Growth Track Starts</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="coluna10" name="coluna10" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="coluna11" class="col-sm-3 col-form-label">Growth Track Completions</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="coluna11" name="coluna11" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="coluna12" class="col-sm-3 col-form-label">Giving (Monday - Sunday)</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="coluna12" name="coluna12" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="coluna13" class="col-sm-3 col-form-label">Usuário</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="coluna13" name="coluna13" required>
                </div>
                </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary" id="salvar">Salvar</button>
                </div>
            </div>
        </form>
        <div class="mt-3" id="mensagem"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script>
$(document).ready(function () {
    $('#formulario').submit(function (e) {
        e.preventDefault(); // Evita o comportamento padrão de envio do formulário

        var formData = $(this).serialize(); // Obtém os dados do formulário

        $.ajax({
            url: '/salvar-dados',
            type: 'POST',
            data: formData,
            success: function () {
                $('#mensagem').text('Salvo com sucesso!').addClass('alert alert-success');
                $('#formulario')[0].reset();
            },
            error: function () {
                $('#mensagem').text('Erro ao enviar os dados.').addClass('alert alert-danger');
            }
        });
    });
});

    </script>
</body>
</html>