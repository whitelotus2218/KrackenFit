<form class="form-horizontal" role="form" method="PUT" action="{{ url('/admin/suscriptores') }}">
    {{ csrf_field() }}
    {{method_field('PUT')}}
    <div class="modal-body">
        <div class="form-group">
            <label for="name" class="col-md-4 control-label"><i class="fa fa-user-circle"></i> Nombre Completo</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="nombreAtleta" required="true" value="{{$atleta->name}}">
            </div>
            <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                </div>
        </div>
    </div>
                            
</form>