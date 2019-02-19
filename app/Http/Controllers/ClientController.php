<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('clients',compact('clients'));
    }

    public function createCl(){
        return view('clients/createCl');
    }

    public function saveCl(Request $request){
       
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);
        $client = new Client;
        $client->nombre = $request->nombre;
        $client->direccion = $request->direccion;
        $client->telefono = $request->telefono;
        $client->save();
        return redirect()->route('clients')->with('info', 'cliente guardado con éxito');
    }

    
    public function editCl(Client $client){
        return view('clients/editCl', compact('client'));
    }
    public function update(Request $request, Client $client){
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required'
        ]);
       $client->update($request->except('password'));
        return redirect()->route('clients', $client->id)->with('info', 'Cliente actualizado');;
    }
    public function destroyCl(Client $client){
        $client->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
