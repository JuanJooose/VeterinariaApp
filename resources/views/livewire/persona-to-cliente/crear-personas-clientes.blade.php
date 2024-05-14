<form class="w-1/2 py-5" wire:submit.prevent='agregarAsociacion'>
    @csrf

    {{--? Grupo Familiar --}}
    <div class="mt-4">
        <x-input-label for="cliente" :value="__('Clientes')" />
        <select
            wire:model="cliente_id"
            id="cliente"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-200 focus:ring
                focus:ring-indigo-200 focus:ring-opacity-50 w-full">

            <option hidden> Selecciona el cliente </option>
            @foreach ($clientes as $cliente)
                <option
                    value="{{$cliente->id}}">{{$cliente->lastname}}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('cliente_asociado')" class="mt-2" />
    </div>

    {{--? Persona --}}
    {{--? wire:model.live.blur Cuando el input no está focus se activa este y manda el fetch --}}
    {{--? wire:model.live detecta cada cambio y mnada el FETCH--}}
    {{--? wire:model.throttle.100ms cada 100ms manda el FETCH de los cambios--}}
    <div class="flex justify-around">
        <div class="mt-4">
            <x-input-label for="persona" :value="__('Buscar similitudes')" />
            <x-text-input  id="persona" class="block mt-1 w-full" type="text" wire:model.live.debounce.500ms="personName"
                :value="old('personName')" placeholder="Persona"/>
            <x-input-error :messages="$errors->get('color_pelo')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-input-label for="persona" :value="__('Persona a asociar')" />
            <select
                wire:model="persona_id"
                id="persona"
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-200 focus:ring
                    focus:ring-indigo-200 focus:ring-opacity-50 w-full">
                <option hidden> Selecciona la persona </option>
                @foreach ($personas as $persona)
                    <option value="{{$persona->id}}">{{$persona->name}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('persona_id')" class="mt-2" />
        </div>
    </div>


    <x-primary-button class="mt-4 w-full justify-center">
        {{ __('Asociar') }}
    </x-primary-button>
</form>
