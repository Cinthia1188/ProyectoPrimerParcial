$(document).ready(function () {
  $("#mostrarModal").click(function () {
    // Hacer la solicitud Ajax
    $.ajax({
      url: "json.php",
      type: "POST",
      dataType: "json",
      success: function (data) {
        // Mostrar datos en la ventana modal
        $("#contenidoModal").html(JSON.stringify(data));
        $("#miModal").show();
      },
    });
  });

  // Cerrar la ventana modal al hacer clic en la 'x'
  $(".cerrar").click(function () {
    $("#miModal").hide();
  });

  // Cerrar la ventana modal al hacer clic fuera de ella
  $(window).click(function (event) {
    if (event.target.id === "miModal") {
      $("#miModal").hide();
    }
  });
});
