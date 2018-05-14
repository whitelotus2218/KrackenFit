<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Auth;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.registrarEmpleado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Employee;
        $empleado->name = $request->nombreEmpleado;
        $empleado->email = $request->emailEmpleado;
        $empleado->password = $request->passwordEmpleado;
        $empleado->cargo = $request->cargoEmpleado;
        $empleado->sueldo = $request->sueldoEmpleado;
        $empleado->horarioEntrada = $request->horarioEntrada;
        $empleado->horarioSalida = $request->horarioSalida;
        $empleado->direccion = $request->direccionEmpleado;
        $empleado->telefono = $request->telefonoEmpleado;
        $empleado->contrato = $request->contratoEmpleado;
        $empleado->admin_id = Auth::id();
        $empleado->employee_id = $request->idEmpleado;
        $empleado->save();
        return redirect('/admin/registrarEmpleado');
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
