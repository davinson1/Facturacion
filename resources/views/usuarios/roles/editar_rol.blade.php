{!! Form::model($rol, ['route' => ['roles_actualizar', $rol->id], 'method' => 'PUT', 'id' =>'frm_editar_rol']) !!}
    <div class="modal-body">
      <div class="form-group">
        {{ Form::hidden('id', null, ['id' => 'idRol']) }}
        {{ Form::label('name', 'Nombre del rol *') }}
        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
      </div>
      <div class="form-group">
        {{ Form::label('slug', 'URL Amigable *') }}
        {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
      </div>
      <div class="form-group">
        {{ Form::label('description', 'Descripción') }}
        {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3, 'cols' => 3]) }}
      </div>
      <hr>
      <h3>Permiso especial</h3>
      <div class="form-group">
        <label>{{ Form::radio('special', 'all-access') }} Acceso total</label>
        <label>{{ Form::radio('special', 'no-access') }} Ningún acceso</label>
      </div>
      <hr>
      <h3>Lista de permisos</h3>

      {{-- Permisos para usuario --}}
        <div id="color1" class="card card-outline card-info collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Usuario: crear, mostrar, editar y eliminar.</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool">
                <input id="switch" class="switch" type="checkbox">
                <label for="switch" class="lbl align-middle"></label>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            @foreach($permissions as $permission)
              @if($permission->categoria == 'usuario')
              <div id="todoUsuario" class="form-group clearfix">
                <div class="icheck-success">
                  {{ Form::checkbox('permissions[]', $permission->id, null, ['id' => 'checkbox'.$permission->id]) }}
                  {{ Form::label('checkbox'.$permission->id, $permission->name) }}

                </div>
              </div>
              @endif
            @endforeach
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <label>Nota:</label>
          </div>
          <!-- /.card-footer-->
        </div>

      {{-- Permisos para ubicacion --}}
        <div id="color2" class="card card-outline card-info collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Ubicacion: crear, mostrar, editar y eliminar.</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool">
                <input id="switch2" class="switch" type="checkbox">
                <label for="switch2" class="lbl align-middle"></label>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            @foreach($permissions as $permission)
              @if($permission->categoria == 'ubicacion')
              <div id="todoUbicacion" class="form-group clearfix">
                <div class="icheck-success">
                  {{ Form::checkbox('permissions[]', $permission->id, null, ['id' => 'checkboxUbicacion'.$permission->id]) }}
                  {{ Form::label('checkboxUbicacion'.$permission->id, $permission->name) }}

                </div>
              </div>
              @endif
            @endforeach
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <label>Nota:</label>
          </div>
          <!-- /.card-footer-->
        </div>

      {{-- Permisos para productos --}}
        <div id="color3" class="card card-outline card-info collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Productos: crear, mostrar, editar y eliminar.</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool">
                <input id="switch3" class="switch" type="checkbox">
                <label for="switch3" class="lbl align-middle"></label>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            @foreach($permissions as $permission)
              @if($permission->categoria == 'productos')
              <div id="todoProductos" class="form-group clearfix">
                <div class="icheck-success">
                  {{ Form::checkbox('permissions[]', $permission->id, null, ['id' => 'checkboxSuccess'.$permission->id]) }}
                  {{ Form::label('checkboxSuccess'.$permission->id, $permission->name) }}

                </div>
              </div>
              @endif
            @endforeach
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <label>Nota:</label>
          </div>
          <!-- /.card-footer-->
        </div>

      {{-- Permisos para compras --}}
        <div id="color4" class="card card-outline card-info collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Compras: crear, mostrar, editar y eliminar.</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool">
                <input id="switch4" class="switch" type="checkbox">
                <label for="switch4" class="lbl align-middle"></label>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            @foreach($permissions as $permission)
              @if($permission->categoria == 'compras')
              <div id="todoCompras" class="form-group clearfix">
                <div class="icheck-success">
                  {{ Form::checkbox('permissions[]', $permission->id, null, ['id' => 'checkboxSuccess'.$permission->id]) }}
                  {{ Form::label('checkboxSuccess'.$permission->id, $permission->name) }}

                </div>
              </div>
              @endif
            @endforeach
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <label>Nota:</label>
          </div>
          <!-- /.card-footer-->
        </div>
      <div class="form-group">
        {{ Form::submit('Guardar', ['id' => 'actualizarRol', 'class' => 'btn btn-primary']) }}
      </div>
    </div>
{{ Form::close() }}

<script type="text/javascript">

  $(function () {
    // Seleccionar todos los selectores del usuario al editar
    $('#switch').change(function() {
      $('#todoUsuario > div > input').prop('checked', $(this).is(':checked'));
      $('#color1').toggleClass('card-info card-success');
    });

    // Seleccionar todos los selectores de ubicación al editar
    $('#switch2').change(function() {
      $('#todoUbicacion > div > input').prop('checked', $(this).is(':checked'));
      $('#color2').toggleClass('card-info card-success');
    });

    // Seleccionar todos los selectores de productos al editar
    $('#switch3').change(function() {
      $('#todoProductos > div > input').prop('checked', $(this).is(':checked'));
      $('#color3').toggleClass('card-info card-success');
    });

    // Seleccionar todos los selectores de compras al editar
    $('#switch4').change(function() {
      $('#todoCompras > div > input').prop('checked', $(this).is(':checked'));
      $('#color4').toggleClass('card-info card-success');
    });
  });

  $('#actualizarRol').click(function(e) {
  e.preventDefault();
  var datos = $('#frm_editar_rol').serialize();
  const url = $('#frm_editar_rol').attr('action');

  $.ajax({
    url: url,
    method: 'put',
    data: datos,

    success: function(response){
      toastr.success(response.mensaje);
      $(".close").click();
      listaRoles();
    },
    error: function(error) {
      callback(500, error);
    }
  });
});
</script>