<!-- component -->
<!-- Code block starts -->
<editar-usuario>
    
    <form method="POST" id="editarUsuario" action="{{ route('administracion.registroUsuarios') }}">
        @csrf

        <div class="py-12 backdrop-brightness-50 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0 hidden"
            id="modalEdit">
            <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">

                    <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">Edicion de usuario
                    </h1>

                    <div class="flex">

                        <div class="flex-auto pr-2">
                            {{-- Nombre --}}
                            <label for="nombre"
                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal mb-1">Nombre</label>
                            <input id="nombre" name="nombre" 
                                class="mb-1 mt-1 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center text-sm border-gray-300 rounded border "
                                placeholder="Nombre" value="{{ $usuario->nombre }}" />
                        </div>

                        <div class="flex-auto pl-2">
                            {{-- Apellido --}}
                            <label for="apellido"
                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal mb-1">Apellidos</label>
                            <input id="apellido" name='apellidos'
                                class="mb-1 mt-1 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center  text-sm border-gray-300 rounded border "
                                placeholder="Apellido" value="{{ $usuario->apellidos }}"/>
                        </div>
                    </div>


                    <div class="flex">
                        <div class="flex-auto pr-2">
                            {{-- CURP --}}
                            <label for="curp"
                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">CURP</label>
                            <input id="curp" name="curp"
                                class="mb-1 mt-1 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center text-sm border-gray-300 rounded border"
                                placeholder="CURP" value="{{ $usuario->curp }}"/>
                        </div>

                        <div class="flex-auto pl-2">
                            {{-- RFC --}}
                            <label for="rfc"
                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">RFC</label>
                            <input id="rfc" name="rfc"
                                class="mb-1 mt-1 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center text-sm border-gray-300 rounded border"
                                placeholder="RFC" value="{{ $usuario->rfc }}"/>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-auto ">
                            {{-- Nacimiento --}}
                            <label for="nacimiento"
                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Nacimiento</label>
                            <input id="nacimiento" name="fecha_nac"
                                class="mb-1 mt-1 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-26 h-9 flex items-center text-sm border-gray-300 rounded border"
                                type="date" placeholder="Fecha de Nacimiento" value="{{ $usuario->fecha_nac }}" />
                        </div>

                        <div class="flex-auto pl-2">
                            {{-- Departamento --}}
                            <label for="departamento"
                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Departamento</label>
                            <input id="departamento" name="departamento"
                                class="mb-1 mt-1 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center text-sm border-gray-300 rounded border"
                                type="text" placeholder="Departamento" value="{{ $usuario->departamento }}"/>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-auto pr-2">
                            {{-- Puesto --}}
                            <label for="puesto"
                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Puesto</label>
                            <input id="puesto" name="puesto"
                                class="mb-1 mt-1 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center text-sm border-gray-300 rounded border"
                                type="text" placeholder="Puesto" value="{{ $usuario->puesto }}"/>
                        </div>

                        <div class="flex-auto pl-2">
                            {{-- Correo --}}
                            <label for="correo"
                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Correo</label>
                            <input id="correo" name="correo"
                                class="mb-1 mt-1 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center text-sm border-gray-300 rounded border"
                                type="email" placeholder="Correo" value="{{ $usuario->correo }}" />
                        </div>
                    </div>

                    <div class="flex">

                        <div class="flex-auto pr-2">
                            {{-- Numero Telefonico --}}
                            <label for="Telefono"
                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Telefono</label>
                            <input id="telefono" name="numero_telefonico"
                                class="mb-1 mt-1 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center text-sm border-gray-300 rounded border"
                                type="number" placeholder="Telefono" value="{{ $usuario->numero_telefonico }}"/>
                        </div>

                        <div class="flex-auto pl-2">
                            {{-- Tipo de Usuario --}}
                            <label for="tipo"
                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Tipo
                                de Usuario</label>

                            <select name="tipo" id="tipo"
                                class="mb-1 mt-1 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center text-sm border-gray-300 rounded border" >
                                <option selected disabled value="{{ $usuario->tipo }}"></option>
                                <option value="1">Administrativo</option>
                                <option value="2">Almacén</option>
                                <option value="3">Compras</option>
                            </select>
                        </div>

                    </div>

                    


                    <div class="flex items-center justify-start w-full mt-4">
                        <button
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm"
                            onclick="modalHandler(false)">Registrar</button>
                        <button
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm"
                            onclick="modalHandler(false)">Cancelar</button>
                    </div>
                    <button
                        class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600"
                        onclick="modalHandler()" aria-label="close modal" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20"
                            height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </form>
</editar-usuario>


    <script>
        // Agrega un listener para el evento DOMContentLoaded
    document.addEventListener("DOMContentLoaded", function() {
        // Llama a tu función cuando se dispare el evento DOMContentLoaded
        modalHandler(true)
    });
        
        let modal = document.getElementById("modalEdit");

        // Adjuntar evento de teclado al documento
        document.addEventListener("keydown", handleKeyPress);

        // Función para manejar el evento de teclado
        function handleKeyPress(event) {
            if (event.key === "Escape") {
                modalHandler(false); // Cerrar el modal cuando se presione la tecla "Escape"
            }
        }



        function modalHandler(val ) {
            if (val) {
                fadeIn(modal);
            } else {
                fadeOut(modal);
            }
        }

        function fadeOut(el) {
            el.style.opacity = 1;
            (function fade() {
                if ((el.style.opacity -= 0.1) < 0) {
                    el.style.display = "none";
                } else {
                    requestAnimationFrame(fade);
                }
            })();
        }

        function fadeIn(el, display) {
            el.style.opacity = 0;
            el.style.display = display || "flex";
            (function fade() {
                let val = parseFloat(el.style.opacity);
                if (!((val += 0.2) > 1)) {
                    el.style.opacity = val;
                    requestAnimationFrame(fade);
                }
            })();
        }
    </script>


<!-- Code block ends -->
