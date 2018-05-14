@extends('admin.layout.main')
@section('content')
	<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image">
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="{{ asset('img/faces/face-1.jpg')}}"/>
                                  <h2 class="title">{{ Auth::user()->name }}<br/> 
                                  </h2>
                                  <small>{{Auth::user()->email}}</small>
                                </div>
                               
                            </div>
                            <hr>
                            <div class="text-center">
                                
                            </div>
                        </div>
                        <div class="card">
                            
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Perfil</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Empresa</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Company" value="Kracken Fit">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" class="form-control border-input" placeholder="Nombre" disabled value="{{Auth::user()->name}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="email" class="form-control border-input" placeholder="Email" disabled value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
@endsection