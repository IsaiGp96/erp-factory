


<x-administracion-layout>
    <x-slot:usuarios>
        <div>
            <div class="ml-10 mt-6 ">
                <h1 class="text-4xl mb-4">Usuarios</h1>
                <button
                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm"
                    onclick="modalHandler(true)">Agregar nuevo usuario</button>
                    
                <div>
                    <x-tablaUsuarios-component :usuarios="$usuarios">
                        
                    </x-tablaUsuarios-component>
                    
                    <x-dh-component>
                    </x-dh-component>
                </div>
            </div>
        </div>
    </x-slot:usuarios>

    <x-slot:ventas>
        <div>
            <div class="ml-10 mt-6 ">
                <h1 class="text-4xl mb-4">Ventas</h1>
                <button
                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm"
                    onclick="modalHandler(true)">Agregar Venta</button>
                <div>
                    
                    <x-ventas>
                    </x-ventas>
                    <x-dh-component>
                    </x-dh-component>
                </div>
            </div>
        </div>
    </x-slot:ventas>
</x-administracion-layout>
    

<script>
    // Manejar el evento de envío del formulario
    document.getElementById('form').addEventListener('submit', function(event) {
        // Prevenir la acción por defecto (recargar la página)
        event.preventDefault();

        // Obtener los datos del formulario
        var formData = new FormData(this);

        // Realizar una solicitud asíncrona usando Axios
        axios.post('/administracion', formData)
            .then(function(response) {
                // Manejar la respuesta del servidor aquí
                // Por ejemplo, mostrar un toast o alerta
                alert('Archivo agregado correctamente');
            })
            .catch(function(error) {
                // Manejar errores de la solicitud
                console.error('Error al agregar archivo:', error);
            });
    });
</script>

        





    


    

