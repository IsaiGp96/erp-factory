<registrarUsuarios-component>

    <form method="POST" id="formRegistro" action="{{ route('administracion.store') }}">
        @csrf
            <div class="pl-6 pt-2  w-auto">
                <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">

                    

                    <div class="flex mb-2">

                        <div class="flex-auto pr-6">
                            {{-- Nombre --}}
                            <label for="nombre"
                                class="text-gray-800  text-2xl font-bold leading-tight tracking-normal mb-1">Nombre</label>
                            <input id="nombre" name="nombre"
                                class="mb1 mt-1 text-gray-600 text-xl focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center  border-gray-300 rounded border "
                                placeholder="Nombre" />
                        </div>

                        <div class="flex-auto pl-5">
                            {{-- Apellido --}}
                            <label for="apellido"
                                class="text-gray-800 text-2xl font-bold leading-tight tracking-normal mb-1">Apellidos</label>
                            <input id="apellido" name='apellidos'
                                class="mb-1 mt-1 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center  text-xl border-gray-300 rounded border "
                                placeholder="Apellido" />
                        </div>
                    </div>


                    <div class="flex mb-2">
                        <div class="flex-auto pr-2">
                            {{-- CURP --}}
                            <label for="curp"
                                class="text-gray-800 text-2xl font-bold leading-tight tracking-normal">CURP</label>
                            <input id="curp" name="curp"
                                class="mb-1 mt-1 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center text-xl border-gray-300 rounded border"
                                placeholder="CURP" />
                        </div>

                        <div class="flex-auto pl-2">
                            {{-- RFC --}}
                            <label for="rfc"
                                class="text-gray-800 text-2xl font-bold leading-tight tracking-normal">RFC</label>
                            <input id="rfc" name="rfc"
                                class="mb-1 mt-1 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center text-xl border-gray-300 rounded border"
                                placeholder="RFC" />
                        </div>
                    </div>

                    <div class="flex mb-2">
                        <div class="flex-auto ">
                            {{-- Nacimiento --}}
                            <label for="nacimiento"
                                class="text-gray-800 text-2xl font-bold leading-tight tracking-normal">Nacimiento</label>
                            <input id="nacimiento" name="fecha_nac"
                                class="mb-1 mt-1 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-26 h-9 flex items-center text-xl border-gray-300 rounded border"
                                type="date" placeholder="Fecha de Nacimiento" />
                        </div>

                        <div class="flex-auto pl-2">
                            {{-- Departamento --}}
                            <label for="departamento"
                                class="text-gray-800 text-2xl font-bold leading-tight tracking-normal">Departamento</label>
                            <input id="departamento" name="departamento"
                                class="mb-1 mt-1 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center text-xl border-gray-300 rounded border"
                                type="text" placeholder="Departamento" />
                        </div>
                    </div>

                    <div class="flex mb-2">
                        <div class="flex-auto pr-2">
                            {{-- Puesto --}}
                            <label for="puesto"
                                class="text-gray-800 text-2xl font-bold leading-tight tracking-normal">Puesto</label>
                            <input id="puesto" name="puesto"
                                class="mb-1 mt-1 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center text-xl border-gray-300 rounded border"
                                type="text" placeholder="Puesto" />
                        </div>

                        <div class="flex-auto pl-2">
                            {{-- Correo --}}
                            <label for="correo"
                                class="text-gray-800 text-2xl font-bold leading-tight tracking-normal">Correo</label>
                            <input id="correo" name="correo"
                                class="mb-1 mt-1 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center text-xl border-gray-300 rounded border"
                                type="email" placeholder="Correo" />
                        </div>
                    </div>

                    <div class="flex mb-2">

                        <div class="flex-auto pr-2">
                            {{-- Numero Telefonico --}}
                            <label for="Telefono"
                                class="text-gray-800 text-2xl font-bold leading-tight tracking-normal">Telefono</label>
                            <input id="telefono" name="numero_telefonico"
                                class="mb-1 mt-1 text-xl text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center  border-gray-300 rounded border"
                                type="number" placeholder="Telefono" />
                        </div>

                        <div class="flex-auto pl-2">
                            {{-- Tipo de Usuario --}}
                            <label for="tipo"
                                class="text-gray-800 text-2xl font-bold leading-tight tracking-normal">Tipo
                                de Usuario</label>

                            <select name="tipo" id="tipo"
                                class="mb-1 mt-1 text-lg text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center  border-gray-300 rounded border">
                                <option selected disabled value="">Selecciona una opción</option>
                                <option value="1">Administrativo</option>
                                <option value="2">Almacén</option>
                                <option value="3">Compras</option>
                                <option value="4">Fabrica</option>
                            </select>
                        </div>

                    </div>



                    <div class="flex items-center justify-start w-full mt-4">
                        <button
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-xl">Registrar</button>
                        <a href="{{ route('administracion.usuarios') }}"
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-xl">Volver</a>
                    </div>
                   
                </div>
            </div>

    </form>
</registrarUsuarios-component>
