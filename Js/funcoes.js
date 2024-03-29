const esconderCampo = function (nomeCampos) {
    campo = Array.isArray(nomeCampos) ? nomeCampos : nomeCampos.split(",");

    campo.forEach(function (valor) {
        $("#" + valor).hide();
    });
};

const mostrarCampo = function (nomeCampos) {
    campo = Array.isArray(nomeCampos) ? nomeCampos : nomeCampos.split(",");

    campo.forEach(function (valor) {
        $("#" + valor).show();
    });
};

const bloquearCampo = function (nomeCampos, show) {
    show = show !== undefined ? show : true;
    campo = Array.isArray(nomeCampos) ? nomeCampos : nomeCampos.split(",");

    campo.forEach(function (valor) {
        if (show == true) {
            $("#" + valor).prop("disabled", true);
        } else {

            $("#" + valor).prop("disabled", false);
        }
    });
};

const limparCampo = function (nomeCampos) {
    campo = Array.isArray(nomeCampos) ? nomeCampos : nomeCampos.split(",");

    campo.forEach(function (valor) {
        $("#" + valor).val("");
    });
};

const getValor = function (nomeCampo) {
    let valor = $("#" + nomeCampo).val();
    valor = Array.isArray(valor) ? valor.join("") : valor;

    return valor ? valor : "";
};

function getDisableInput(form) {
    var input = $("#" + form + " input:disabled");
    var result = '';
    $.each(input, function (key, val) {
       result += "&" + val.name + '=' + val.value;
    });
    return result;
 }
