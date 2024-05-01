<x-dashboard-layout>

    <div>
        <div class="ml-10 mt-6 ">
            <h1 class="text-2xl ml-6 mb-5">Usuarios</h1>
            <a class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white ml-5 px-8 py-2 mb-5 text-sm cursor-pointer"
                href="{{ route('administracion.registroUsuarios') }}">Agregar nuevo usuario</a>

            <div class="overflow-y-auto h-96 mt-5">
                <x-tablaUsuarios-component :usuarios="$usuarios">

                </x-tablaUsuarios-component>




            </div>
        </div>
    </div>

</x-dashboard-layout>
