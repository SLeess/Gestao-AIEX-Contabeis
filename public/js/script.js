document.addEventListener('DOMContentLoaded', function () {
    const telefoneInput = document.getElementById('telefone');
    
    function aplicarMascaraTelefone(value) {
        value = value.replace(/\D/g, '');

        if (value.length > 10) {
            value = value.replace(/^(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
        } else if (value.length > 5) {
            value = value.replace(/^(\d{2})(\d{4})(\d{0,4})/, '($1) $2-$3');
        } else if (value.length > 2) {
            value = value.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
        } else {
            value = value.replace(/^(\d*)/, '($1');
        }

        return value;
    }

    // Adiciona o evento "input" para aplicar a máscara ao digitar
    telefoneInput.addEventListener('input', function (e) {
        console.log("aaaa");
        e.target.value = aplicarMascaraTelefone(e.target.value);
    });
});
