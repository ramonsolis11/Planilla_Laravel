@extends('template')

@section('content')
    <h1 class="text-center">Registro de Empleados</h1>

    <form action="" method="POST">
        <label for="">Nombre Completo</label>
        <input type="text" class="form-control" name="nombre">

        <label for="">Telefono</label>
        <input type="text" class="form-control" name="telefono">

        <label for="">Salario</label>
        <input type="text" class="form-control" name="salario">

        <label for="">Seleccione un Departamento</label>
        <select name="id_departamento" class="form-control">
            <option value="">Seleccione...</option>
            @foreach ($department as $item)
                <option value="{{$item->id}}">{{$item->nombre}}</option>
            @endforeach
        </select>
        <input type="submit" class="btn btn-dark mt-4" value="Guardar Datos">
    </form>
@endsection
