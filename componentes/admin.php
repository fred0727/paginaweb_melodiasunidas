<?php
function mostrarAdmin($id, $nombre, $descripcion, $rol, $imagen, $email, $visible = false)
{
    $clase = $visible ? "flex" : "hidden";
    $correo = urlencode("Quiero información");
    echo <<<HTML
    <div class="max-w-[500px]" onclick="changeAdmin('$id')">
      <div class="rounded-full w-[50px] h-[50px] lg:w-[125px] lg:h-[125px] xl:w-[150px] xl:h-[150px] transition-all duration-300 overflow-hidden cursor-pointer grayscale hover:grayscale-0" id="admin-$id">
        <img src="$imagen" alt="$nombre" class="object-cover w-full h-full">
      </div>
    </div>
    <div class="flex $clase justify-center items-center flex-col mt-4 transition-all duration-300" id="admin-$id">
      <p class="font-light mt-2 mb-4 text-center text-xs md:text-base xl:text-lg">$descripcion</p>
      <h3 class="text-sky-700 text-lg lg:text-xl text-center">$nombre</h3>
      <span class="font-light text-center text-xs md:text-base xl:text-lg">$rol</span>
      <a href="mailto:$email?Subject=$correo" title="Contactame" class="flex justify-center items-center gap-2 text-sky-600 hover:underline text-sm lg:text-base mt-4 px-4 py-2 transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
        </svg>
        $email
      </a>
    </div>
  HTML;
}
