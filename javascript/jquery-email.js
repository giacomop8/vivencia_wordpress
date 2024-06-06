jQuery(document).ready(function($) {
    $('#formulario').submit(function(event) {
        event.preventDefault();
        var dadosDoForm = $(this).serialize();
        console.log(script_ajax.ajax_url);

        // Envia os dados via AJAX para o script PHP
        $.ajax({
            url: script_ajax.ajax_url,
            type: 'POST',
            data: dadosDoForm,
            success: function(response) {
                // Callback de sucesso
                alert('Email enviado com sucesso!');
            },
            error: function(xhr, status, error) {
                // Callback de erro
                alert('Ocorreu um erro ao enviar o email: ' + error);
            }
        });
    });
});