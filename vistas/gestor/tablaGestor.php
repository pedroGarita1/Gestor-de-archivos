<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table table-hover table-dark" id="tablaGestorDataTable">
                <thead>
                    <tr style ="text-align: center">
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo de archivo</th>
                        <th scope="col">Descargar</th>
                        <th scope="col">visualizar</th>
                        <th scope="col">eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style = "text-align: center">
                            <span class="btn btn-danger btn-sm">
                                <span class="fas fa-trash-alt">
                            </span>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $('#tablaGestorDataTable').DataTable();
});
</script>