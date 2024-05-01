<crearVentas-component>

    <!-- Vista emergente (modal) -->
    <div class="modal fixed inset-0 bg-black bg-opacity-50 flex hidden items-center justify-center">
        {{-- No borren el hidden --}}
        <div class="modal-content bg-white p-8 rounded-md">
            <div class="modal-header">
                <h5 class="modal-title text-xl" id="exampleModalLabel">Crear Nueva Orden</h5>
                <button type="button" id="closeModalBtn" class="btn-close" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('ventas.store') }}">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">

                    <div class="space-y-4">
                        <div class="space-y-2">
                            <label for="order-id" class="block">Order ID</label> {{-- Aqui podriamos setearlo ya el siguiente id con un contador de ordenes --}}
                            <input id="order-id" name="id" type="text" placeholder="Enter Order ID"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        </div>
                        <div class="space-y-2">
                            <label for="piel" class="block">Piel</label>
                            <input id="piel" name="piel" type="text" placeholder="Ingresa tipo de piel"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        </div>
                        <div class="space-y-2">
                            <label for="horma" class="block">Horma</label>
                            <input id="horma" name="horma" type="text" placeholder="Ingresa horma"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        </div>
                        <div class="space-y-2">
                            <label for="suela" class="block">Suela</label>
                            <input id="suela" name="suela" type="text" placeholder="Ingresa suela"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        </div>
                        <div class="space-y-2">
                            <label for="tubo" class="block">Tubo</label>
                            <input id="tubo" name="tubo" type="text" placeholder="Ingresa tubo"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <label for="abono" class="block">Abono</label>
                            <input id="abono" name="abono" placeholder="$" type="number"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                        </div>
                        <div class="space-y-2">
                            <label for="precio" class="block">Precio</label>
                            <input id="precio" name="precio" placeholder="$" type="number"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                        </div>
                        <div class="space-y-2">
                            <label for="anticipo" class="block">Anticipo</label>
                            <input id="anticipo" name="anticipo" placeholder="$" type="number"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                        </div>
                        <div class="space-y-2">
                            <label for="nombre" class="block">Nombre</label>
                            <input id="nombre" name="nombre" placeholder="Ingresa nombre" type="text"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                        </div>
                        <div class="space-y-2">
                            <label for="apellido" class="block">Apellido(s)</label>
                            <input id="apellido" name="apellidos" placeholder="Ingresa apellido(s)" type="text"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <label for="tipo_venta" class="block">Tipo de Venta</label>
                            <input id="tipo_venta" name="tipo_venta" placeholder="Ingresa tipo de venta" type="text"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                        </div>
                        <div class="space-y-2">
                            <label for="correo" class="block">Correo Electrónico</label>
                            <input id="correo" name="correo" placeholder="Ingresa correo electrónico" type="text"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                        </div>
                        <div class="space-y-2">
                            <label for="numero_telefonico" class="block">Numero Telefónico</label>
                            <input id="numero_telefonico" name="numero_telefonico" placeholder="614-123-4567" type="number"
                                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                        </div>
                        <div class="space-y-2">
                            <label for="tipo" class="block">Tipo</label>
                            <input id="tipo" name="tipo" placeholder="Ingresa tipo" type="number"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                        </div>
                        <div class="space-y-2">
                            <label for="fecha" class="block">Fecha</label>
                            <input id="fecha" name="fecha" placeholder="Ingresa fecha" type="date"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                        </div>
                    </div>
                </div>
                <div class="flex justify-start mt-5">
                    <div class="mr-4">
                        <button type="submit" id="createModalBtn" 
                            class="inline-flex items-center justify-center px-6 py-2 text-sm font-medium text-white bg-blue-500 border border-transparent rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Crear
                        </button>
                        <!-- Otros botones de acción si es necesario -->
                    </div>
                    <div>
                        <button type="button" id="closeModalBtn"
                            class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Cancelar
                        </button>
                        <!-- Otros botones de acción si es necesario -->
                    </div>
            </form>
        </div>


    </div>
    </div>

</crearVentas-component>
