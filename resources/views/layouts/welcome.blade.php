<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>La Mascota Felíz</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-200">
    {{-- grid grid-cols-2 items-center gap-2 py-2 md:grid-rows-1 --}}
    <header class="grid grid-cols-2 items-center gap-2 py-2 md:grid-rows-1 bg-teal-600 shadow-md">
        <div class="container mx-auto">
            <x-application-logo></x-application-logo>
        </div>
        @if (Route::has('login'))
        <nav class="flex flex-1 justify-end container mx-auto">
            @auth
            <a href="{{ url('LayoutsPrincipal/Mascotas/index') }}" class="rounded-md px-3 py-2 text-white font-bold ring-1 ring-transparent transition
                    hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                Ir al panel
            </a>
            @else
            <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-white font-bold ring-1 ring-transparent transition
                    hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                Iniciar sesión
            </a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-white font-bold ring-1 ring-transparent transition
                    hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                Registrarse
            </a>
            @endif
            @endauth
        </nav>
        @endif
    </header>


    <main class="py-2">
        <div class="flex flex-col md:flex-row items-center pb-4 container mx-auto">

            <section class="pt-6 container mx-auto xl:px-6">
                <h1 class="text-2xl text-center font-bold pb-4">Acerca de nosotros</h1>
                <p class="text-lg">En <span class="font-bold">La mascota Feliz</span> nuestra pasión es cuidar y proteger a tus
                    queridos compañeros peludos.
                    somos una clinica veterinaria dedicada a brindar atención excepcional a tus mascotas combinando
                    experiencia médica con un toque de cariño y compresión</p>
            </section>

            <section class="container mx-auto xl:px-6">
                <h1 class="text-2xl text-center font-bold pb-4">Nuestra misión</h1>
                <p class="text-lg">Nuestra misión es simple: promover la salud y el bienestar de las mascotas. Creemos que cada patita
                    merece una vida feliz y saludable. Desde cachorros juguetones hasta gatos sabios, estamos aquí para
                    apoyarte en cada etapa de su vida.</p>
            </section>
        </div>

        <section class="container mx-auto xl:px-6">
            <h1 class="text-2xl text-center font-bold pb-4">Nuestros servicios</h1>
            <ul class="text-lg">
                <li>Service #1</li>
                <li>Service #2</li>
                <li>Service #3</li>
                <li>Service #4</li>
                <li>Service #4</li>
                <li>Service #5</li>
                <li>Service #6</li>
            </ul>
        </section>

    </main>

    <footer class="bg-teal-600">

    </footer>
</body>

</html>
