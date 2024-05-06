<tablaVentas-component>

    <section class="container px-4 mx-auto mt-10">
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-cyan-300  md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 ">
                            <thead class="bg-gray-50 ">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 :text-gray-400">
                                        <div class="flex items-center gap-x-3">
                                            <input type="checkbox" class="text-blue-500 border-gray-300 rounded ">
                                            <button class="flex items-center gap-x-2">
                                                <span>Invoice</span>

                                                <svg class="h-3" viewBox="0 0 10 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                                        fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                    <path
                                                        d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                        fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                    <path
                                                        d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                        fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                                </svg>
                                            </button>
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Date
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Status
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Customer
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Purchase
                                    </th>

                                    <th scope="col" class="relative py-3.5 px-4">
                                        <span class="sr-only">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 ">

                                @foreach ($ordenesTrabajo as $ordenTrabajo)
                                    <tr>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 ">
                                            <div class="inline-flex items-center gap-x-3">
                                                <input type="checkbox" class="text-blue-500 border-gray-300 rounded ">

                                                <span>{{ $ordenTrabajo->id }}</span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                            {{ $ordenTrabajo->fecha }}</td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <div
                                                class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 ">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                                <h2 class="text-sm font-normal">{{ $ordenTrabajo->anticipo }}</h2>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-8 h-8 rounded-full"
                                                    src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                                    alt="">
                                                <div>
                                                    <h2 class="text-sm font-medium text-gray-800 ">
                                                        {{ $ordenTrabajo->nombre . ' ' . $ordenTrabajo->apellidos }}
                                                    </h2>
                                                    <p class="text-xs font-normal text-gray-600 ">
                                                        {{ $ordenTrabajo->correo }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                            {{ $ordenTrabajo->tipo }}</td>

                                        <td class="px-4 py-4 text-sm whitespace-nowrap">

                                            <div class="flex items-center gap-x-6">
                                               
                                                <button data-target="#editarVenta{{ $ordenTrabajo->id }}"
                                                    data-id="{{ $ordenTrabajo->id }}"
                                                    class="openModalEdit text-gray-500 transition-colors duration-200  hover:text-indigo-500 focus:outline-none">

                                                    Editar
                                                </button>
                                                
                                                <a onclick="confirmDelete('{{ $ordenTrabajo->id }}')"
                                                    class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                    Eliminar
                                                </button>
                                                
                                            </div>

                                        </td>
                                    </tr>
                                    @include('ventas.modalEditVentas')
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </section>

</tablaVentas-component>


<script>
    //Confirmar eliminación
    function confirmDelete(id) {
        alertify.confirm("Eliminar Venta", "¿Estás seguro de que quieres eliminar esta venta?", function(e) {
            if (e) {
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = `/ventas/${id}`;
                form.innerHTML = `@csrf @method('DELETE')`;
                document.body.appendChild(form);
                form.submit();
            } else {}
        }, function() {}).set('labels', {
            ok: 'Eliminar',
            cancel: 'Cancelar'
        }); // Personaliza los textos de los botones

    }


    document.addEventListener('DOMContentLoaded', function() {
        // Botón para abrir el modal
        const openModalEditBtns = document.querySelectorAll('.openModalEdit');
        // Botones para cerrar el modal
        const closeModalEditBtns = document.querySelectorAll('#closeModalEdit');
        // Modal
        const modalEdit = document.querySelector('.modalEdit');

        // Función para abrir el modal
        function openModalEdit(event) {
            // Obtener el ID del elemento seleccionado
            const id = event.target.dataset.id;
            // Pasar el ID al modal de edición
            const modal = document.querySelector(event.target.dataset.target);
            modal.dataset.id = id;
            // Mostrar el modal de edición
            modal.classList.remove('hidden');
        }

        // Función para cerrar el modal
        function closeModalEdit() {
            modalEdit.classList.add('hidden');
        }

        // Agrega un evento de clic a todos los botones para abrir el modal
        openModalEditBtns.forEach(btn => {
            btn.addEventListener('click', openModalEdit);
        });
        // Agrega un evento de clic a todos los botones para cerrar el modal
        closeModalEditBtns.forEach(btn => {
            btn.addEventListener('click', closeModalEdit);
        });
        // Función para manejar el evento de teclado
        function handleKeyPress(event) {
            if (event.key === "Escape") {
                closeModalEdit(); // Cerrar el modal cuando se presione la tecla "Escape"
            }
        }



        // Adjuntar evento de teclado al documento
        document.addEventListener("keydown", handleKeyPress);
    })
</script>
