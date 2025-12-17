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
        <div class="flex flex-col items-start gap-4 mb-6 w-[80%]">
            <h2 class="text-xl">Saldo Total</h2>
            <h1 class="text-8xl font-normal">$1000</h1>
            <div class="flex justify-between items-center w-[70%]">
                <p class="p-2 font-semibold">Cuentas</p>
                <button id="CreateAccountBtn" class="p-1 border border-gray-200 rounded-lg px-4 shadow-md">Crear
                    +</button>
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
            <div class="flex justify-between w-[70%]">
                <p class="p-2 font-semibold">Tarjetas de crédito</p>
                <button id="createCardBtn" class="border border-gray-200 shadow-md rounded-lg px-4">Crear +</button>
                <x-create-card-form id="modalCard" title="Nueva Tarjeta" />
            </div>
            <div id="accountsContainer">
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

        </div>

        <div class="flex flex-col items-center">
            <div class="flex justify-between w-full">
                <p class="p-2 font-semibold">Transacciones</p>
                <button id="CreateSpendBtn" class="p-2 border border-gray-200 rounded-lg shadow-md">Crear +</button>
                <x-create-spend-form id="modalSpend" title="Nuevo Gasto" />
                <x-show-modal id="spendModal" title="Gasto" />
            </div>
            <div class="w-full">
                <p class="text-center">Diciembre 06</p>
                <div id="spendsContainer" class="mt-4">
                    @foreach ($spends as $spend)
                        <div class="flex justify-between mt-4 border border-gray-200 shadow-md rounded-lg py-1 px-4 spend-card cursor-pointer"
                            data-id="{{ $spend->id }}">
                            <div>
                                <p class="font-semibold">{{ $spend->title }}</p>
                                <p>{{ $spend->description }}</p>
                            </div>
                            <p class="font-semibold">-${{ $spend->price }}</p>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </main>

</x-spend-layout>
