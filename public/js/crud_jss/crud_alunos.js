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

$(document).ready(function() {
    var table = $('#alunosTable').DataTable({
        responsive: true,
        paging: true,
        searching: true,
        ordering: true,
        info: true,
        pageLength: 5,
        dom: 'rtip',
        language: {
            lengthMenu: "Mostrar _MENU_ registros",
            zeroRecords: "Nenhum registro encontrado",
            info: "Mostrando página _PAGE_ de _PAGES_",
            infoEmpty: "Nenhum registro disponível",
            infoFiltered: "(filtrado de _MAX_ registros no total)",
            search: "Buscar:",
            paginate: {
                first: "Primeiro",
                last: "Último",
                next: "Próximo",
                previous: "Anterior"
            }
        }
    });

    $('#searchInput').on('keyup', function() {
        table.search(this.value).draw();
    });

});

document.addEventListener('DOMContentLoaded', function () {
    const telefoneInput = document.getElementById('telefone');
    const telefoneInputEdit = document.getElementById('#telefone-input-edit');

    telefoneInput.addEventListener('input', function (e) {
        e.target.value = aplicarMascaraTelefone(e.target.value);
    });

    telefoneInputEdit.addEventListener ('input', function(e){
        e.target.value = aplicarMascaraTelefone(e.target.value);
    });
});
