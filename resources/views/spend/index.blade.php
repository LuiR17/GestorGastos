<x-spend-layout>

    <nav class="flex justify-around mt-8">
        <ul class="flex gap-12">
            <li><a href="">Resumen</a></li>
            <li><a href="">Todas las compras</a></li>
            <li><a href="">Consejos financieros</a></li>

        </ul>
        <a href="">Cuenta</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </nav>

    <hr class="border-black mt-6">

    <main class="grid grid-cols1 md:grid-cols-2 mt-20 gap-">
        <div class="flex flex-col items-start gap-4 mb-6">
            <h2 class="text-xl">Saldo Total</h2>
            <h1 class="text-8xl font-normal">$1000</h1>
            <div class="flex justify-between items-center w-[70%]">
                <p class="p-2">Cuentas</p>
                <button id="CreateAccountBtn" class="p-1 border border-black rounded-lg px-4">Crear +</button>
                <x-create-form id="modalAccount" title="Nueva Cuenta" />
            </div>
            <div class="flex justify-between w-[70%] mt-2">
                <div class="flex gap-4">
                    <p>logo</p>
                    <p>Nombre Cuenta</p>
                </div>

                <div>
                    <p>$7</p>
                </div>
            </div>
            <div class="flex justify-between w-[70%] mt-2">
                <div class="flex gap-4">
                    <p>logo</p>
                    <p>Nombre Cuenta</p>
                </div>

                <div>
                    <p>$7</p>
                </div>
            </div>
            <div class="flex justify-between w-[70%] mt-2">
                <div class="flex gap-4">
                    <p>logo</p>
                    <p>Nombre Cuenta</p>
                </div>

                <div>
                    <p>$7</p>
                </div>
            </div>
            <div class="flex justify-between w-[70%] mt-2">
                <div class="flex gap-4">
                    <p>logo</p>
                    <p>Nombre Cuenta</p>
                </div>

                <div>
                    <p>$7</p>
                </div>
            </div>
            <div class="flex justify-between w-[70%] mt-2">
                <div class="flex gap-4">
                    <p>logo</p>
                    <p>Nombre Cuenta</p>
                </div>

                <div>
                    <p>$7</p>
                </div>
            </div>
            <div class="flex justify-between w-[70%] mt-2">
                <div class="flex gap-4">
                    <p>logo</p>
                    <p>Nombre Cuenta</p>
                </div>

                <div>
                    <p>$7</p>
                </div>
            </div>
            <div class="flex justify-between w-[70%]">
                <p class="p-2">Tarjetas de crédito</p>
                <button class="border border-black rounded-lg px-4">Crear +</button>

            </div>
            <div class="flex justify-between w-[70%] mt-2">
                <div class="flex gap-4">
                    <p>logo</p>
                    <p>Nombre Cuenta</p>
                </div>

                <div>
                    <p>$7</p>
                </div>
            </div>
            <div class="flex justify-between w-[70%] mt-2">
                <div class="flex gap-4">
                    <p>logo</p>
                    <p>Nombre Cuenta</p>
                </div>

                <div>
                    <p>$7</p>
                </div>
            </div>
            <div class="flex justify-between w-[70%] mt-2">
                <div class="flex gap-4">
                    <p>logo</p>
                    <p>Nombre Cuenta</p>
                </div>

                <div>
                    <p>$7</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center">
            <div class="flex justify-between w-full">
                <p class="p-2">Transacciones</p>
                <button id="CreateSpendBtn" class="p-2">Crear +</button>
                <x-create-spend-form id="modalSpend" title="Nuevo Gasto" />
            </div>
            <div class="w-full">
                <p class="text-center">Diciembre 06</p>
                <div id="spendsContainer" class="mt-4">
                    @foreach ($spends as $spend)
                        <div class="flex justify-between mt-4 border border-black rounded-lg py-1 px-4">
                            <div>
                                <p>{{ $spend->title }}</p>
                                <p>{{ $spend->description }}</p>
                            </div>
                            <p>-${{ $spend->price }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="flex justify-between mt-4 border border-black rounded-lg py-1 px-4">
                    <div>
                        <p>Salida</p>
                        <p>Comida y transporte</p>
                    </div>
                    <p>-$10,50</p>
                </div>
                <div class="flex justify-between mt-4 border border-black rounded-lg py-1 px-4">
                    <div>
                        <p>Salida</p>
                        <p>Comida y transporte</p>
                    </div>
                    <p>-$10,50</p>
                </div>
            </div>
        </div>
    </main>

</x-spend-layout>
