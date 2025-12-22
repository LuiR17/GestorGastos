<x-create-account id="modalCard" title="Nueva Targeta">
    <form id="createCardForm"  action="{{ route('creditcards.store') }}" method="POST">
        @csrf
        <div class="flex flex-col  w-full gap-2">
            <label class="font-semibold" for="">Entidad Emisora</label>
            <input name="card_name" class="rounded-lg w-full" type="text">
            <label class="font-semibold" for="">límite de crédito</label>
            <input name="credit_limit" class="rounded-lg w-full" type="text">
            <label class="font-semibold" for="">Día de corte</label>
            <input name="cut_day" class="rounded-lg w-full" type="date">
            <label class="font-semibold" for="">Día de pago</label>
            <input name="pay_day" class="rounded-lg w-full" type="date">
            <button type="submit" class="bg-green-500 text-xl text-white rounded-lg font-semibold py-1">Añadir</button>
        </div>
    </form>
</x-create-account>
