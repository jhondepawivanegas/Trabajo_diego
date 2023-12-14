@extends('layouts.app')

@section('titulo')
Registro de Elementos
@endsection

@section('contenido')

<div class="md:flex mt-5">
    <div class="md:w-1/2 p-9">
        <img class="rounded-lg" src="{{ asset('img/registrar.jpg') }}" alt="Imagen de Registro">
            @if (session('success'))
            <div class="alert alert-success text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 pr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                </svg>
            {{ session('success') }}
            </div>
            @endif
    </div>
    <div class="md:w-1/2 bg-white p-6 rounded-lg shadow-xl" style="border-top: 3px solid #00FF00;">
        <form action="{{ route('registroElementos') }}" method="post">
            @csrf
            <div class="mb-5">
                <label for="codigo" class="mb-2 block uppercase text-gray-500 font-bold">Código</label>
                <input id="codigo" name="codigo" placeholder="Código" type="text" class="border p-3 w-full rounded-lg bg-blue-100 border-green-400">
                @error('codigo')
                <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="nombre" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                <input id="nombre" name="nombre" placeholder="Nombre" type="text" class="border p-3 w-full rounded-lg bg-blue-100 border-green-400">
                @error('nombre')
                <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="tipo" class="mb-2 block uppercase text-gray-500 font-bold">Tipo</label>
                <select id="tipo" name="tipo" class="border p-3 w-full rounded-lg bg-blue-100 border-green-400">
                <option value="Consumible">Consumible</option>
                <option value="Devolutivo">Devolutivo</option>
                </select>
                @error('tipo')
                <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="categoria" class="mb-2 block uppercase text-gray-500 font-bold">Categoría</label>
                <select id="categoria" name="categoria" class="border p-3 w-full rounded-lg bg-blue-100 border-green-400">
                <option value="Herramientas">Herramientas</option>
                <option value="Quimicos">Químicos</option>
                <option value="Aseo">Elementos de Aseo</option>
                <option value="Tecnologicos">Tecnológicos</option>
                <option value="Oficina">Oficina</option>
                </select>
                @error('categoria')
                <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="ubicacion" class="mb-2 block uppercase text-gray-500 font-bold">Ubicación</label>
                <select id="ubicacion" name="ubicacion" class="border p-3 w-full rounded-lg bg-blue-100 border-green-400">
                <option value="Bodega1-Room1">Bodega1-Room1</option>
                <option value="Bodega1-Room2">Bodega1-Room2</option>
                <option value="Bodega2-Room1">Bodega2-Room1</option>
                <option value="Bodega2-Room2">Bodega2-Room2</option>
                </select>
                @error('ubicacion')
                <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="fechaC" class="mb-2 block uppercase text-gray-500 font-bold">Fecha de Caducidad</label>
                <input id="fechaC" name="fechaC" placeholder="Fecha de Caducidad" type="date" class="border p-3 w-full rounded-lg bg-blue-100 border-green-400">
                @error('fechaC')
                <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="cantidad" class="mb-2 block uppercase text-gray-500 font-bold">Cantidad</label>
                <input id="cantidad" name="cantidad" placeholder="Cantidad" type="number" class="border p-3 w-full rounded-lg bg-blue-100 border-green-400">
                @error('cantidad')
                <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">{{ $message }}</p>
                @enderror
            </div>
            <input type="submit" value="Registrar" class="bg-sky-700 hover:bg-green-600 w-full p-3 text-white rounded-lg uppercase">
        </form>

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("codigo").focus();
    });
</script>

@endsection
