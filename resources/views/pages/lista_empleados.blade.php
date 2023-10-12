@extends('template')

@section('content')
<div>
    {{-- el section(content) representa el yield de la vista template --}}
    <h1 class="text-center text-success">Gestion de Empleados</h1>

    <a href="#" class="btn btn-primary mb-2"><i class='bx bxs-user-plus'></i></a>

    <table class="table">
        <thead>
            <tr>
                <th>Empleado</th>
                <th>Telefono</th>
                <th>Salario</th>
                <th>Departamento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employee as $item)
            <tr>
                <td>{{$item->nombre}}</td>
                <td>{{$item->telefono}}</td>
                <td>${{$item->salario}}</td>
                <td>{{$item->id_departamento}}</td>
                <td>
                    <button class="btn btn-warning"><i class="bx bxs-edit"></i></button>
                    <button class="btn btn-danger"><i class="bx bxs-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>
@endsection
