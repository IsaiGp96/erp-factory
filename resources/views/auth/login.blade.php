<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex shadow-md w-fit h-fit">

        <div class="flex flex-wrap content-center justify-center rounded-md bg-[#1F2937]">
            <div class="w-96 h-128 p-4">

                <p class="text-md font-semibold text-gray-200 pb-2">Ingresa tus datos para iniciar sesión.</p>

                <form class="mt-4" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <x-input-label class="mb-2 block text-xs font-semibold" for="idEmpleado" :value="__('idEmpleado')" />
                        <x-text-input type="number" name="idEmpleado" id="idEmpleado" :value="old('idEmpleado')"
                            placeholder="Ingresa tu ID"
                            class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
                    </div>

                    <div class="mb-3">
                        <x-input-label class="mb-2 block text-xs font-semibold" for="password" :value="__('Password')" />
                        <x-text-input type="password" id="password" name="password" :value="old('password')"
                            placeholder="Ingresa tu contraseña"
                            class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mb-3">
                        <button type="submit"
                            class="mb-1.5 block w-full text-center text-white bg hover:text-gray-300 pt-7 rounded-md">Iniciar
                            Sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
