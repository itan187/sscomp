<?php

namespace App\Http\Controllers;

use App\OtherUser;
use Illuminate\Http\Request;

class OtherUserController extends Controller
{
    
    public function index(){
        $users = OtherUser::get();
        return view('otherUsers', compact('users'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
            'password' => 'required',
            'puesto' => 'required',
            'area' => 'required',
            'abreviacion' => 'required',
        ]);
        
        $user = new OtherUser;
        $user->nombre = $request->nombre;
        $user->password = bcrypt($request->description);
        $user->puesto = $request->puesto;
        $user->area = $request->area;
        $user->abreviacion = $request->abreviacion;
        $user->save();
        
        return redirect()->route('users')->with('info', 'Usuario guardado con éxito');
    }
}
