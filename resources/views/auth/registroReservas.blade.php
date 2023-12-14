@extends('layouts.app')

@section('titulo')
Registro de Reservas
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
    <form action="{{ route('registroReservas') }}" method="post">
                @csrf
                <div class="mb-5">
                    <label for="categoria" class="mb-2 block uppercase text-gray-500 font-bold">Categoría</label>
                    <select id="categoria" name="categoria" class="border p-3 w-full rounded-lg bg-blue-100 border-green-400">
                       
                        <option value="aseo">Elementos de Aseo</option>
                        <option value="quimicos">Químicos</option>
                        <option value="herramientas">Herramientas</option>
                        <option value="oficina">Oficina</option>
                        <option value="tecnologicos">Tecnológicos</option>
                    </select>
                    @error('categoria')
                    <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="elemento" class="mb-2 block uppercase text-gray-500 font-bold">Elemento</label>
                    <select id="elemento" name="elemento" class="border p-3 w-full rounded-lg bg-blue-100 border-green-400">
                       
                        <option value="computador">Computador de escritorio</option>
                        <option value="archivador">Archivador</option>
                        <option value="resma_oficio">Resma Oficio</option>
                        <option value="jabon_polvo">Jabón en polvo</option>
                        <option value="trapero">Trapero</option>
                        <option value="escoba">Escoba</option>
                        <option value="video_beam">Videobeam</option>
                        <option value="router">Router</option>
                        <option value="escritorio">Escritorio MDF</option>
                        <option value="cloro">Cloro</option>
                        <option value="insecticida">Insecticida</option>
                        <option value="abono">Abono</option>
                        <option value="taladro">Taladro</option>
                        <option value="soldador">Soldador</option>
                        <option value="guadaña">Guadaña</option>
                    </select>
                    @error('elemento')
                    <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">{{ $message }}</p>
                    @enderror
                </div>
            <div class="mb-5">
                <label for="cantidad" class="mb-2 block uppercase text-gray-500 font-bold">Cantidad</label>
                <select id="cantidad" name="cantidad" class="border p-3 w-full rounded-lg bg-blue-100 border-green-400">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                </select>
                @error('cantidad')
                <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="horaDevolucion" class="mb-2 block uppercase text-gray-500 font-bold">Hora de devolución</label>
                <input id="horaDevolucion" name="horaDevolucion" placeholder="Hora de devolución" type="time" class="border p-3 w-full rounded-lg bg-blue-100 border-green-400">
                @error('horaDevolucion')
                <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="usuario" class="mb-2 block uppercase text-gray-500 font-bold">Usuario</label>
                <input id="usuario" name="usuario" placeholder="usuario" type="text" class="border p-3 w-full rounded-lg bg-blue-100 border-green-400">
                @error('usuario')
                <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="estado" class="mb-2 block uppercase text-gray-500 font-bold">Estado</label>
                <select id="estado" name="estado" class="border p-3 w-full rounded-lg bg-blue-100 border-green-400">
                <option value="solicitado">Solicitado</option>
                <option value="aceptado">Aceptado</option>
                @error('estado')
                <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">{{ $message }}</p>
                @enderror
            </div>
            <input type="submit" value="Registrar" class="mt-2 bg-sky-700 hover:bg-green-600 w-full p-3 text-white rounded-lg uppercase">
        </form>

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const categoriaSelect = document.getElementById("categoria");
        const elementoSelect = document.getElementById("elemento");

        // Define un objeto con las opciones de "Elemento" para cada categoría
        const opcionesElemento = {
            aseo: ["Jabón en polvo", "Escoba", "Trapero"],
            quimicos: ["Cloro", "Insecticida", "Abono"],
            herramientas: ["Taladro", "Guadaña", "Soldador"],
            oficina: ["Resma", "Escritorio MDF", "Archivador"],
            tecnologicos: ["Router", "Computador de escritorio", "Videobeam"],
        };

        // Función para actualizar las opciones de "Elemento" según la categoría seleccionada
        function actualizarOpcionesElemento() {
            const categoriaSeleccionada = categoriaSelect.value;
            elementoSelect.innerHTML = ""; // Limpiar opciones anteriores

            // Generar las nuevas opciones de "Elemento" según la categoría
            opcionesElemento[categoriaSeleccionada].forEach(opcion => {
                const option = document.createElement("option");
                option.value = opcion.toLowerCase().replace(/ /g, "_"); // Convertir a minúsculas y reemplazar espacios
                option.textContent = opcion;
                elementoSelect.appendChild(option);
            });
        }

        // Escuchar cambios en la selección de "Categoría"
        categoriaSelect.addEventListener("change", actualizarOpcionesElemento);

        // Inicializar las opciones de "Elemento" en función de la categoría predeterminada
        actualizarOpcionesElemento();
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("categoria").focus();
    });
</script>

@endsection
