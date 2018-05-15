<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ChatEvent;
use App\User;

class Chatcontroller extends Controller
{

    public function _construct(){

    	$this->middleware('auth');
    }


    public function chat(){

    	return view('chat');
    }

    public function send(request $request){
        
        return $request->all();
    	$user= User::find(Auth::id());
    	event(new ChatEvent($request->$message,$user));
    }

     //public function send(){
     	

    	//$user= User::find(Auth::id());
    	//event(new ChatEvent($request->$message,$user));
    //}
//}
