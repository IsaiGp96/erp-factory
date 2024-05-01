<x-dashboard-layout>
    <div class="mt-8 mx-[440px]">
        <a id="openModalBtn" href="#"
            class="flex items-center justify-between px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-500 bg-white border rounded-md gap-x-2 hover:bg-gray-200 border-cyan-300">
            <span>
                Ordenes activas
            </span>
        </a>
    </div>

    <!-- Vista emergente (modal) -->
    <div class="modal fixed inset-0 bg-black bg-opacity-50 flex hidden items-center justify-center">
        {{-- No borren el hidden --}}
        <div class="modal-content bg-white p-8 rounded-md">
            <div class="modal-header">
                <h5 class="modal-title text-xl" id="exampleModalLabel">Crear Nueva Orden</h5>
                <button type="button" id="closeModalBtn" class="btn-close" aria-label="Close"></button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <div class="space-y-4">
                    <div class="space-y-2">
                        <label for="order-id" class="block">Order ID</label> {{-- Aqui podriamos setearlo ya el siguiente id con un contador de ordenes --}}
                        <input id="order-id" type="text" placeholder="Enter Order ID"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    </div>
                    <div class="space-y-2">
                        <label for="piel" class="block">Piel</label>
                        <input id="piel" type="text" placeholder="Ingresa tipo de piel"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    </div>
                    <div class="space-y-2">
                        <label for="horma" class="block">Horma</label>
                        <input id="horma" type="text" placeholder="Ingresa horma"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    </div>
                    <div class="space-y-2">
                        <label for="suela" class="block">Suela</label>
                        <input id="suela" type="text" placeholder="Ingresa suela"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    </div>
                    <div class="space-y-2">
                        <label for="tubo" class="block">Tubo</label>
                        <input id="tubo" type="text" placeholder="Ingresa tubo"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="space-y-2">
                        <label for="abono" class="block">Abono</label>
                        <input id="abono" placeholder="$" type="number"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                    </div>
                    <div class="space-y-2">
                        <label for="precio" class="block">Precio</label>
                        <input id="precio" placeholder="$" type="number"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                    </div>
                    <div class="space-y-2">
                        <label for="anticipo" class="block">Anticipo</label>
                        <input id="anticipo" placeholder="$" type="number"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                    </div>
                    <div class="space-y-2">
                        <label for="nombre" class="block">Nombre</label>
                        <input id="nombre" placeholder="Ingresa nombre" type="text"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                    </div>
                    <div class="space-y-2">
                        <label for="apellido" class="block">Apellido(s)</label>
                        <input id="apellido" placeholder="Ingresa apellido(s)" type="text"
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
                        <input id="correo" placeholder="Ingresa correo electrónico" type="email"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                    </div>
                    <div class="space-y-2">
                        <label for="numero_telefonico" class="block">Numero Telefónico</label>
                        <input id="numero_telefonico" placeholder="614-123-4567" type="tel"
                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                    </div>
                    <div class="space-y-2">
                        <label for="tipo" class="block">Tipo</label>
                        <input id="tipo" placeholder="Ingresa tipo" type="text"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                    </div>
                    <div class="space-y-2">
                        <label for="fecha" class="block">Fecha</label>
                        <input id="fecha" placeholder="Ingresa fecha" type="date"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></input>
                    </div>
                </div>
            </div>
            <div class="flex justify-start mt-5">
                <div class="mr-4">
                    <button type="button" id="createModalBtn"
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
            </div>


        </div>
    </div>

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
                                                        fill="currentColor" stroke="currentColor"
                                                        stroke-width="0.1" />
                                                    <path
                                                        d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                        fill="currentColor" stroke="currentColor"
                                                        stroke-width="0.1" />
                                                    <path
                                                        d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                        fill="currentColor" stroke="currentColor"
                                                        stroke-width="0.3" />
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
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 ">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="text-blue-500 border-gray-300 rounded ">

                                            <span>#3066</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">Jan
                                        6,
                                        2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 ">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            <h2 class="text-sm font-normal">Paid</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-8 h-8 rounded-full"
                                                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                                alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 ">Arthur
                                                    Melo
                                                </h2>
                                                <p class="text-xs font-normal text-gray-600 ">
                                                    authurmelo@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                        Monthly
                                        subscription</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button
                                                class="text-gray-500 transition-colors duration-200  hover:text-indigo-500 focus:outline-none">
                                                Archive
                                            </button>

                                            <button
                                                class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Download
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 ">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="text-blue-500 border-gray-300 rounded ">

                                            <span>#3065</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 ">Jan
                                        5,
                                        2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div
                                            class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 ">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            <h2 class="text-sm font-normal">Cancelled</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 ">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-8 h-8 rounded-full"
                                                src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                                alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800  ">Andi Lane
                                                </h2>
                                                <p class="text-xs font-normal text-gray-600 ">
                                                    andi@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 ">
                                        Monthly
                                        subscription</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 ">
                                                Archive
                                            </button>

                                            <button
                                                class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Download
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 ">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="text-blue-500 border-gray-300 rounded ">

                                            <span>#3064</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 ">
                                        Jan 5,
                                        2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 ">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            <h2 class="text-sm font-normal">Paid</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 ">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-8 h-8 rounded-full"
                                                src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=761&q=80"
                                                alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800  ">Kate
                                                    Morrison</h2>
                                                <p class="text-xs font-normal text-gray-600 ">
                                                    kate@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 ">
                                        Monthly subscription</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 ">
                                                Archive
                                            </button>

                                            <button
                                                class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Download
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 ">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="text-blue-500 border-gray-300 rounded ">

                                            <span>#3063</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 ">
                                        Jan 4,
                                        2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 ">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            <h2 class="text-sm font-normal">Paid</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 ">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-8 h-8 rounded-full"
                                                src="https://images.unsplash.com/photo-1506863530036-1efeddceb993?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1344&q=80"
                                                alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800  ">Candice
                                                    Wu
                                                </h2>
                                                <p class="text-xs font-normal text-gray-600 ">
                                                    candice@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 ">
                                        Monthly subscription</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 ">
                                                Archive
                                            </button>

                                            <button
                                                class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Download
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 ">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="text-blue-500 border-gray-300 rounded ">

                                            <span>#3062</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 ">
                                        Jan 4,
                                        2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div
                                            class="inline-flex items-center px-3 py-1 text-gray-500 rounded-full gap-x-2 bg-gray-100/60 ">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.5 7L2 4.5M2 4.5L4.5 2M2 4.5H8C8.53043 4.5 9.03914 4.71071 9.41421 5.08579C9.78929 5.46086 10 5.96957 10 6.5V10"
                                                    stroke="#667085" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                            <h2 class="text-sm font-normal">Refunded</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 ">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-8 h-8 rounded-full"
                                                src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=644&q=80"
                                                alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800  ">Orlando
                                                    Diggs</h2>
                                                <p class="text-xs font-normal text-gray-600 ">
                                                    orlando@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 ">
                                        Monthly subscription</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 ">
                                                Archive
                                            </button>

                                            <button
                                                class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Download
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between mt-6">
            <a href="#"
                class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>

                <span>
                    previous
                </span>
            </a>

            <div class="items-center hidden md:flex gap-x-3">
                <a href="#" class="px-2 py-1 text-sm text-blue-500 rounded-md  bg-blue-100/60">1</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md ">2</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md ">3</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md ">...</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md ">12</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md ">13</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md ">14</a>
            </div>

            <a href="#"
                class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 ">
                <span>
                    Next
                </span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div>
    </section>
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
    });
</script>
