$(document).ready(function() {
    tablaAsignacion = $("#tablaAsignacion").DataTable({
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
        $(".modal-title").text("Nueva Asignacion");
        $("#asignacionCRUD").modal("show");
    });

    var fila; //capturar la fila para editar o borrar el registro

    //botón EDITAR    
    $(document).on("click", ".btnEditar", function() {
        fila = $(this).closest("tr");
        idAsig = parseInt(fila.find('td:eq(0)').text());
        idMat = fila.find('td:eq(1)').text();
        idUsu = fila.find('td:eq(2)').text();
        idCur = fila.find('td:eq(3)').text();
        fechAsig = fila.find('td:eq(4)').text();

        $("#CodAsig").val(idAsig);
        $("#CodMat").val(idMat);
        $("#CodUsu").val(idUsu);
        $("#codCur").val(idCur);
        $("#FechaAsig").val(fechAsig);

        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar Asignacion");
        $("#asignacionCRUD").modal("show");

    });





});