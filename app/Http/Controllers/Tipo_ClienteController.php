<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\Tipo_cliente;
use Illuminate\Http\Request;
use DB;


class Tipo_ClienteController extends Controller
{
    public function index()
    {
        $datos = Tipo_cliente::all();
        return view('TipoCliente.TipoCliente-list', compact('datos'));
    }
    public function create()
    {
        return view('TipoCliente.create-TipoCliente');
    }
    public function store(Request $request)
    {
        $tipo = new Tipo_cliente();
        $tipo->description = $request->post('description');
        $tipo->save();
        return redirect()->route("tipocliente.index")->with("Success");
    }
    public function show($id)
    {
        $tipo = Tipo_cliente::find($id);
        return view('TipoCliente.eliminar-TipoCliente',compact('tipo'));
    }
    public function edit($id)
    {
        $tipo = Tipo_cliente::find($id);
        return view('TipoCliente.edit-TipoCliente',compact('tipo'));
    }
    public function update(Request $request, $id)
    {
        $tipo = Tipo_cliente::find($id);
        $tipo->description = $request->post('description');
        $tipo->save();
        return redirect()->route("tipocliente.index")->with("Success");
    }
    public function destroy($id)
    {
        $tipo = Tipo_cliente::find($id);
        $tipo->delete();
        return redirect()->route("tipocliente.index")->with("Success");
    }
}
