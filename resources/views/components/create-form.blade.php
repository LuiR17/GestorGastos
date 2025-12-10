<x-create-account id="modalAccount" title="Nueva Cuenta">
    <form action="">
        @csrf
        <div class="flex flex-col  w-full gap-2">
            <label class="font-semibold" for="">Logo</label>
            <input type="file">
            <label class="font-semibold" for="">Nombre de la cuenta</label>
            <input class="rounded-lg w-full" type="text">
            <label class="font-semibold" for="">Valor Mensual</label>
            <input class="rounded-lg w-full" type="text">
            <button class="bg-green-500 text-xl text-white rounded-lg font-semibold py-1">Añadir</button>
        </div>
    </form>
</x-create-account>
