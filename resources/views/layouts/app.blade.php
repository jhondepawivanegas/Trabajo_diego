<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>InOut</title>
        @vite('resources/css/app.css')
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="icon" type="image/x-icon" href="img/inOut.jpg">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
     
    </head>
    <body class="bg-gray-100">

    <header class="rounded-b-lg p-5 border-b bg-green-400 shadow flex justify-between items-center font-bold" style="border-bottom-left-radius: 32px; border-bottom-right-radius: 32px;">
    <a href="" class="flex items-center">        
        <img class="w-14 h-12 rounded-full" src="img/inOut.jpg" alt="">
        <h1 class="text-3xl text-white pl-3">InOut</h1>
    </a>
        <nav>
            <h2 class="text-white text-2xl text-center mb-4"> @yield('titulo')</h2>
        </nav>
   
        @auth()
        <nav class="flex gap-2 items-center" >
            <a class="font-bold uppercase text-gray-600" href="#">
            {{auth()->user()->user}}: <span class="font-bold"> {{auth()->user()->name}}</span>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit" class="hover:text-red-500 font-bold uppercase text-white flex">
                    Cerrar sesión
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>

                    </button>
                </form>   
            </a>
        </nav>
        @endauth
        
        @guest()
        <nav class="flex gap-2 items-center">
            @if (Request::is('registro'))
            <a class="flex items-center font-bold uppercase text-gray-600" href="{{route('login')}}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 p-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
            </svg>
            Login
            </a>
            @endif
            @if (Request::is('login','/'))
            <a class="flex items-center font-bold uppercase text-gray-600" href="{{route('registro')}}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 p-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
            </svg>
            Crear cuenta
            </a>
            @endif
        </nav>
        @endguest

    </header>

     <main class="container mx-auto mt-5 flex">

        @auth()
             <!-- Menú lateral a la izquierda -->
            @if (Request::is('reservas', 'elementos', 'usuarios', 'registroElementos', 'bodegas', 'registro', 'dashboard', '/', 'registroReservas'))
           
                <nav class="shadow-xl hover:shadow-2xl rounded-lg w-1/5 bg-gray-200 p-4 flex items-center justify-center" style="border-top-right-radius: 42px; border-bottom-right-radius: 42px;">
                    <ul>
                        <li class="mb-2 text-black text-xl font-bold uppercase">
                            <a href="{{route('reservas')}}" class="text-gray-600 hover:text-green-600 p-5 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 pr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                            </svg>
                            Reservas</a>
                        </li>
                        <li class="mb-2 text-black text-xl font-bold uppercase">
                            <a href="{{route('elementos')}}" class="flex text-gray-600 hover:text-green-600 p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 pr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                            </svg>
                            Elementos</a>
                        </li>
                        <li class="mb-2 text-black text-xl font-bold uppercase">
                            <a href="{{route('usuarios')}}" class="flex text-gray-600 hover:text-green-600 p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 pr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                            Usuarios</a>
                        </li>
                        <li class="mb-2 text-black text-xl font-bold uppercase">
                            <a href="{{route('bodegas')}}" class="flex text-gray-600 hover:text-green-600 p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 pr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                            </svg>
                            Bodegas</a>
                        </li>
                    </ul>
                </nav>
            @endif
        @endauth

            <!-- Contenido principal en el centro -->
            <div class="w-4/5">
                
                <h3 class="pl-10">
                @yield('contenido')
                </h3>
               
            </div>

                            <!-- Menú lateral derecho -->
            @if (Request::is( 'usuarios'))
                <nav class="shadow-xl hover:shadow-2xl flex items-center justify-center rounded-lg w-1/5 bg-gray-200 p-4" style="border-top-left-radius: 42px; border-bottom-left-radius: 42px;">  
                <ul>
                    <li>
                    <h2 class="flex items-center p-5 font-bold uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 pr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>   
                        Usuario</h2>
                    </li>
                        <li class="mb-2 justify-center flex">
                            <a href="" class="block text-gray-600 hover:text-green-600 p-5">Buscar</a>
                        </li>
                        <li class="mb-2 justify-center flex">
                            <a href="" class="block text-gray-600 hover:text-green-600 p-5">Modificar</a>
                        </li>
                        <li class="mb-2 justify-center flex">
                            <a href="" class="block text-gray-600 hover:text-green-600 p-5">Eliminar</a>
                        </li>
                        <li class="mb-2 justify-center flex">
                            <a href="{{route('registro')}}" class="block text-gray-600 hover:text-green-600 p-5">Registrar</a>
                        </li>
                    </ul>
                </nav>
            @endif

            @if (Request::is( 'reservas'))
                <nav class="shadow-xl hover:shadow-2xl flex items-center justify-center rounded-lg w-1/5 bg-gray-200 p-4" style="border-top-left-radius: 42px; border-bottom-left-radius: 42px;">   
                <ul>
                    <li>
                    <h2 class="flex p-5 font-bold uppercase items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 pr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                            </svg>    
                            Reserva</h2>
                    </li>
                        <li class="mb-2 justify-center flex">
                            <a href="{{route('registroReservas')}}" class="block text-gray-600 hover:text-green-600 p-5">Realizar</a>
                        </li>
                        <li class="mb-2 justify-center flex">
                            <a href="" class="block text-gray-600 hover:text-green-600 p-5">Aceptar</a>
                        </li>
                        <li class="mb-2 justify-center flex">
                            <a href="" class="block text-gray-600 hover:text-green-600 p-5">Rechazar</a>
                        </li>
                        <li class="mb-2 justify-center flex">
                            <a href="" class="block text-gray-600 hover:text-green-600 p-5">Modificar</a>
                        </li>
                    </ul>
                </nav>
            @endif

            @if (Request::is( 'elementos'))
                <nav class="shadow-xl hover:shadow-2xl flex items-center justify-center rounded-lg w-1/5 bg-gray-200 p-4" style="border-top-left-radius: 42px; border-bottom-left-radius: 42px;">   
                <ul>
                    <li>
                    <h2 class="flex justify-center p-5 font-bold uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                        </svg>
                        Elemento</h2>
                    </li>
                    <li class="mb-2 justify-center flex">
                            <a href="" class="block text-gray-600 hover:text-green-600 p-5">Buscar</a>
                        </li>
                        <li class="mb-2 justify-center flex">
                            <a href="" class="block text-gray-600 hover:text-green-600 p-5">Modificar</a>
                        </li>
                        <li class="mb-2 justify-center flex">
                            <a href="" class="block text-gray-600 hover:text-green-600 p-5">Dar de baja</a>
                        </li>
                        <li class="mb-2 justify-center flex">
                            <a href="{{route('registroElementos')}}" class="block text-gray-600 hover:text-green-600 p-5">Ingresar</a>
                        </li>
                    </ul>
                </nav>
            @endif

            @if (Request::is( 'bodegas'))
            <nav class="shadow-xl hover:shadow-2xl flex items-center justify-center rounded-lg w-1/5 bg-gray-200 p-4" style="border-top-left-radius: 42px; border-bottom-left-radius: 42px;">  
            <ul>
                <li>
                <h2 class="flex justify-center items-center p-5 font-bold uppercase">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 pr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75v6.75m0 0l-3-3m3 3l3-3m-8.25 6a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                    </svg>
                    Bodega</h2>
                </li>
                    <li class="mb-2 justify-center flex">
                        <a href="" class="block text-gray-600 hover:text-green-600 p-5">Modificar</a>
                    </li>
                    <li class="mb-2 justify-center flex">
                            <a href="" class="block text-gray-600 hover:text-green-600 p-5">Tecnológicos</a>
                        </li>
                        <li class="mb-2 justify-center flex">
                            <a href="" class="block text-gray-600 hover:text-green-600 p-5">Herramientas</a>
                        </li>
                        <li class="mb-2 justify-center flex">
                            <a href="" class="block text-gray-600 hover:text-green-600 p-5">Consumo</a>
                        </li>
                </ul>
            </nav>
            @endif
            </main>

   <footer class="text-center text-2xl p-5 text-gray-500 font-bold ">
    Inventario de Almacén - SENA - Sede Yamboró {{date ("Y")}}
   </footer>
       
    </body>
</html>