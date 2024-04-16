<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  <link href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.bootstrap5.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Clientes</title>


  <?php

include '../nadvar/nadvar_c.php';

?>
</head>

<body>


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <H2>ADMINISTRACIÓN DE CLIENTES</H2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table id="lista_Cliente" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <th>#</th>
              <th>Nombre</th>
              <th>ApPaterno</th>
              <th>ApMaterno</th>
              <th>Direccion</th>
              <th>C.P</th>
              <th>Fecha Nacimiento</th>
              <th>Telefono</th>
              <th>Correo</th>
              <th>Sexo</th>
              <th>CURP</th>
              <th>Fecha</th>
              <th with="5%"></th>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- //------------------------------------------------------ -->

  <div class="modal fade" id="ModalNuevo">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-tittle">Clientes | Nuevo Registro</h4>
          <button type="button" class="close" data-dismiss="modal" arial-label="true">
            <span arial-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="post" id="persona">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" name="nombre " id="nombre" class="form-control" placeholder="Nombre">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="apPaterno">ApPaterno:</label>
                  <input type="text" name="ap_paterno " id="ap_paterno" class="form-control" placeholder="ApPaterno">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="apMaterno">ApMaterno:</label>
                  <input type="text" name="ap_materno " id="ap_materno" class="form-control" placeholder="ApPaterno">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="nombre">Direccion:</label>
                  <input type="text" name="direccion " id="direccion" class="form-control" placeholder="Direccion">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="apPaterno">Codigo Postal:</label>
                  <input type="text" name="codigo_postal" id="codigo_postal" class="form-control"
                    placeholder="Codigo Postal">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="apMaterno">Fecha Nacimiento:</label>
                  <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control"
                    placeholder="Fecha Nacimiento">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="nombre">Telefono:</label>
                  <input type="text" name="telefono " id="telefono" class="form-control" placeholder="Telefono">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="nombre">Correo:</label>
                  <input type="text" name="correo " id="correo" class="form-control" placeholder="Correo">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="apPaterno">Sexo:</label>
                  <input type="text" name="sexo " id="sexo" class="form-control" placeholder="Sexo">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="apMaterno">CURP:</label>
                  <input type="text" name="curp " id="curp" class="form-control" placeholder="CURP">
                </div>
              </div>

            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar </button>
          <button type="button" id="btnGuardar" class="btn btn-danger">Guardar </button>
        </div>




      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.print.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
  $("#btnGuardar").click(function() {
    var nombre = $("#nombre").val();
    var ap_paterno = $("#ap_paterno").val();
    var ap_materno = $("#ap_materno").val();
    var direccion = $("#direccion").val();
    var codigo_postal = $("#codigo_postal").val();
    var fecha_nacimiento = $("#fecha_nacimiento").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();
    var sexo = $("#sexo").val();
    var curp = $("#curp").val();


    if (nombre == "" || ap_paterno == "" || ap_materno == "" || direccion == "" || codigo_postal == "" ||
      fecha_nacimiento == "" ||
      telefono == "" || correo == "" || sexo == "" || curp == "") {
      Swal.fire({
        position: "top-end",
        icon: "warning",
        title: "Existen campos vacios",
        showConfirmButton: false,
        timer: 2000
      });

    } else {
      $.ajax({
        url: "insertar_cliente.php",
        type: "POST",
        data: {
          nombre: nombre,
          ap_paterno: ap_paterno,
          ap_materno: ap_materno,
          direccion: direccion,
          codigo_postal: codigo_postal,
          fecha_nacimiento: fecha_nacimiento,
          telefono: telefono,
          correo: correo,
          sexo: sexo,
          curp: curp


        },
        success: function(response) {
          if (response == "ok") {
            $("#ModalNuevo").modal("toggle");
            $("#nombre").val("");
            $("#ap_paterno").val("");
            $("#ap_materno").val("");
            $("#direccion").val("");
            $("#codigo_postal").val("");
            $("#fecha_nacimiento").val("");
            $("#telefono").val("");
            $("#correo").val("");
            $("#sexo").val("");
            $("#curp").val("");
            Swal.fire({
              title: "¡Guardado!",
              text: "Registro guardado correctamente.",
              icon: "success",
              confirmButtonText: "Cerrar"
            });
            var table = $("#lista_Cliente").dataTable().api();
            table.ajax.reload();

          } else {
            Swal.fire({
              icon: "error",
              title: "Oops...",
              text: "Ha ocurrido un error!",
              footer: '<a href="#">Why do I have this issue?</a>'
            });
            console.log(response);
          }
        }
      })
    }

  })


  $(document).ready(function() {
    tabla();

    $("#fecha_nacimiento").change(function() {
      var birthdate = new Date($(this).val());
      var today = new Date();
      var age = today.getFullYear() - birthdate.getFullYear();
      var m = today.getMonth() - birthdate.getMonth();
      if (m < 0 || (m === 0 && today.getDate() < birthdate.getDate())) {
        age--;
      }
      if (age < 18) {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "La fecha de nacimiento no es válida. Debe ser mayor a 18 años o mas",
          footer: '<a href="#"></a>'
        });
        $("#fecha_nacimiento").val("");
      }
    });
  });

  function tabla() {
    // $("#lista").dataTable().fnDestroy();
    $("#lista_Cliente").dataTable({
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
      },
      responsive: "true",
      dom: 'Bfrtilp',
      buttons: [{
          extend: 'excelHtml5',
          text: '<i class="fa fa-file-excel"></i> ',
          titleAttr: 'Exportar a Excel',
          className: 'btn btn-success'
        },
        {
          extend: 'pdfHtml5',
          text: '<i class="fa fa-file-pdf"></i> ',
          titleAttr: 'Exportar a PDF',
          className: 'btn btn-danger'
        },
        {
          extend: 'print',
          text: '<i class="fa fa-print"></i> ',
          titleAttr: 'Imprimir',
          className: 'btn btn-info'
        },

        {
          text: '<i class= "fa fa-plis-square"></i>INSERTAR',
          classname: "btn btn-primary",
          action: function() {
            lanzarmodal();
          },
          counter: 1
        }
      ],


      "ajax": {
        "type": "POST",
        "url": "lista_clientes.php",
        "dataSrc": "",
        "data": ""
      },
      "columns": [{
          "data": "id"
        },
        {
          "data": "nombre"
        },
        {
          "data": "ApPaterno"
        },
        {
          "data": "ApMaterno"
        },
        {
          "data": "direccion"
        },
        {
          "data": "codigo_postal"
        },
        {
          "data": "fecha_nacimiento"
        },
        {
          "data": "telefono"
        },
        {
          "data": "correo"
        },
        {
          "data": "sexo"
        },
        {
          "data": "curp"
        },
        {
          "data": "fecha"
        },
        {
          "data": "opciones"
        }
      ]
    });
  }

  function lanzarmodal() {
    $("#ModalNuevo").modal("show")
  }

  // Eliminacion simbolica de registros
  function eliminar(id) {
    Swal.fire({
      title: "¿Estás seguro?",
      text: "¡No podrás revertir esto!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Sí, elimínalo"
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "Eliminar_cliente.php",
          type: "POST",
          data: {
            id: id
          },
          success: function(response) {
            if (response == "ok") {
              Swal.fire({
                title: "¡Eliminado!",
                text: "El dato ha sido eliminado.",
                icon: "success"
              }).then(() => {
                var table = $("#lista_Cliente").dataTable().api();
                table.ajax.reload();
              });
            } else {
              Swal.fire({
                title: "Error",
                text: "Hubo un problema al eliminar el dato.",
                icon: "error"
              });
            }
          }
        });
      }
    });

  }



  // ---------------------------
  </script>
</body>

</html>