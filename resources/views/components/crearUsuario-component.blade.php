<crearUsuario-component>
    <!-- component -->
    <!-- Code block starts -->


    <div class="py-12 bg-gray-700 transition duration-150 ease-in-out bg-opacity-50 z-10 absolute top-0 right-0 bottom-0 left-0 hidden"
        id="modal">
        <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
            <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">

                <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">Agregar Usuario</h1>

                <form  method="POST" action="{{ route('administracion.store') }}">
                    @csrf
                    <div class="flex mb-4">
                        <div class="w-1/2 pr-3">
                            <label for="nombre"
                                class="block text-gray-600 text-lg font-bold leading-tight">Nombre</label>
                            <input id="nombre" name="nombre"
                                class="w-full mt-1 text-gray-600 text-md focus:outline-none focus:border-indigo-700 border-gray-300 rounded border"
                                placeholder="Nombre" />
                        </div>
                        <div class="w-1/2 pl-3">
                            <label for="apellido"
                                class="block text-gray-600 text-lg font-bold leading-tight">Apellidos</label>
                            <input id="apellido" name='apellidos'
                                class="w-full mt-1 text-gray-600 focus:outline-none focus:border-indigo-700 border-gray-300 rounded border"
                                placeholder="Apellido" />
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <div class="w-1/2 pr-3">
                            <label for="curp"
                                class="block text-gray-600 text-lg font-bold leading-tight">CURP</label>
                            <input id="curp" name="curp"
                                class="w-full mt-1 text-gray-600 focus:outline-none focus:border-indigo-700 border-gray-300 rounded border"
                                placeholder="CURP" />
                        </div>
                        <div class="w-1/2 pl-3">
                            <label for="rfc"
                                class="block text-gray-600 text-lg font-bold leading-tight">RFC</label>
                            <input id="rfc" name="rfc"
                                class="w-full mt-1 text-gray-600 focus:outline-none focus:border-indigo-700 border-gray-300 rounded border"
                                placeholder="RFC" />
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <div class="w-1/2 pr-3">
                            <label for="nacimiento"
                                class="block text-gray-600 text-lg font-bold leading-tight">Nacimiento</label>
                            <input id="nacimiento" name="fecha_nac"
                                class="w-full mt-1 text-gray-600 focus:outline-none focus:border-indigo-700 border-gray-300 rounded border"
                                type="date" placeholder="Fecha de Nacimiento" />
                        </div>
                        <div class="w-1/2 pl-3">
                            <label for="departamento"
                                class="block text-gray-600 text-lg font-bold leading-tight">Departamento</label>
                            <input id="departamento" name="departamento"
                                class="w-full mt-1 text-gray-600 focus:outline-none focus:border-indigo-700 border-gray-300 rounded border"
                                type="text" placeholder="Departamento" />
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <div class="w-1/2 pr-3">
                            <label for="puesto"
                                class="block text-gray-600 text-lg font-bold leading-tight">Puesto</label>
                            <input id="puesto" name="puesto"
                                class="w-full mt-1 text-gray-600 focus:outline-none focus:border-indigo-700 border-gray-300 rounded border"
                                type="text" placeholder="Puesto" />
                        </div>
                        <div class="w-1/2 pl-3">
                            <label for="correo"
                                class="block text-gray-600 text-lg font-bold leading-tight">Correo</label>
                            <input id="correo" name="correo"
                                class="w-full mt-1 text-gray-600 focus:outline-none focus:border-indigo-700 border-gray-300 rounded border"
                                type="email" placeholder="Correo" />
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <div class="w-1/2 pr-3">
                            <label for="telefono"
                                class="block text-gray-600 text-lg font-bold leading-tight">Telefono</label>
                            <input id="telefono" name="numero_telefonico"
                                class="w-full mt-1 text-gray-600 focus:outline-none focus:border-indigo-700 border-gray-300 rounded border"
                                type="number" placeholder="Telefono" />
                        </div>
                        <div class="w-1/2 pl-3">
                            <label for="tipo" class="block text-gray-600 text-lg font-bold leading-tight">Tipo de
                                Usuario</label>
                            <select name="tipo" id="tipo"
                                class="w-full mt-1 text-gray-600 focus:outline-none focus:border-indigo-700 border-gray-300 rounded border">
                                <option selected disabled value="">Selecciona una opción</option>
                                <option value="1">Administrativo</option>
                                <option value="2">Almacén</option>
                                <option value="3">Compras</option>
                                <option value="4">Fabrica</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center justify-start w-full mt-4">
                        <button type="submit"
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-md">Registrar</button>
                        <a href="{{ route('administracion.usuarios') }}"
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-md">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Code block ends -->
</crearUsuario-component>


