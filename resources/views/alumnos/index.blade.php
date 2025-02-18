@extends('layout/template')

@section('title', 'Alumnos | Escuela')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Listado de alumnos</h2>
        <a href="{{url('alumnos/create')}}" class="btn btn-primary btn-sm">Nuevo Alumno</a>
        <table class="table">
            <thead class="table-success">
                <tr>
                    <th>#</th>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Nivel</th>
                    <th>Acciones</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{$alumno->id }}</td>
                    <td>{{$alumno->matricula}}</td>
                    <td>{{$alumno->nombre}}</td>
                    <td>{{$alumno->fecha_nacimiento}}</td>
                    <td>{{$alumno->telefono}}</td>
                    <td>{{$alumno->email}}</td>
                    <td>{{$alumno->nivel->nombre}}</td>
                    <td><a href="{{url('alumnos/'.$alumno->id.'/edit')}}" class="btn btn-warning btn-sn">Editar</a></td>
                    <td>
                        <form action="{{url('alumnos/'.$alumno->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" onclick="return confirm('¿Deseas eliminar este {{$alumno->nombre}}')" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>