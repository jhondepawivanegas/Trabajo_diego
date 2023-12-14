@extends('layouts.app')

@section('titulo')
Reservas InOut
@endsection

@section('contenido')

<h1 class="text-4xl text-center font-bold mb-4 text-gray-500">Lista de Reservas</h1>


<table class="w-full border border-collapse">
    <thead>
        <tr class="bg-gray-300">
            <th class="border p-2">ID</th>
            <th class="border p-2">Elemento</th>
            <th class="border p-2">Cantidad</th>
            <th class="border p-2">Hora de Devolución</th>
            <th class="border p-2">Usuario</th>
            <th class="border p-2">Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservas as $reserva)
            <tr class="hover:bg-gray-200 cursor-pointer">
                <td class="border pl-2 text-center">{{ $reserva->id }}</td>
                <td class="border p-2 text-center">{{ $reserva->elemento }}</td>
                <td class="border p-2 text-center">{{ $reserva->cantidad }}</td>
                <td class="border p-2 text-center">{{ $reserva->horaDevolucion }}</td>
                <td class="border p-2 text-center">{{ $reserva->usuario }}</td>
                <td class="border p-2 text-center">{{ $reserva->estado }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection