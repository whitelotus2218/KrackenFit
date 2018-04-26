<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atletum;

class userController extends Controller
{
    

    
    /**
     * Where to redirect users after login / registration.
     *
     * @var string
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

        $atleta->save(); 
        return redirect('/admin/registrarAtleta');
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
