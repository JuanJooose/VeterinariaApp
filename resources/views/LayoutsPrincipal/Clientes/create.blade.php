<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Panel Veterinario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col">
                        <a class="bg-white border border-slate-600 py-2 px-2 rounded font-bold text-center
                        text-slate-500 text-xs capitalize flex items-center w-14
                        hover:bg-slate-400 hover:text-white hover:border-slate-400 hover:stroke-white
                            transition duration-500"
                            href="{{route('LayoutsPrincipal.Clientes.index')}}"> Volver</a>
                        <h1 class=" text-2xl font-bold text-center justify-center">
                            Añadir nuevo cliente
                        </h1>
                    </div>
                    <div class="flex justify-center p-5">
                        @livewire('clientes\crear-cliente')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
