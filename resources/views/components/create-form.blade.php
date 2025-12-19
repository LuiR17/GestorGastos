<x-create-account id="modalAccount" title="Nueva Cuenta">
    <form action="{{ route('accounts.store') }}" method="POST" id="createAccountForm">
        @csrf
        <div class="flex flex-col  w-full gap-2">
            <label class="font-semibold" for="">Nombre de la cuenta</label>
            <input name="service_name" class="rounded-lg w-full" type="text">
            <label class="font-semibold" for="">Valor Mensual</label>
            <input name="price" class="rounded-lg w-full" type="text">
            <label class="font-semibold" for="">Fecha de renovación</label>
            <input name="renovation" class="rounded-lg w-full" type="date">
            <button class="bg-green-500 text-xl text-white rounded-lg font-semibold py-1">Añadir</button>
        </div>
    </form>
</x-create-account>
