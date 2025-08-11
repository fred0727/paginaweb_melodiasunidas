<!-- Sección de Ventajas Modernizada -->
<section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-white">
  <div class="max-w-7xl mx-auto px-6 lg:px-12">
    
    <!-- Header de la sección -->
    <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
      <div class="inline-flex items-center gap-2 bg-primary-color/10 rounded-full px-4 py-2 mb-6">
        <div class="w-2 h-2 bg-primary-color rounded-full animate-pulse"></div>
        <span class="text-sm font-medium text-primary-color">Nuestras ventajas</span>
      </div>
      <h2 class="text-3xl lg:text-4xl xl:text-5xl font-bold font-['Oswald'] text-gray-900 mb-4">
        ¿Qué nos hace especiales?
      </h2>
      <div class="w-24 h-1 bg-gradient-to-r from-primary-color to-secondary-color mx-auto"></div>
    </div>

    <!-- Grid de ventajas -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
      <?php
        $ventajas = [
          [
            'img' => 'imagen1_mobile.webp', 
            'title' => 'Clases dinámicas de 40 minutos', 
            'text' => 'Aprender, divertirse y avanzar, todo en una sola clase.',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
            'color' => 'from-blue-500 to-blue-600'
          ],
          [
            'img' => 'imagen2_mobile.webp', 
            'title' => 'Apoyo continuo entre clases', 
            'text' => 'Siempre estamos a un mensaje de distancia para lo que necesites.',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>',
            'color' => 'from-green-500 to-green-600'
          ],
          [
            'img' => 'imagen3_mobile.webp', 
            'title' => 'Clases para todas las edades', 
            'text' => 'No importa la edad, ¡la música es para todos!',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>',
            'color' => 'from-purple-500 to-purple-600'
          ],
          [
            'img' => 'imagen4_mobile.webp', 
            'title' => 'Estructura educativa sin igual', 
            'text' => 'Nuestro método es único, adaptado para que avances de forma natural.',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>',
            'color' => 'from-orange-500 to-orange-600'
          ],
          [
            'img' => 'imagen5_mobile.webp', 
            'title' => 'Clases de refuerzo gratuitas', 
            'text' => 'Porque tu progreso nos importa, las clases de refuerzo son gratis.',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
            'color' => 'from-teal-500 to-teal-600'
          ],
          [
            'img' => 'imagen6_mobile.webp', 
            'title' => 'Dos audiciones anuales', 
            'text' => 'En diciembre y junio, es tu momento de brillar.',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>',
            'color' => 'from-pink-500 to-pink-600'
          ],
          [
            'img' => 'imagen7_mobile.webp', 
            'title' => 'Garantía de satisfacción', 
            'text' => 'Tu felicidad con las clases es nuestra prioridad.',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>',
            'color' => 'from-indigo-500 to-indigo-600'
          ]
        ];

        foreach ($ventajas as $index => $v) {
          $id = $index + 1;
          $delay = $index * 100;
          echo <<<HTML
          <div class="group" data-aos="fade-up" data-aos-delay="{$delay}" data-aos-duration="600">
            <!-- Card principal -->
            <div class="relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:border-primary-color/20 group-hover:-translate-y-2">
              
              <!-- Imagen de fondo -->
              <div class="relative h-48 overflow-hidden">
                <img src="./images/ventajas/{$v['img']}" 
                     alt="{$v['title']}" 
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" 
                     loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t {$v['color']} opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>
                
                <!-- Icono -->
                <div class="absolute top-4 left-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center text-white">
                  {$v['icon']}
                </div>
                
                <!-- Título -->
                <div class="absolute bottom-4 left-4 right-4">
                  <h3 class="text-white font-bold text-lg font-['Oswald'] leading-tight">
                    {$v['title']}
                  </h3>
                </div>
              </div>
              
              <!-- Contenido -->
              <div class="p-6">
                <p class="text-gray-600 leading-relaxed text-sm">
                  {$v['text']}
                </p>
                
                <!-- Botón de acción -->
                <div class="mt-4 flex items-center text-primary-color font-medium text-sm group-hover:text-primary-color/80 transition-colors">
                  <span>Conoce más</span>
                  <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          HTML;
        }
      ?>
    </div>
    
    <!-- Call to action final -->
    <div class="hidden text-center mt-16" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
      <div class="bg-gradient-to-r from-primary-color to-primary-color/90 rounded-2xl p-8 text-white max-w-4xl mx-auto">
        <h3 class="text-2xl lg:text-3xl font-bold font-['Oswald'] mb-4">
          ¿Listo para vivir todas estas ventajas?
        </h3>
        <p class="text-lg mb-6 opacity-90">
          Únete a cientos de estudiantes que ya disfrutan de la mejor experiencia musical online
        </p>
        <a href="#contacto" 
           class="inline-flex items-center gap-3 bg-secondary-color hover:bg-yellow-400 text-black font-bold px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg">
          <span>¡Empezar ahora!</span>
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
          </svg>
        </a>
      </div>
    </div>
    
  </div>
</section>
