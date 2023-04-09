<!-- Nodal -->

<div class="fixed hidden inset-0 bg-gray-600 bg-opacity-70 overflow-y-auto h-full w-full" id="confirmar">
  <!-- Ventana Modal -->
  <div class="content-modal relative top-20 bg-white mx-auto w-full md:w-3/4 lg:w-1/2 h-fill">
    <div class="modal-header border border-b">
      <div class="flex items-start justify-between p-4 border-b rounded-t ">
        <h3 class="text-3xl font-semibold text-gray-900">
          Confirmacion de Boletos
        </h3>
        <button id="close-modal" type="button"
          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
          data-modal-hide="defaultModal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
    </div>
    <div class="modal-body">
      <h2 class="content-boletos text-2xl text-center"></h2>
      <form id="formulario-boletos" class="p-3" method="post">
        <div class="">
          <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre</label>
            <input type="text" id="first_name"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Ingresa tu nombre" required>
          </div>
          <div>
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 ">Apellido</label>
            <input type="text" id="last_name"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
              placeholder="Ingresa tu apellido" required>
          </div>
          <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">Numero de Telefono</label>
            <input type="tel" id="phone"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Ingresa un numero de Telefono"  required>
          </div>
        </div>
        <div class="footer-boletos pt-3">
          <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
        </div>
      </form>

    </div>
  </div>
</div>
</div>

</div>
<script src="Views\js\jquery-3.6.4.min.js"></script>
<script src="Views\js\jpaginate.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="views/js/app.js"></script>

</html>