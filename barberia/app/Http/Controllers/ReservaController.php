<?php
namespace App\Http\Controllers;
use App\Models\Reserva;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function create()
    {
        $clientes = Cliente::all();
        return view('reservas.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'fecha' => 'required|date',
            'servicio' => 'required|string|max:255',
        ]);

        Reserva::create($data);
        return redirect()->back()->with('success','Reserva creada correctamente.');
    }
}
