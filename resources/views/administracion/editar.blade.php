<x-dashboard-layout>
    <x-editar-usuario :usuario="$usuario">

    </x-editar-usuario>
    
    
</x-dashboard-layout>

<script>
    // Manejar el evento de envío del formulario
    document.getElementById('formRegistro').addEventListener('submit', function(event) {
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