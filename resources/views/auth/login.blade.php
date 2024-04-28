<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex shadow-xl w-fit h-fit">

        <div class="flex flex-wrap content-center justify-center rounded-md bg-gray-300">
            <div class="w-96 h-128 p-4">

                <p class="text-md font-semibold text-gray-800 pb-2">Ingresa tus datos para iniciar sesión.</p>

                <form class="mt-4" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <x-input-label style="color:black" class="mb-2 block  font-semibold" for="email" :value="__('Email')" />
                        <x-text-input type="email" name="email" id="email" :value="old('email')"
                            placeholder="Email"
                            style="background:#77472B; color:white;"
                            class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-3">
                        <x-input-label style="color:black" class="mb-2 block text-xs font-semibold" for="password" :value="__('Password')" />
                        <x-text-input type="password" id="password" name="password" :value="old('password')"
                            style="background:#77472B; color:white;"
                            placeholder="Contraseña"
                            class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mb-3" style="text-align: -webkit-center;">
                        <button type="submit"
                            class="block w-60 text-center text-white bg hover:bg-gray-300 pt-5 rounded-md"
                            style="background:#77472B;">Iniciar
                            Sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
