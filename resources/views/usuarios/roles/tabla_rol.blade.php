 <!-- /.card -->
<div class="content">
  <div class="card">
    <div class="card-header ">
      <h3 class="card-title">Listado de Roles</h3>
      @can('crear.rol')
      <!--modal de boton registar rol-->
      <button id="modal" type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-crear">
      <i class="fas fa-plus"></i>
      Crear Rol
      </button>
     <!--fin modal de boton registar rol-->
     @endcan
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="tablaRoles" class="table table-bordered table-striped w-100">
        <thead class="bg-info">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Fecha de Creación</th>
          <th width="120px">Acciones</th>
        </tr>
        </thead>
        <tbody id="datos">
          @foreach ($rol as $roles)
            <tr>
              <td>{{$roles->id}}</td>
              <td>{{$roles->name}}</td>
              <td>{{$roles->updated_at}}</td>
              <td class="text-center">
                @can('editar.rol')
                <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal-editar" onclick="Editar('{{$roles->id}}')">
                  <i class="fa fa-pen"></i> Editar
                </button>
                @endcan
                @can('eliminar.rol')
                <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-eliminar" onclick="Eliminar('{{$roles->id}}','{{$roles->name}}')">
                  <i class="fa fa-times"></i> Eliminar
                </button>
                @endcan
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.card -->
<script type="text/javascript">
//iniciacion de tabls de roles
$(function () {
   $("#tablaRoles").DataTable({
    "responsive": true,
    "autoWidth": true,
     language: {
        search: "Buscar",
        "lengthMenu":"Filtrar _MENU_ numero de filas",
         "info": "pagina _PAGE_ de _PAGES_",
         "infoFiltered": "(resultados encontrado de _MAX_ en total)",
         paginate: {
            first:      "Premier",
            previous:   "anterior",
            next:       "Siguiente",
            last:       "Dernier"
        }
      }
    });

   // Autoenfoque para los campos inputs de los modals
   $('#modal-crear, #modal-editar').on('shown.bs.modal', function (e) {
    $('.focus').focus();
    });
  });
</script>