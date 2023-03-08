<?php
include 'includes/header.php';
?>
<main>
  <h2 class="text-6xl text-center text-gray-700 font-black">Rifas de Hoy</h2>
  <br>
  <div class="tarjeta w-[90%] mx-auto border-solid border-slate-200 border-2 bg-gray-100  h-fill">
    <div class="contenedor-rifa grid grid-cols-1 md:grid-cols-2">
      <div class="imagen-rifa">
        <img
          src="https://fotos.perfil.com//2021/06/25/900/0/hennessey-mammoth-1000-trx-asi-es-la-camioneta-mas-picante-y-potente-del-mundo-1195419.jpg"
          alt="imagen de la  rifa" class="w-full h-full">
      </div>
      <?php foreach ($rifas as $value):?>
      <div class="info-rifa text-center">  

        <h1 class="text-4xl text-center text-yellow-500 font-bold">
          <?= $value->Nombre ?>
        </h1>
        <H2 class="text-3xl text-white text-center bg-teal-700 mx-auto w-full"><?= $value->Descripcion ?></H2>
        <br>
       
        <p class="text-xl text-justify mx-2 text-teal-600"><?= $value->Mensaje ?></p>
        <h3>Fecha de Inicio: <b><?= $value->fecha_inicio ?></b> </h3>
        <h3>Fecha de Termino: <b><?= $value->fecha_inicio ?></b> </h3>
        <h3><b class="text-3xl text-teal-700">45</b> <i class="fa-solid fa-ticket  text-teal-700"></i> <br>
          Disponibles
        </h3>
        <button id="verboletos" class="  text-teal-700 text-3xl my-3 px-4 py-3"><i class="fa-solid fa-chevron-down"></i>
          <br>
          <p class="text-xl">ver Boletos</p>
        </button>
      </div>
    </div>
    <div class=" hidden boletos-disponibles mt-2 p-2">
      <h1 class="text-7xl text-gray-700 text-center m-auto">Boletos disponibles</h1>
      <p>
        <i class="fa-solid text-xl  m-1 rounded p-1 bg-teal-700 fa-ticket text-white"></i><b>Boleto Disponible</b>
      </p>
      <br>
      <p>
        <i class="fa-solid text-xl  m-1 rounded p-1 bg-gray-700 fa-ticket text-white"></i><b>Boleto Apartado</b>
      </p>
      <br>
      <div class="contenedor-boletos text-center grid grid-cols-5  lg:grid-cols-10 gap-3">
        <?php foreach ($boletos as $value):
          if ($value->status == 0) { ?>
            <button id=" <?= $value->numero ?>"
              class=" boleto boletoDisponible text-2xl rounded  bg-teal-700  text-white">
              <i class="fa-solid fa-ticket"></i>  <br>
              <?= $value->numero ?></button>
          <?php } else { ?>
            <button id=" <?= $value->numero ?>" class=" boleto text-2xl  rounded  bg-gray-700  text-white">
             <i class="fa-solid fa-ticket"></i>  <br>
              <?= $value->numero ?></button>
          <?php }endforeach ?>
      </div>
      <div class="mt-4 mx-auto text-center">
        <h1 class="text-3xl text-gray-600 text-center">Boletos Apartados</h1>
        <div class="boletos-apartados text-center flex">

        </div>
        <button class=" rounded hover:bg-teal-800 my-3 px-4 py-3 bg-teal-700 text-white text-2xl">APARTAR
          BOLETO</button>
      </div>
    </div>
  </div>
  <?php endforeach ?>
  </div>
</main>
<?php
include 'includes/footer.php';

?>