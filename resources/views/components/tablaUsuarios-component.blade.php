<!-- component -->


@props(['usuarios'])
<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nombre</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Departamento</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Puesto</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Número Telefónico</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
            </tr>
        </thead>


        <tbody class="divide-y divide-gray-100 border-t border-gray-100">

            @foreach ($usuarios as $usuario)
                <tr class="hover:bg-gray-50">
                    <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                        <div class="relative h-10 w-10">
                            <img class="h-full w-full rounded-full object-cover object-center"
                                src="{{ asset('images/botaspypNegro.png') }}" />

                        </div>
                        <div class="text-sm">
                            <div class="font-medium text-gray-700">{{ $usuario->nombre . ' ' . $usuario->apellidos }}
                            </div>
                            <div class="text-gray-400">{{ $usuario->correo }}</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        <span
                            class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">

                            {{ $usuario->departamento }}
                        </span>
                    </td>
                    <td class="px-6 py-4">{{ $usuario->puesto }}</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">

                            <span
                                class="inline-flex items-center gap-1 rounded-full bg-violet-50 px-2 py-1 text-xs font-semibold text-violet-600">
                                {{ $usuario->numero_telefonico }}
                            </span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex justify-end gap-4">
                            
                             <button id="openModalEditUsuarios"
                             data-target="#editarUsuario{{ $usuario->id_empleado }}"
                             
                                >


                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">



                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                            </button>
                            
                            <button  id="" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                                
                            </button>

                            @include('administracion.modalEditUsuarios')
                        </div>
                    </td>
                </tr>
            @endforeach



        </tbody>
    </table>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
      // Botón para abrir el modal
      const openModalEditUsuariosBtn = document.getElementById('openModalEditUsuarios');
        // Botones para cerrar el modal
        const closeModalEditUsuariosBtns = document.querySelectorAll('#closeModalEditUsuarios');
        // Modal
        const modalEditUsuarios = document.getElementById('modalEditUsuarios');

        // Función para abrir el modal
        function openModalEditUsuarios() {
            modalEditUsuarios.classList.remove('hidden');
        }

        // Función para cerrar el modal
        function closeModalEditUsuarios() {
            modalEditUsuarios.classList.add('hidden');
        }

        // Agrega un evento de clic al botón para abrir el modal
        openModalEditUsuariosBtn.addEventListener('click', openModalEditUsuarios);

        // Agrega un evento de clic a todos los botones para cerrar el modal
        closeModalEditUsuariosBtns.forEach(btn => {
            btn.addEventListener('click', closeModalEditUsuarios);
        });
        // Función para manejar el evento de teclado
        function handleKeyPress(event) {
            if (event.key === "Escape") {
                closeModalEditUsuarios(); // Cerrar el modal cuando se presione la tecla "Escape"
            }
        }

        // Adjuntar evento de teclado al documento
        document.addEventListener("keydown", handleKeyPress);
    })
</script>