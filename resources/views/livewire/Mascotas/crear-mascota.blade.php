<form class="w-full" wire:submit.prevent='crearMascota'>
    @csrf

    {{--? Nombre de la mascota --}}
    <div>
        <x-input-label for="name" :value="__('Nombre de la mascota')" />

        <x-text-input
            id="name"
            class="block mt-1 w-full"
            placeholder="Nombre de la Mascota"
            type="text"
            wire:model="name"
            :value="old('name')"
            autofocus
            autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    {{--? Cliente asociado --}}
    <div class="mt-4">
        <x-input-label for="cliente_asociado" :value="__('Cliente asociado a la mascota')" />

        <select
            wire:model="cliente_id"
            id="cliente_asociado"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-200 focus:ring
                focus:ring-indigo-200 focus:ring-opacity-50 w-full">

            <option hidden> Selecciona el cliente a asociar </option>
            @foreach ($clientes as $cliente)
                <option value="{{$cliente->id}}">{{$cliente->lastname}}</option>
            @endforeach
        </select>

        <x-input-error :messages="$errors->get('cliente_asociado')" class="mt-2" />
    </div>

    {{--? Especie --}}
    <div class="mt-4">
        <x-input-label for="especie" :value="__('Especie')" />

        <select
            wire:model="especie_id"
            id="especie"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-200 focus:ring
                focus:ring-indigo-200 focus:ring-opacity-50 w-full">

            <option hidden> Selecciona el tipo de especie </option>
            @foreach ($especies as $especie)
                <option value="{{$especie->id}}">{{$especie->especie}}</option>
            @endforeach
        </select>


        <x-input-error :messages="$errors->get('especie')" class="mt-2" />
    </div>


    {{--? Raza --}}
    <div class="mt-4">
        <x-input-label for="raza" :value="__('Raza')" />

        <x-text-input id="raza" class="block mt-1 w-full" type="text" wire:model="raza" placeholder="Raza" />
        <x-input-error :messages="$errors->get('raza')" class="mt-2" />
    </div>

    {{--? Color de pelo --}}
    <div class="mt-4">
        <x-input-label for="color_pelo" :value="__('Color de pelo')" />

        <x-text-input id="color_pelo" class="block mt-1 w-full" type="text" wire:model="color_pelo"
            :value="old('color_pelo')" placeholder="Color de pelo" />

        <x-input-error :messages="$errors->get('color_pelo')" class="mt-2" />
    </div>

    {{--? Fecha de nacimiento --}}
    <div class="mt-4">
        <x-input-label for="fecha_nacimiento" :value="__('Fecha de nacimiento')" />

        <x-text-input id="fecha_nacimiento" class="block mt-1 w-full" type="date" wire:model="fecha_nacimiento"
            :value="old('fecha_nacimiento')" placeholder="Fecha de nacimiento"/>

        <x-input-error :messages="$errors->get('fecha_nacimiento')" class="mt-2" />
    </div>

    {{--? Peso promedio --}}
    <div class="mt-4">
        <x-input-label for="peso_promedio" :value="__('Peso promedio de la mascota')" />

        <x-text-input id="peso_promedio" class="block mt-1 w-full" type="text" wire:model="peso_promedio"
            :value="old('peso_promedio')" placeholder="Peso promedio de la mascota" />

        <x-input-error :messages="$errors->get('peso_promedio')" class="mt-2" />
    </div>

    {{--? Peso actual --}}
    <div class="mt-4">
        <x-input-label for="peso_actual" :value="__('Peso Actual de la mascota')" />

        <x-text-input id="peso_actual" class="block mt-1 w-full" type="text" wire:model="peso_actual"
            :value="old('peso_actual')" placeholder="Peso actual de la mascota" />

        <x-input-error :messages="$errors->get('peso_actual')" class="mt-2" />
    </div>

    <x-primary-button class="mt-4 w-full justify-center">
        {{ __('Añadir Mascota') }}
    </x-primary-button>
</form>
