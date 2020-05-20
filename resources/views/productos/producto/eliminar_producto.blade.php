
@can('eliminar.producto')
{{-- Modal para Eliminar un tipo tributario --}}
<div class="modal fade" id="modal-eliminar" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h4 class="modal-title"><i class="fa fa-trash"></i> Eliminar Producto</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      @csrf
      <form>
        <div class="modal-body">
          <h3 class="text-center">¿Esta seguro de eliminar el producto <span id="nombreprodcuto"></span>?</h3>
          <input id="idproducto" class="form-control" type="hidden" required="" value="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button id="eliminarproducto" class="btn btn-danger" type="submit">Eliminar </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endcan
