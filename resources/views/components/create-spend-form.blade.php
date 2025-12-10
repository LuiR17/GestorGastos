<x-create-account id="modalSpend" title="Nuevo Gasto">
    <form id="createSpendForm" action="{{ route('spends.store') }}" method="POST">
        @csrf
        <div class="flex flex-col  w-full gap-2">
            <label class="font-semibold" for="">Nombre del gasto</label>
            <input name="title" class="rounded-lg w-full" type="text">
            <label class="font-semibold" for="">Descripción</label>
            <input name="description" class="rounded-lg w-full" type="text">
            <label class="font-semibold" for="">Valor</label>
            <input name="price" class="rounded-lg w-full" type="text">
            <button type="submit" class="bg-green-500 text-xl text-white rounded-lg font-semibold py-1">Añadir</button>
        </div>
    </form>
</x-create-account>
