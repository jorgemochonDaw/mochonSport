@extends('estilos.bootstrap')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <h1>Editar ropa {{ $ropa->id }}</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('ropas.update',$ropa->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('mochonSport.admin.ropas.form')
                <input type="submit" name="editarRopa" value="Actualizar" class="mt-3 btn btn-success">
            </form>
        </div>
        <ul>
            <li><a href="{{ route('ropas.index') }}">Volver al catálogo ropas</a></li>
        </ul>
    </div>
@endsection
