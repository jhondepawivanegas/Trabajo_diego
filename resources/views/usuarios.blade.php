@extends('layouts.app')

@section('titulo')
Usuarios InOut
@endsection

@section('contenido')
<h1 class="text-4xl text-center font-bold mb-4 text-gray-500">Lista de usuarios</h1>

<table class="w-full border border-collapse">
    <thead>
        <tr class="bg-gray-300">
            <th class="border p-2">ID</th>
            <th class="border p-2">Nombre</th>
            <th class="border p-2">Código de Usuario</th>
            <th class="border p-2">Tipo de Usuario</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr class="hover:bg-gray-200 cursor-pointer">
                <td class="border pl-2 text-center">{{ $usuario->id }}</td>
                <td class="border p-2 text-center">{{ $usuario->name }}</td>
                <td class="border p-2 text-center">{{ $usuario->code }}</td>
                <td class="border p-2 text-center">{{ $usuario->user }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
