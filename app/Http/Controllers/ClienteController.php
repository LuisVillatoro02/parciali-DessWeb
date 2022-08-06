<?php

namespace App\Http\Controllers;

use App\Models\Tipo_cliente;
use App\Models\Cliente;
use Illuminate\Http\Request;
use DB;


class ClienteController extends Controller
{
    public function index()
    {
        $datos = DB::table('cliente as cu')
            ->join('tipo_cliente as ca','cu.id_cliente','=','ca.id')
            ->select('cu.id','cu.name','cu.apellido','cu.correo','cu.dpi','cu.updated_at','cu.created_at','ca.description')->get();
        return view('Cliente.cliente-list', compact('datos'));
    }
    public function create()
    {
        $datos = Tipo_cliente::all();
        return view('Cliente.create-cliente',compact('datos'));
    }
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->name = $request->post('name');
        $cliente->apellido= $request->post('apellido');
        $cliente->correo = $request->post('correo');
        $cliente->dpi = $request->post('dpi');
        $cliente->id_cliente = $request->post('id_cliente');
        $cliente->save();
        return redirect()->route("cliente.index")->with("Success");
    }
    public function show($id)
    {

        $cliente = Cliente::find($id);
        $datos = Tipo_cliente::all();
        return view('Cliente.eliminar-cliente',compact('cliente','datos'));
    }
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        $datos = Tipo_cliente::all();
        return view('Cliente.edit-cliente',compact('cliente','datos'));
    }
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->name = $request->post('name');
        $cliente->apellido = $request->post('apellido');
        $cliente->correo = $request->post('correo');
        $cliente->dpi = $request->post('dpi');
        $cliente->id_cliente = $request->post('id_cliente');
        $cliente->save();
        return redirect()->route("cliente.index")->with("Success");
    }
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route("cliente.index")->with("Success");
    }
}
