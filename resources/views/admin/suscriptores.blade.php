@extends('admin.layout.main')
@section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Socios de Kracken Fit</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Género</th>
                                        <th>Cumpleaños</th>
                                    	<th>Teléfono</th>
                                    	<th>Email</th>
                                    </thead>
                                    
                                    
                                    @foreach ($atleta as $atleta) 
                                        <tbody>
                                            <td>  {{ $atleta->id }} </td>
                                            <td> {{ $atleta->name }}</td>
                                            @if ($atleta->genero === 0)
                                                <td>Hombre</td>
                                            @else
                                                <td>Mujer</td>
                                            @endif
                                            <td> {{ $atleta->cumpleaños }} </td>
                                            <td> {{ $atleta->telefono }} </td>
                                            <td> {{ $atleta->email }} </td>
                                            <td> <button> <i class="fa fa-edit" data-toggle="modal" data-target="#editAtleta"></i> </button>  
                                            <button><i class="fa fa-trash"></i> </button> </td>
                                        </tbody>
                                    @endforeach                              
                                    
                                </table>

                            </div>
                        </div>
                    </div>                   
                </div>
                <div class="modal" id="editAtleta">
                    <div class="modal-dialog">
                        <div class="modal-content">      
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <strong><h7 class="modal-title">Editar información de atleta</h7></strong>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->

                                <div class="modal-body">
                                     <form class="form-horizontal" role="form" method="PUT" action="{{ url('/admin/suscriptores') }}">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="name" class="col-md-4 control-label"><i class="fa fa-user-circle"></i> Nombre Completo</label>

                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control" name="nombreAtleta" required="true" value="{{$atleta->name}}">
                                                </div>
                                            </div>
                                        </div>                                                                   
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                </div>
                                
                                                        
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
@endsection

