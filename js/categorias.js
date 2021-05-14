function agregarCategoria(){
    var categoria = $('#nombreCategoria').val();
        if(categoria == ""){
            swal("Debes agregar una categoria");
            return false;
        }else{
            $.ajax({
                type: "POST",
                data: "categoria=" + categoria,
                url: "../procesos/categorias/agregarCategoria.php",
                success:function(respuesta){
                    respuesta = respuesta.trim();
                    if(respuesta == 1){
                        $('#tablaCategorias').load("categorias/tablaCategoria.php");
                        $('#nombreCategoria').val();
                        swal(":D","Agregado con exito!","Success");
                    }else{
                        swal(":c","Fallo al agregar!","Error");
                    }
                }
            });
        }
}
function eliminarCategorias(idCategoria){
    idCategoria = parseInt(idCategoria);
    if(idCategoria <1){
        swal("No tienes ide de categoria!");
        return false;
    }else{
        //============================================================
        swal({
            title: "Estas seguro de eliminar esta categoria?",
            text: "Una ves eliminada, no podra recuperarse!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    data: "idCategorias=" + idCategoria,
                    url: "../procesos/categorias/eliminarCategoria.php",
                    success:function(respuesta){
                        respuesta = respuesta.trim();
                        console.log(respuesta);
                        if(respuesta == 1){
                            $('#tablaCategorias').load("categorias/tablaCategoria.php");
                            swal("Eliminado con exito!", {
                                icon: "success",
                              });
                        }else{
                            swal(":C","Te fallo al eliminar","error");
                        }
                    }
                })
            }
          });
        //============================================================
    }
}
function obtenerDatosCategoria(idcategoria){
    $.ajax({
        type: "POST",
        data: "idCategorias="+ idcategoria,
        url: "../procesos/categorias/obtenerCategoria.php",
        success:function(respuesta){
            respuesta = jQuery.parseJSON(respuesta);
            $('#idCategoria').val(respuesta['idCategoria']);
            $('#categoriaU').val(respuesta['nombreCategoria']);
        }
    });
}
function actualizaCategoria(){
    if($('#categoriaU').val() == ""){
        swal("No hay categoria!!");
        return false;
    }else {
        $.ajax({
            type:"POST",
            data:$('#frmActualizaCategoria').serialize(),
            url: "../procesos/categorias/actualizaCategoria.php",
            success:function(respuesta){
                respuesta = respuesta.trim();
                if(respuesta == 1){
                    $('#tablaCategorias').load("categorias/tablaCategoria.php");
                    $('#btnCerrarUpdateCategoria').trigger('click');
                    swal(":D","Actualizado con exito!!","success");
                }else{
                    swal(":C","Fallo al actualizar!!","error");
                }
            }  
        });
    }
}