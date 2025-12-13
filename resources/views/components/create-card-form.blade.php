<x-create-account id="modalCard" title="Nueva Targeta">
    <form action="">
        @csrf
        <div class="flex flex-col  w-full gap-2">
            <label class="font-semibold" for="">Logo</label>
            <input type="file">
            <label class="font-semibold" for="">Entidad Emisora</label>
            <input class="rounded-lg w-full" type="text">
            <label class="font-semibold" for="">límite de crédito</label>
            <input class="rounded-lg w-full" type="text">
            <label class="font-semibold" for="">Día de pago</label>
            <input class="rounded-lg w-full" type="text">
            <button class="bg-green-500 text-xl text-white rounded-lg font-semibold py-1">Añadir</button>
        </div>
    </form>
</x-create-account>
