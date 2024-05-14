<div class="flex flex-col">
    <table class="text-xs text-black capitalize text-center dark:text-black mb-8">
        <thead>
            <tr>
                <th class="border border-gray-600 font-bold bg-gray-100">Grupo Familiar</th>
                <th class="border border-gray-600 font-bold bg-gray-100">Persona</th>
                <th class="border border-gray-600 font-bold bg-gray-100">Documento</th>
                <th class="border border-gray-600 font-bold bg-gray-100">Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $dato)
            <tr>
                <td class="border border-gray-600 bg-gray-100">{{$dato->cLastname}}</td>
                <td class="border border-gray-600 bg-gray-100">{{$dato->name}}</td>
                <td class="border border-gray-600 bg-gray-100">{{$dato->document}}</td>
                <td class="border border-gray-600 bg-gray-100">{{$dato->phone}}</td>
                <td
                    class="border border-gray-600 bg-gray-100 text-xs py-2 px-2 font-bold text-center text-white capitalize items-center">
                    <a class="flex items-center justify-center"
                        href="{{route('LayoutsPrincipal.PersonaToCliente.edit',$dato->id)}}">

                        <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6 stroke-sky-500 justify-center items-center"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </td>
                <td
                    class="border border-gray-600  bg-gray-100 py-2 px-2 font-bold text-center text-xs capitalize items-center">
                    <button wire:click="$dispatch('eliminarCliente', { id: {{ $dato->id }} })">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 stroke-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- <div class="flex justify-center mt-5 bg-white text-black">
        {{$datos->links()}}
    </div> --}}
</div>
{{-- eliminarCliente({{ $dato->id }}) --}}
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('livewire:initialized', () => {
            Livewire.on('eliminarCliente', ({ id }) => {
                const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                },
                });
                Toast.fire({
                icon: "info",
                title: "Cliente Eliminado correctamente",
                });
                @this.call('eliminarCliente',id)

            })})
</script>
@endpush
