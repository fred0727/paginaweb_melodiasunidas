<section class="flex p-8 w-full justify-center items-center flex-col gap-8 lg:flex-row lg:flex-wrap lg:px-48 lg:pb-12 lg:mb-16 xl:mb-24" data-aos="fade-up" data-aos-duration="1000">
  <?php
    $ventajas = [
      ['img' => 'imagen1_mobile.webp', 'title' => 'Clases dinámicas de 40 minutos', 'text' => 'Aprender, divertirse y avanzar, todo en una sola clase.'],
      ['img' => 'imagen2_mobile.webp', 'title' => 'Apoyo continuo entre clases', 'text' => 'Siempre estamos a un mensaje de distancia para lo que necesites.'],
      ['img' => 'imagen3_mobile.webp', 'title' => 'Clases para todas las edades', 'text' => 'No importa la edad, ¡la música es para todos!.'],
      ['img' => 'imagen4_mobile.webp', 'title' => 'Estructura educativa sin igual', 'text' => 'Nuestro método es único, adaptado para que avances de forma natural.'],
      ['img' => 'imagen5_mobile.webp', 'title' => 'Clases de refuerzo gratuitas', 'text' => 'Porque tu progreso nos importa, las clases de refuerzo son gratis.'],
      ['img' => 'imagen6_mobile.webp', 'title' => 'Dos audiciones anuales', 'text' => 'En diciembre y junio, es tu momento de brillar.'],
      ['img' => 'imagen7_mobile.webp', 'title' => 'Garantía de satisfacción', 'text' => 'Tu felicidad con las clases es nuestra prioridad.']
    ];

    foreach ($ventajas as $index => $v) {
      $id = $index + 1;
      echo <<<HTML
      <div class="flex justify-center items-center rounded-full w-[170px] h-[170px] shadow-lg cursor-pointer relative" data-aos="zoom-in" data-aos-delay="{$id}00" data-aos-duration="800">
        <div class="flex justify-center items-center rounded-full w-[170px] h-[170px] transition-all duration-300 overflow-hidden relative shadow-lg" onclick="viewText($id)">
          <div class="absolute w-full h-full bg-black/60 z-0 hover:bg-black/40"></div>
          <img src="./images/ventajas/{$v['img']}" alt="" class="object-cover w-full h-full" loading="lazy">
          <p class="absolute text-center p-4 text-base text-white z-10">{$v['title']}</p>
          <div class="absolute hidden rounded-full w-[170px] h-[170px] flex justify-center items-center text-center bg-slate-950 text-white text-xs p-4 z-30 message-circle transition-all duration-300 opacity-0" id="circle-$id" onclick="closeText()">{$v['text']}</div>
        </div>
      </div>
      HTML;
    }
  ?>
</section>
