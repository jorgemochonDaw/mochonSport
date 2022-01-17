@extends('estilos.bootstrap')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <h1>Editar calzado {{ $calzado->id }}</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('calzados.update',$calzado->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('mochonSport.admin.calzados.form')
                <input type="submit" name="editarCalzado" value="Actualizar" class="mt-3 btn btn-success">
            </form>
        </div>
        <ul>
            <li><a href="{{ route('calzados.index') }}">Volver al catálogo calzados</a></li>
        </ul>
    </div>
@endsection
