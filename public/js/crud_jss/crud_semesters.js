$(document).ready(function() {
    var table = $('#semestersTable').DataTable({
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

    $('#searchInputSemesters').on('keyup', function() {
        table.search(this.value).draw();
    });

    $(document).on('show.bs.modal', '.modal', function () {
        // console.log($('#myModal').hasClass('show'));
        $(".modal-dialog").each(function(){
            $(this).addClass("modal-dialog-centered .modal-sm")
            $(this).css({
                'max-width': '230px',
                'margin': 'auto'
            })
        });
    });
});
