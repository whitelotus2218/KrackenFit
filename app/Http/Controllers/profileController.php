<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//models
use app\Admin;
//use app\Atletum;
use app\Employee;
use app\Ejercicio;
use app\Estudio;
use app\rutina;
//Fecades
use Auth;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contenidoDashboard(){        
                
        $contadorDeAtletas =  Auth::user()->atletas()->count();

        return view('admin.dashboard',compact('contadorDeAtletas'));
    }
    public function perfilAdministrador()
    {
        $admin = Admin::find(Auth::id());

        return view('admin.perfil',compact('admin'));
    }   
    
    public function registrarEmpleado()
    {
        $admin = Admin::find(Auth::id());
        return view('admin.registrarEmpleado',compact('admin'));
    }   
    public function registrarAtleta()
    {
        $admin = Auth::user();
        return view('admin/registrarAtleta',compact('admin'));
    }  
    public function index()
    {
        $atleta = collect(Admin::find(Auth::id())->atletas);
        return view('admin.suscriptores',compact('atleta'));
    }
    public function mostrarEmpleados(){
        $empleado = Admin::find(Auth::id())->empleados;
        //return $empleado;
        return view('admin.empleados',compact('empleado'));
    }
    /*public function mostrarCoach(){
        $coach = Admin::find(Auth::id())->empleados;
        //return $coach;
        return view('admin.',compact('coach'));
    }*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
