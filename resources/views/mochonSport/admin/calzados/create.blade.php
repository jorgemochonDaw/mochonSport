@extends('estilos.bootstrap')
@section('content')
<div class="card mt-4">
    <div class="card-header">
       <h2>Subir calzado</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('calzados.store') }}" method="post"  enctype="multipart/form-data">
            @include('mochonSport.admin.calzados.form')
            <input type="submit" value="Enviar" class="mt-3 btn btn-success">
        </form>
    </div>
    <ul>
        <li><a href="{{ route('calzados.index') }}">Volver al catálogo calzados</a></li>
    </ul>
</div>
@endsection

