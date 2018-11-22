<?php

namespace App\Http\Controllers;
use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
	public function index()
	{
		$clientes = Cliente::all();

		return view('cliente/index', [
			'clientes' => $clientes
		]);
	}

	public function add(Request $request)
	{
		$cliente = new Cliente;

		$cliente->nif = $request->nif;
		$cliente->nombre = $request->nombre;
		$cliente->apellido = $request->apellido;
		$cliente->telefono = $request->telefono;

		$cliente->save();

		return $this->index();
	}

	public function reserva()
	{
		$clientes = Cliente::where($id);
	}

}
