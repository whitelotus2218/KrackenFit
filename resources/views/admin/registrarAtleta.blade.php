@extends('admin/layout/main')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('registrarAtleta') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label"><i class="fa fa-user-circle"></i> Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nombreAtleta" required="true">
                            </div>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label col-md-4"><i class="fa fa-mars"></i> Género</label>
                            <div class="col-md-6">
                                <select class="form-control" name="genero" required="true">
                                    <option disabled="" selected=""></option>
                                    <option value="0">Masculino</option>
                                    <option value="1">Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4"><i class="fa fa-calendar"></i>Cumpleaños</label>
                            <div class="col-md-6">
                                <input type="date" name="cumpleaños" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4"><i class="fa fa-phone"></i>Teléfono <small>(10 dígitos)</small></label>
                            <div class="col-md-6">
                                <input type="number" name="telefono" class="form-control" maxlength="10" />  
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label"><i class="fa fa-at"></i>E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="emailAtleta" required="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label"><i class="fa fa-key"></i>Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="passwordAtleta" required="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="true">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button href="/home" type="submit" class="btn btn-danger">
                                    Continuar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection