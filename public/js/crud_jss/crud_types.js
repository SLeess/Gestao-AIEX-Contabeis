$(".btnDelete").on("click", function(e) {
    e.preventDefault(); // Cancela o envio padrão do formulário
    var buttonId = $(this).data("id"); // Obtém o ID do botão clicado
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success ml-2",
            cancelButton: "btn btn-danger"
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: "Deseja mesmo excluir o item selecionado?",
        text: "Essa ação é irreversível!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Sim, quero Deletar!",
        cancelButtonText: "Não, cancelar",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('formDelete' + buttonId).submit(); // Envia o formulário correspondente
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire({
                title: "Deleção cancelada!",
                text: "Seu registro está seguro :)",
                icon: "error"
            });
        }
    });
});
