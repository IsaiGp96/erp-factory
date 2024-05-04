<x-dashboard-layout>

    <div>
        <div class="ml-10 mt-6 ">
            <h1 class="text-2xl ml-6 mb-5">Usuarios</h1>
            <a onclick="modalHandler(true)" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white ml-5 px-8 py-2 mb-5 text-sm cursor-pointer"
                >Agregar nuevo usuario</a>

                <x-crearUsuario-component>
                </x-crearUsuario-component>

            <div class="overflow-y-auto h-96 mt-5">
                <x-tablaUsuarios-component :usuarios="$usuarios">

                </x-tablaUsuarios-component>

                



            </div>
        </div>
    </div>

</x-dashboard-layout>

<script>
    let modal = document.getElementById("modal");

    function modalHandler(val) {
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