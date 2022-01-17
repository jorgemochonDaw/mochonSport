@extends('estilos.bootstrap')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <h2>Subir ropa</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('ropas.store') }}" method="post" enctype="multipart/form-data">
                @include('mochonSport.admin.ropas.form')
                <input type="submit" value="Enviar" class="mt-3 btn btn-success">
            </form>
        </div>
        <ul>
            <li><a href="{{ route('ropas.index') }}">Volver al catálogo ropas</a></li>
        </ul>
    </div>
@endsection
