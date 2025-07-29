<?php
function mostrarDocente($id, $nombre, $descripcion, $rol, $imagen, $enlace, $visible = false)
{
    $clase = $visible ? "flex" : "hidden";
    echo <<<HTML
    <div class="max-w-[500px]" onclick="changeProfe('$id')">
      <div class="rounded-full w-[50px] h-[50px] lg:w-[125px] lg:h-[125px] xl:w-[150px] xl:h-[150px] transition-all duration-300 overflow-hidden cursor-pointer grayscale hover:grayscale-0" id="profe-$id">
        <img src="$imagen" alt="$nombre" class="object-cover w-full h-full">
      </div>
    </div>
    <div class="flex $clase justify-center items-center flex-col mt-4 transition-all duration-300" id="profe-$id">
      <p class="font-light mt-2 mb-4 text-center text-xs md:text-base lg:text-lg">$descripcion</p>
      <h3 class="text-sky-700 text-lg text-center lg:text-xl">$nombre</h3>
      <span class="font-light text-center text-xs md:text-base lg:text-lg">$rol</span>
      <a href="$enlace" class="text-sky-600 text-sm lg:text-base mt-4 border border-sky-600 hover:text-white hover:bg-sky-600 rounded-md px-4 py-2 transition-all duration-300">Conóceme</a>
    </div>
  HTML;
}
