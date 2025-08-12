@extends('layouts.app')

@section('content')
<h1>Registrar Cliente</h1>
<form action="{{ route('clientes.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Teléfono</label>
        <input type="text" name="telefono" class="form-control">
    </div>
    <button class="btn btn-primary">Registrar</button>
</form>
@endsection
