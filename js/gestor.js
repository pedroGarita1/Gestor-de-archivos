function agregarArchivosGestor(){
    var formData = new FormData(document.getElementById('frmArchivos'));
    $.ajax({
      url: "../procesos/gestor/guardarArchivos.php",
      type: "POST",
      datatype: "html",
      data: formData,
      cache:false,
      contentType:false,
      processData:false,
      success:function(respuesta){
        respuesta = respuesta.trim();
        console.log(respuesta);
        
        if(respuesta == 1){
          $('#tablaCategorias').load("categorias/tablaCategoria.php");
            swal(":D","Agregado con exito!!","success");
        }else{
            swal(":C","Fallo al agregar!!","error");
        }
      }
    });
}