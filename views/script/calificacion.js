$(document).ready(function() {
    tablaPersonas = $("#tableCalificacion").DataTable({
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
        $(".modal-title").text("Nueva Calificacion");
        $("#calificacionesCrud").modal("show");
    });

    $("#btnInactivar").click(function() {
        $("#formInactivar").trigger("reset");
        $(".modal-header").css("background-color", "#EC3B3B");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Inactivar Calificacion");
        $("#calificacionesInactivar").modal("show");
    });

    $("#btnActivar").click(function() {
        $("#formActivar").trigger("reset");
        $(".modal-header").css("background-color", "#56D85A");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Activar Calificacion");
        $("#calificacionesActivar").modal("show");
    });

    var fila; //capturar la fila para editar o borrar el registro

    //botón EDITAR    
    $(document).on("click", ".btnEditar", function() {
        fila = $(this).closest("tr");
        codCalificacion = parseInt(fila.find('td:eq(0)').text());
        notaPeriodo1 = fila.find('td:eq(1)').text();
        notaPeriodo2 = parseInt(fila.find('td:eq(2)').text());
        notaPeriodo3 = fila.find('td:eq(3)').text();
        notaFinal = parseInt(fila.find('td:eq(4)').text());
        fechaRegistro = fila.find('td:eq(5)').text();
        idAsignacion = parseInt(fila.find('td:eq(6)').text());
        idCurso = fila.find('td:eq(7)').text();


        $("#idCalifi").val(codCalificacion);
        $("#NotaP1").val(notaPeriodo1);
        $("#NotaP2").val(notaPeriodo2);
        $("#NotaP3").val(notaPeriodo3);
        $("#NotaF").val(notaFinal);
        $("#FechCal").val(fechaRegistro);
        $("#CodAsig").val(idAsignacion);
        $("#IdCu").val(idCurso);


        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar Tipo Calificacion");
        $("#calificacionesCrud").modal("show");

    });



});