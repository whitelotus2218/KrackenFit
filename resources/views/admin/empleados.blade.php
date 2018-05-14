@extends('admin.layout.main')
@section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Empleados de Kracken Fit</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Teléfono</th>
                                        <th>Dirección</th>
                                    	<th>sueldo</th>
                                        <th>Cargo</th>
                                        <th>Horario</th>
                                        <th>Número de Contrato</th>
                                    	<th>Email</th>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach ($empleado as $empleado) 
                                        <tbody>
                                        <td>  {{ $empleado->id }} </td>
                                        <td> {{ $empleado->name }} </td>
                                        <td> {{ $empleado->telefono }} </td>
                                        <td> {{ $empleado->direccion}} </td>
                                        <td> {{ $empleado->sueldo }} </td>
                                        @if ($empleado->cargo === 0)
                                            <td>Coach</td>
                                        @else
                                            <td>Nutriologo</td>
                                        @endif
                                        <td> {{ $empleado->horarioEntrada }} a {{ $empleado->horarioSalida }}</td>
                                        <td> {{ $empleado->contrato }} </td>
                                        <td> {{ $empleado->email }} </td>
                                        <td> <button><i class="fa fa-edit"></i></button>  <button><i class="fa fa-trash"></i></button> </td>
                                        </tbody>
                                    @endforeach
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                   
            </div>
            @endsection