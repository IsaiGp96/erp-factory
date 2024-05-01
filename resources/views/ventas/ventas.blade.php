<x-dashboard-layout>
    <div class="mt-8 mx-[440px]">
        <a id="openModalBtn" href="#"
            class="flex items-center justify-between px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-500 bg-white border rounded-md gap-x-2 hover:bg-gray-200 border-cyan-300">
            <span>
                Crear nueva orden
            </span>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>
        </a>
    </div>

    <x-crearVentas-component>
    </x-crearVentas-component>

    <x-tablaVentas-component :ordenesTrabajo="$ordenesTrabajo">
    </x-tablaVentas-component>

    

</x-dashboard-layout>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Botón para abrir el modal
        const openModalBtn = document.getElementById('openModalBtn');
        // Botones para cerrar el modal
        const closeModalBtns = document.querySelectorAll('#closeModalBtn');
        // Modal
        const modal = document.querySelector('.modal');

        // Función para abrir el modal
        function openModal() {
            modal.classList.remove('hidden');
        }

        // Función para cerrar el modal
        function closeModal() {
            modal.classList.add('hidden');
        }

        // Agrega un evento de clic al botón para abrir el modal
        openModalBtn.addEventListener('click', openModal);

        // Agrega un evento de clic a todos los botones para cerrar el modal
        closeModalBtns.forEach(btn => {
            btn.addEventListener('click', closeModal);
        });
        // Función para manejar el evento de teclado
        function handleKeyPress(event) {
            if (event.key === "Escape") {
                closeModal(); // Cerrar el modal cuando se presione la tecla "Escape"
            }
        }

        // Adjuntar evento de teclado al documento
        document.addEventListener("keydown", handleKeyPress);
    });
</script>
