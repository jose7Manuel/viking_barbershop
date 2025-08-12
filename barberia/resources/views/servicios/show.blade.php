@extends('layouts.app')

@section('content')
<h1>{{ $servicio->titulo }}</h1>
@if($servicio->imagen)
    <img src="{{ asset('storage/'.$servicio->imagen) }}" class="img-fluid mb-3">
@endif
<p>{{ $servicio->descripcion }}</p>
<a href="{{ route('reservas.create') }}" class="btn btn-success">Reservar este servicio</a>
@endsection
