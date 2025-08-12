@extends('layouts.app')

@section('content')
<h1 class="mb-4">Servicios</h1>

<div class="row">
    @foreach($servicios as $servicio)
        <div class="col-md-6 mb-4">
            <div class="card">
                @if($servicio->imagen)
                    <img src="{{ asset('storage/'.$servicio->imagen) }}" class="card-img-top" alt="{{$servicio->titulo}}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $servicio->titulo }}</h5>
                    <p class="card-text">{{ $servicio->descripcion }}</p>
                    <a href="#" class="btn btn-primary">Reservar</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
