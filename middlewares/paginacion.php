<?php

function paginacion($pagina, $inicio, $registros, $totalRegistros)
{
  $paginas = ceil($totalRegistros / $registros);
  $templade = '';
  $disabledNext = ($pagina == $paginas) ? 'hidden' : '';
  $disabledPrevius = ($pagina == 1) ? 'hidden' : '';
  $itemsMostrar = 5;



  $templade .= '
    <nav aria-label="Page navigation example">
      <ul class="inline-flex items-center -space-x-px">
        <li>
          <a href="?pagina=' . ($pagina - 1) . '" class="block ' . $disabledPrevius . '  px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700  ">
            <span class="sr-only">Previous</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
          </a>
        </li>';
  if ($pagina > ($itemsMostrar + 2)) {

    $templade .= '<li>
              <a href="" class=" bg-teal-700 px-3 py-2 leading-tight  border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">...</a>
            </li>';
  }


  $itemMinimo = ($pagina>$itemsMostrar) ? ($pagina-$itemsMostrar) : 1;
  $itemMaximo = ($pagina < ($paginas-$itemsMostrar)) ? ($pagina+$itemsMostrar) : $paginas;
  for ($i = $itemMinimo; $i<$itemMaximo; $i++) {
    $active = ($pagina == $i) ? "bg-teal-700 text-white" : "bg-white text-gray-500";
      echo $itemMaximo.' ';
      $templade .= '<li>
                <a href="?pagina=' . $i . '" class="' . $active . ' bg-teal-700 px-3 py-2 leading-tight  border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">' . $i . '</a>
              </li>';
    }

    if($pagina<($paginas-$itemsMostrar-1)) {
      $templade.='<li>
      <a href="" class="  px-3 py-2 leading-tight  border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">...</a>
    </li>';
    }


  $templade .= '<li>
          <a href="?pagina=' . ($pagina + 1) . '" class=" ' . $disabledNext . ' block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 ">
            <span class="sr-only">Next</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          </a>
        </li>
      </ul>
    </nav>
    ';
  echo $templade;
}