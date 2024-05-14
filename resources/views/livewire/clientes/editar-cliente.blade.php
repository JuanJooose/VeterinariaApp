<form class="w-1/2 py-5" wire:submit.prevent='editarCliente'>
    @csrf

    {{--? lastname del cliente --}}
    <div>
        <x-input-label for="lastname" :value="__('Apellido del cliente')" />

        <x-text-input
            id="lastname"
            class="block mt-1 w-full"
            placeholder="Apellido del cliente"
            type="text"
            wire:model="lastname"
            :value="old('lastname')"
            autofocus
            autocomplete="lastname" />
        <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
    </div>

    {{--? Raza --}}
    <div class="mt-4">
        <x-input-label for="bankAccount" :value="__('cuenta de banco')" />

        <x-text-input id="bankAccount" class="block mt-1 w-full" type="text" wire:model="bankAccount" placeholder="Cuenta de banco" />
        <x-input-error :messages="$errors->get('bankAccount')" class="mt-2" />
    </div>

    {{--? Color de pelo --}}
    <div class="mt-4">
        <x-input-label for="address" :value="__('Dirección')" />

        <x-text-input id="address" class="block mt-1 w-full" type="text" wire:model="address"
            :value="old('address')" placeholder="Dirección" />

        <x-input-error :messages="$errors->get('address')" class="mt-2" />
    </div>


    {{--? Peso promedio --}}
    <div class="mt-4">
        <x-input-label for="phone" :value="__('Teléfono')" />

        <x-text-input id="phone" class="block mt-1 w-full" type="text" wire:model="phone"
            :value="old('phone')" placeholder="Teléfono" />

        <x-input-error :messages="$errors->get('peso_promedio')" class="mt-2" />
    </div>

    <x-primary-button class="mt-4 w-full justify-center">
        {{ __('Actualizar información del cliente') }}
    </x-primary-button>
</form>
