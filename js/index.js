function acessar() {

    var dados = $("#form-autenticacao").serialize();

    $.ajax({
        type: "POST",
        data: dados,
        url: "php/acessar.php"
    });

}

function enviar() {

    var dados = $("#form-recuperar").serialize();

    $.ajax({
        type: "POST",
        data: dados,
        url: "php/recuperar.php"
    });

}