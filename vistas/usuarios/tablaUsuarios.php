<table class="table table-striped table-bordered dt-responsive nowrap" style="width:100%" id="usuariosDataTable">
    <thead>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>Nombre</th>
        <th>Curp</th>
        <th>Fecha de nacimiento</th>
        <th>RFC</th>
        <th>Numero de control</th>
        <th>Correo electronico</th>
        <th>Password</th>
        <th>Media superior</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <span class="btn btn-warning btn-sm">
                    <i class="fa-solid fa-user-pen"></i>
                </span>
            </td>
            <td>
                <span class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-user-xmark"></i>
                </span>
            </td>
        </tr>
    </tbody>
</table>


<script>
    $(document).ready(function(){
        $('#usuariosDataTable').DataTable( {
            language : {
				url : "../public/js/es-ES.json"
            },
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        });
    });
</script>