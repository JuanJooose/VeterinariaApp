<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Panel Veterinario') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('message'))
                <div class="border border-emerald-500 text-center font-bold bg-emerald-400
                            text-white py-2 rounded mb-2">
                    {{session('message')}}
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 text-gray-900 flex justify-between items-center px-6">
                    <h1 class="text-2xl font-bold text-start">
                        Gestionar Mascotas
                    </h1>
                    <a href="{{route('LayoutsPrincipal.Mascotas.create')}}"
                            class="bg-white border border-emerald-600 py-2 px-2 rounded font-bold text-center
                            text-green-500 text-xs capitalize flex justify-center items-center
                            hover:bg-green-500 hover:text-white hover:border-white hover:stroke-white
                                transition duration-500">
                            Añadir
                        {{-- <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="icon_add"
                            d="M15 12H12M12 12H9M12 12V9M12 12V15M17 21H7C4.79086 21 3 19.2091 3 17V7C3 4.79086 4.79086 3 7 3H17C19.2091 3 21 4.79086 21 7V17C21 19.2091 19.2091 21 17 21Z"
                            stroke-width="2" stroke-linecap="round" />
                        </svg> --}}
                    </a>
                </div>
            </div>
        </div>

        <div class="py-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <livewire:mostrar-mascotas />
                </div>
            </div>
        </div>

    </div>

</x-app-layout>


{{-- <div class="md:flex md:justify-evenly font-bold">
    <a href={{route('Mascotas.create')}}>Crear mascota</a>
    <a href="">Ver registros</a>
</div> --}}
