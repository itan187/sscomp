<?php

namespace App\Http\Controllers;

use App\OtherUser;
use App\Quotation;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = OtherUser::get();
        $totalQuotations = Quotation::count() +1;
        return view('projects.index', compact('users', 'totalQuotations'));
    }

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
        $request->validate([
            'archivo' => 'required|mimes:pdf,docx',
            'cliente' => 'required',
            'email' => 'required',
            'anticipo' => 'required',
            'telefono' => 'required',
            'encargado' => 'required|string|not_in:Selecciona Encargado...',
            'nombreArchivo' => 'required',
        ]);
        
        // Guardarlo en la carpeta public/cotizaciones
        if ($request->hasfile('archivo')) {
            $file = $request->file('archivo');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/cotizaciones/', $name);
        }
        $quotation = new Quotation;
        $quotation->folio = $request->folio;
        $quotation->cliente = $request->cliente;
        $quotation->email = $request->email;
        $quotation->anticipo = $request->anticipo;
        $quotation->telefono = $request->telefono;
        $quotation->encargado = $request->encargado;
        $quotation->nombreArchivo = $request->nombreArchivo;
        $quotation->archivo = $name;

        $quotation->save();
        // dd($request->file('file'));
        // Guardarlo en storage/public
        //  dd($request->file('file')->store('public'));
        //  return back()->with('info', 'Cotización creada');
        return redirect()->route('projects.index')->with('info', 'Cotización guardada');
;    }

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
