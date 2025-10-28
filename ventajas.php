<!-- Sección de Ventajas Modernizada -->
<section class="py-16 lg:py-24 bg-gray-50" id="ventajas">
  <div class="max-w-7xl mx-auto px-6 lg:px-12">

    <!-- Header de la sección -->
    <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
      <div class="inline-flex items-center gap-2 bg-primary-color/10 rounded-full px-4 py-2 mb-6">
        <div class="w-2 h-2 bg-primary-color rounded-full animate-pulse"></div>
        <span class="text-sm font-medium text-primary-color">Nuestras ventajas</span>
      </div>
      <h2 class="text-3xl lg:text-4xl xl:text-5xl font-bold font-['Oswald'] text-gray-900 mb-4">
        ¿Por qué Melodías Unidas?
      </h2>
      <div class="w-24 h-1 bg-gradient-to-r from-primary-color to-secondary-color mx-auto"></div>
    </div>

    <!-- Grid de ventajas actualizado -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
      <?php
      $nuevas = [
        ['title' => 'Clases personalizadas de 40 minutos', 'text' => 'Clases cortas y enfocadas para aprovechar al máximo tu tiempo.', 'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'],
        ['title' => 'Seguimiento continuo entre sesiones', 'text' => 'Comunicación y apoyo entre clases para que avances sin fricciones.', 'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>'],
        ['title' => 'Clases para todas las edades y niveles', 'text' => 'Programas adaptados desde iniciación hasta perfeccionamiento.', 'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>'],
        ['title' => 'Dos audiciones al año', 'text' => 'Oportunidades para mostrar tu progreso en diciembre y junio.', 'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>'],
        ['title' => 'Garantía de satisfacción', 'text' => 'Si no notas avance, buscamos la forma de ajustarlo.', 'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>'],
        ['title' => 'Clases de refuerzo gratuitas', 'text' => 'Sesiones extra para consolidar lo trabajado sin coste adicional.', 'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>']
      ];

      foreach ($nuevas as $index => $v) {
        $delay = $index * 100;
        echo <<<HTML
          <div class="group" data-aos="fade-up" data-aos-delay="{$delay}" data-aos-duration="600">
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 p-6 h-full flex flex-col">
              <div class="flex items-center justify-between gap-4">
                <div class="flex-1">
                  <h3 class="text-base lg:text-lg font-semibold text-gray-900">{$v['title']}</h3>
                  <p class="mt-2 text-xs lg:text-sm text-gray-600">{$v['text']}</p>
                </div>
                <div class="w-12 h-12 flex items-center justify-center bg-primary-color/10 rounded-lg text-primary-color">
                  {$v['icon']}
                </div>
              </div>

              <div class="mt-6 mt-auto">
                <a href="#contacto" class="inline-flex items-center gap-2 text-xs lg:text-sm font-semibold text-primary-color/80 hover:underline">
                  Contacta y prueba una clase
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          HTML;
      }
      ?>
    </div>

  </div>
</section>