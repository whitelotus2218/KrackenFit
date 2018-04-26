@extends('admin.layout.main')
@section('content')
    <div class="content">
        <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('registrarEmpleado') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label"> <i class="fa fa-user-circle"></i>Nombre Completo</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nombreEmpleado">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4"><i class="fa fa-phone"></i> Teléfono <small>(10 dígitos)</small></label>
                            <div class="col-md-6">
                                <input type="number" name="telefonoEmpleado" class="form-control" maxlength="10" />  
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-4"><i class="fa fa-location-arrow"></i> Dirección</label>
                            <div class="col-md-6">
                                <input type="text" name="direccionEmpleado" class="form-control"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-4">Sueldo <small>Números cerrados</small></label>
                            <div class="col-md-6">
                                <input type="text" name="sueldoEmpleado" class="form-control"> 
                            </div>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label col-md-4"><i class="fa fa-briefcase"></i>Cargo</label>
                            <div class="col-md-6">
                                <select class="form-control" name="cargoEmpleado" required="true">
                                    <option disabled="" selected=""></option>
                                    <option value="0">Entrenador</option>
                                    <option value="1">Nutriologo/a</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="horario" class="col-md-4 control-label"><i class="fa fa-stopwatch"></i>Horario</label>
                            <div class="col-md-6">
                                <label>De: </label>
                                <input type="time" id="horarioEntrada" class="form-control" name="horarioEntrada">
                                <label>A: </label>
                                <input type="time" id="horarioSalida" class="form-control" name="horarioSalida">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contrato" class="col-md-4 control-label"><i class="fa fa-file"></i>Número de Contrato</label>

                            <div class="col-md-6">
                                <input id="contrato" type="number" class="form-control" name="contratoEmpleado">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label"><i class="fa fa-at"></i>E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="emailEmpleado">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="passwordEmpleado" class="col-md-4 control-label"><i class="fa fa-key"></i>Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="passwordEmpleado">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-danger">
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
</div>

@endsection
        