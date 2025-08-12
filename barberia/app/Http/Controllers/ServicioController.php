<?php
namespace App\Http\Controllers;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios = Servicio::orderBy('created_at','desc')->get();
        return view('servicios.index', compact('servicios'));
    }

    public function show($id)
    {
        $servicio = Servicio::findOrFail($id);
        return view('servicios.show', compact('servicio'));
    }
}
