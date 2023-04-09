<?php
include 'includes/header.php';
?>
<main class="mt-3 w-3/4 mx-auto">
    <div class="buscador">
        <form id="verificador" method="POST">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Verificar</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="tel" id="verificar-boletos" class="block w-full p-4 pl-10 text-sm text-gray-900 border"
                    placeholder="Ingresa tu numero de Telefono"  maxlength="10" required>
                <button type="submit"
                    class="text-white absolute right-2.5 bottom-2.5 bg-teal-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 :bg-teal-700 ">Buscar</button>
            </div>
        </form>
    </div>
    <div class="tabla-boletos mt-2 mx-auto text-center w-full">
       
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 text-gray-400">
            <tr  class="text-center">
                <th scope="col" class="px-6 py-3">
                    Nombre Rifa
                </th>
                <th scope="col" class="px-6 py-3">
                    Numero de Boleto
                </th>
                <th scope="col" class="px-6 py-3">
                    Estado de Boleto
                </th>
                
            </tr>
        </thead>
        <tbody id="boletos">
        </tbody>
    </table>
</div>

    </div>
</main>
<?php
include 'includes/footer.php';
?>