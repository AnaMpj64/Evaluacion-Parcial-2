function init() {
    $("#formCocina").on("submit", function (e) {
      guardaryeditar(e);
    });
  }
  
  var guardaryeditar = (e) => {
    e.preventDefault();
    var formularioCocina = new FormData($("#formCocina")[0]);
    var idCocinas = document.getElementById("idCocinas").value;
    var url = "";
  
    if (idCocinas === undefined || idCocinas === "") {
      url = "../../app/controllers/Cocina.controllers.php?op=insertar";
    } else {
      url = "../../app/controllers/Cocina.controllers.php?op=actualizar";
    }
  
    $.ajax({
      url: url,
      type: "POST",
      data: formularioCocina,
      processData: false,
      contentType: false,
      cache: false,
      success: (cocinas) => {
        console.log(cocinas);
        cocinas = JSON.parse(cocinas);
        if (cocinas == "ok") {
          alert("Se guardo con exito");
          limpiacajas();
          cargaTabla();
        } else {
          alert("Hubo un error al guardar, intente mas tarde");
          limpiacajas();
        }
      },
    });
  };
  
  $().ready(() => {
    cargaTabla();
  });
  
  var cargaTabla = () => {
    var html = "";
    $.post(
      "../../app/controllers/Cocina.controllers.php?op=todos",
      (datosUsuarios) => {
        datosUsuarios = JSON.parse(datosUsuarios);
        $.each(datosUsuarios, (index, val) => {
          html +=
            "<tr>" +
            "<td>" + (index + 1) + "</td>" +
            "<td>" + val.Tipo + "</td>" +
            "<td>" + val.FuenteConsumo + "</td>" +
            "<td>" + val.Tamano + "</td>" +
            "<td>" + val.SistemaVentilacion + "</td>" +
            "<td>" + val.Marca + "</td>" +
            "<td>" + val.NumeroQuemadores + "</td>" +
            "<td>";
            html +=
            "<button class = 'btn btn-success' onclick='editar(" + val.idCocinas + ")'>Editar</button>";
            html +=
            "<button class = 'btn btn-danger' onclick='eliminar(" + val.idCocinas + ")'>Eliminar</button>";
            html += "</td>" + "</tr>";
        });
        $("#listacocinas").html(html);
      }
    );
  };
  
  var editar = (idCocinas) => {
    $.post('../../app/controllers/Cocina.controllers.php?op=uno', { idCocinas: idCocinas }, (cocinas) => {
      cocinas = JSON.parse(cocinas);
      document.getElementById('idCocinas').value = cocinas.idCocinas;
      document.getElementById('Tipo').value = cocinas.Tipo;
      document.getElementById('FuenteConsumo').value = cocinas.FuenteConsumo;
      document.getElementById('Tamano').value = cocinas.Tamano;
      document.getElementById('SistemaVentilacion').value = cocinas.SistemaVentilacion;
      document.getElementById('Marca').value = cocinas.Marca;
      document.getElementById('NumeroQuemadores').value = cocinas.NumeroQuemadores;
    });
  
    $('#modalCocina').modal('show');
  
  };


  var eliminar = (idCocinas) => {
    if (confirm("¿Está seguro que desea eliminar este registro?")) {
      $.post(
        "../../app/controllers/Cocina.controllers.php?op=eliminar",
        { idCocinas: idCocinas },
        (cocinas) => {
          cocinas = JSON.parse(cocinas);
          if (cocinas == true) {
            alert("Se eliminó con éxito");
            cargaTabla();
          } else {
            alert("Hubo un error al eliminar, intente más tarde");
            cargaTabla();
          }
        }
      );
    }
  };
 
  
  
   var limpiacajas = () => {
    document.getElementById("idCocinas").value = "";
    document.getElementById("Tipo").value = "";
    document.getElementById("FuenteConsumo").value = "";
    document.getElementById("Tamano").value = "";
    document.getElementById('SistemaVentilacion').value = "";
    document.getElementById('Marca').value = "";
    document.getElementById('NumeroQuemadores').value = "";
    $("#modalCocina").modal("hide");
  };

  $('#tablaCocina').DataTable({
    "scrollY": "500px", // Altura del área de visualización
    "scrollCollapse": true, // Hace que la tabla colapse cuando el contenido es más grande que el área de visualización
    "paging": true, // Habilita la paginación
    "searching": false, // Habilita la búsqueda
    "searchDelay": 500, // Establece un retraso de 500 milisegundos antes de realizar la búsqueda
    "bFilter": true, // Habilita el filtrado (búsqueda)
    "columnDefs": [{
        "targets": [1, 5], // Las columnas en las que se realizará la búsqueda (0, 1, 2)
        "type": "string" // El tipo de datos que se utilizarán para la búsqueda (cadena de texto)
    }]
});
  
  init();
  