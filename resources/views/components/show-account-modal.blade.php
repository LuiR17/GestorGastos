<div id="accountModal" class="fixed inset-0 bg-black bg-opacity-40 hidden flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg w-96">
        <h1 class="text-2xl font-semibold text-center pb-8">Detalle de la cuenta</h1>
        <h2 id="modalServicename" class="text-xl font-bold mb-2"></h2>
        <input type="text" id="editServicename" class="hidden border rounded-lg w-full mb-2">
        
        <p id="modalPrice" class="mb-2 text-gray-700"></p>
        <input type="text" id="editAccountPrice" class="hidden border rounded-lg w-full mb-2">

        <p id="modalRenovation" class="font-semibold text-lg"></p>
        <input type="text" id="editRenovation" class="hidden border rounded-lg w-full mb-2">

        <button id="closeAccountModal" class="mt-4 w-full bg-black text-white font-semibold px-4 py-2 rounded-lg hover:bg-gray-900">
            Cerrar
        </button>
        <button id="editAccountBtn" class="w-full mt-4 bg-blue-500 text-white font-semibold px-4 py-2 rounded-lg">
            Editar
        </button>
         <button id="saveAccountBtn" class="w-full mt-4 bg-green-500 text-white hidden font-semibold px-4 py-2 rounded-lg">
            Guardar
        </button>
        <button id="deleteAccountBtn" class="mt-4 w-full bg-red-800 text-white font-semibold px-4 py-2 rounded-lg hover:bg-red-900">
            Borrar
        </button>        
    </div>
</div>
