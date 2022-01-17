@extends('estilos.bootstrap')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <h2>Subir material deportivo</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('materiales.store') }}" method="post" enctype="multipart/form-data">
                @include('mochonSport.admin.materiales.form')
                <input type="submit" value="Enviar" class="mt-3 btn btn-success">
            </form>
        </div>
        <ul>
            <li><a href="{{ route('materiales.index') }}">Volver al catálogo ropas</a></li>
        </ul>
    </div>
@endsection
