@extends('layout/template')

@section('title', 'Editar | Alumno')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Editar Alumno</h2>
    </div>
</main>


<!-- ESTO ES PARA MOSTRAR ERRORES SI EXISTEN PERO LE FALTA PORQUE NO SALE COMO DEBERIA ESTO ES OPCIONAL-->
{{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> --}}


    {{-- @endif --}}

<form action="{{ url('alumnos/' .$alumno->id) }}"  method="post">
    @method('PUT')
    @csrf

    <div class="md-3 row">
        <label for="matricula" class="col-sm-2 col-form-label text-end">Matricula:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="matricula" id="matricula" value="{{$alumno->matricula }}" required>
        </div>
    </div>
    <br>

    <div class="md-3 row">
        <label for="nombre" class="col-sm-2 col-form-label text-end">Nombre completo:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $alumno->nombre }}" required>
        </div>
    </div>
    <br>

    <div class="md-3 row">
        <label for="fecha" class="col-sm-2 col-form-label text-end">Fecha de Nacimiento:</label>
        <div class="col-sm-5">
            <input type="date" class="form-control" name="fecha" id="fecha" value="{{ $alumno->fecha_nacimiento }}" required>
        </div>
    </div>
    <br>

    <div class="md-3 row">
        <label for="telefono" class="col-sm-2 col-form-label text-end">Telefono:</label>
        <div class="col-sm-5 mt-2">
            <input type="text" class="form-control" name="telefono" id="telefono" value="{{ $alumno->telefono }}" required>
        </div>
    </div>

    <br>
    <div class="md-3 row">
        <label for="email" class="col-sm-2 col-form-label text-end">Email:</label>
        <div class="col-sm-5">
            <input type="email" class="form-control" name="email" id="email" value="{{ $alumno->email }}" required>
        </div>
    </div>

    <br>
    <div class="md-3 row">
        <label for="nivel" class="col-sm-2 col-form-label text-end">Nivel:</label>
        <div class="col-sm-5">
            <select name="nivel" id="nivel"     class="form-select" required>
            <option value="">Seleccionar nivel</option>
            
            @foreach($niveles as $nivel)
                <option value="{{ $nivel->id }}">{{ $nivel->nombre }}</option>
                @endforeach
            </select>
        </div>
    </div>
     <a href="{{url('alumnos')}}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>
</form>