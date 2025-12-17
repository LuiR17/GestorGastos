<div id="spendModal" class="fixed inset-0 bg-black bg-opacity-40 hidden flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg w-96">
        <h1 class="text-2xl font-semibold text-center pb-8">Detalle del gasto</h1>
        <h2 id="modalTitle" class="text-xl font-bold mb-2"></h2>
        <input type="text" id="editTitle" class="hidden border rounded-lg w-full mb-2">
        
        <p id="modalDescription" class="mb-2 text-gray-700"></p>
        <input type="text" id="editDescription" class="hidden border rounded-lg w-full mb-2">

        <p id="modalAmount" class="font-semibold text-lg"></p>
        <input type="text" id="editPrice" class="hidden border rounded-lg w-full mb-2">

        <button id="closeModal" class="mt-4 w-full bg-black text-white font-semibold px-4 py-2 rounded-lg hover:bg-gray-900">
            Cerrar
        </button>
        <button id="editSpendBtn" class="w-full mt-4 bg-blue-500 text-white font-semibold px-4 py-2 rounded-lg">
            Editar
        </button>
         <button id="saveSpendBtn" class="w-full mt-4 bg-green-500 text-white hidden font-semibold px-4 py-2 rounded-lg">
            Guardar
        </button>
        <button id="deleteSpendBtn" class="mt-4 w-full bg-red-800 text-white font-semibold px-4 py-2 rounded-lg hover:bg-red-900">
            Borrar
        </button>        
    </div>
</div>
