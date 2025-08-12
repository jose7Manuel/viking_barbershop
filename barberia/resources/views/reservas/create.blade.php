@extends('layouts.app')

@section('content')
<h1>Crear Reserva</h1>
<form action="{{ route('reservas.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label">Cliente</label>
        <select name="cliente_id" class="form-select" required>
            <option value="">-- seleccionar --</option>
            @foreach($clientes as $c)
                <option value="{{ $c->id }}">{{ $c->nombre }} - {{ $c->email }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Fecha y hora</label>
        <input type="datetime-local" name="fecha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Servicio</label>
        <input type="text" name="servicio" class="form-control" required>
    </div>
    <button class="btn btn-success">Reservar</button>
</form>
@endsection
