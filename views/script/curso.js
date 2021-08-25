$(document).ready(function() {
    tablaPersonas = $("#tablaCurso").DataTable({
        "columnDefs": [{
            "targets": -1,
            "data": null,
            "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button></div></div>"
        }],

        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Procesando...",
        }
    });

    $("#btnNuevo").click(function() {
        $("#formCrear").trigger("reset");
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Nuevo Curso");
        $("#cursoCRUD").modal("show");
    });

    $("#btnEliminar").click(function() {
        $("#formEliminar").trigger("reset");
        $(".modal-header").css("background-color", "#EC3B3B");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Eliminar Curso");
        $("#cursoEliminar").modal("show");
    });

    var fila; //capturar la fila para editar o borrar el registro

    //botón EDITAR    
    $(document).on("click", ".btnEditar", function() {
        fila = $(this).closest("tr");
        codCurso = parseInt(fila.find('td:eq(0)').text());
        nombreCurso = fila.find('td:eq(1)').text();

        $("#idCurso").val(codCurso);
        $("#nomCurso").val(nombreCurso);



        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar Curso");
        $("#cursoCRUD").modal("show");

    });



});