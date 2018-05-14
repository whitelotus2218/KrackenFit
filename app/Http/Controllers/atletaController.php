<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Atletum;
use App\Admin;

// Facades
use Auth;
use PDF;
use Session;
use Notification; 

class atletaController extends Controller
{
    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:atleta',
            'password' => 'required|min:6|confirmed',
        ]);
    }*/
    public function horaActualizacion(){
        $horaActualizacion = Atletum::all()->last();
        return view('admin.dashboard',compact('horaActualizacion'));
    }
    public function create()
    {
        return view('admin.registrarAtleta');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atleta = new Atletum;        

        $atleta->name = $request->nombreAtleta;
        $atleta->email = $request->emailAtleta;
        $atleta->password = $request->passwordAtleta;
        $atleta->cumpleaños = $request->cumpleaños;
        $atleta->telefono = $request->telefono;
        $atleta->rutina_id = $request->rutinaId;
        $atleta->estudio_id = $request->estudioId;
        $atleta->genero = $request->genero; 
        $atleta->admin_id = Auth::id();
        $this->validate($request, [
            'email' => 'requiered|unique:atleta',
        ]);

        $atleta->save(); 
        //Notificación de confirmación 
        //$request->session()->flash('success', '¡Se ha registrado correctamente al usuario'.$atleta->name.'!');
        return redirect('/admin/registrarAtleta');

    }
    public function edit($id){
        $admin = new Admin::id();
        $atleta = $admin->atleta_id;
        if (!$atleta) {
            return redirect('/admin/suscriptores');
        }

        $atleta->name = $request->nombreAtleta;
        $atleta->email = $request->emailAtleta;
        $atleta->cumpleaños = $request->cumpleaños;
        $atleta->telefono = $request->telefono;
        $atleta->rutina_id = $request->rutinaId;
        $atleta->estudio_id = $request->estudioId;
        $atleta->genero = $request->genero; 
        $atleta->save();
        return $atleta;
        return view('/admin/suscriptores', compact('atleta'));

    }
    public function update(Request $request, $id){
        $admin = new Admin::id();
        $atleta = $admin->atleta_id;

        if (!$atleta) {
            return redirect('/admin/suscriptores');
        }

        $atleta->name = $request->nombreAtleta;
        $atleta->email = $request->emailAtleta;
        $atleta->cumpleaños = $request->cumpleaños;
        $atleta->telefono = $request->telefono;
        $atleta->rutina_id = $request->rutinaId;
        $atleta->estudio_id = $request->estudioId;
        $atleta->genero = $request->genero; 
        $atleta->save();
        return $atleta;
        return redirect('/admin/suscriptores');
    }
}
