@extends('estilos.bootstrap')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <h1>Editar material {{ $material->id }}</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('materiales.update',$material->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('mochonSport.admin.materiales.form')
                <input type="submit" name="editarMaterial" value="Actualizar" class="mt-3 btn btn-success">
            </form>
        </div>
        <ul>
            <li><a href="{{ route('materiales.index') }}">Volver al catálogo materiales</a></li>
        </ul>
    </div>
@endsection

