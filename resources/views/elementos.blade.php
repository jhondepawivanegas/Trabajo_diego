@extends('layouts.app')

@section('titulo')
Elementos InOut
@endsection

@section('contenido')
<h1 class="text-4xl text-center font-bold mb-4 text-gray-500">Lista de Elementos</h1>

<table class="w-full border border-collapse">
    <thead>
        <tr class="bg-gray-300">
            <th class="border p-2">Codigo</th>
            <th class="border p-2">Nombre</th>
            <th class="border p-2">Tipo</th>
            <th class="border p-2">Categoria</th>
            <th class="border p-2">Ubicación</th>
            <th class="border p-2">Fecha Caducidad</th>
            <th class="border p-2">Cantidad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($elementos as $elemento)
            <tr class="hover:bg-gray-200 cursor-pointer">
                <td class="border pl-2 text-center">{{ $elemento->codigo }}</td>
                <td class="border p-2 text-center">{{ $elemento->nombre }}</td>
                <td class="border p-2 text-center">{{ $elemento->tipo }}</td>
                <td class="border p-2 text-center">{{ $elemento->categoria }}</td>
                <td class="border p-2 text-center">{{ $elemento->ubicacion }}</td>
                <td class="border p-2 text-center">{{ $elemento->fechaC }}</td>
                <td class="border p-2 text-center">{{ $elemento->cantidad }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection