  <header class="bg-primary-color fixed top-0 left-0 w-full z-[9998] lg:px-12" id="header">
    <!-- Barra principal con logo y menú -->
    <div class="py-4 lg:py-4 px-4 lg:px-6 xl:px-8">
      <div class="flex justify-between items-center w-full max-w-7xl mx-auto min-w-0 gap-2">
        <!-- Logo Section -->
        <a class="flex flex-col justify-center items-center group transition-all duration-300 hover:scale-105 flex-shrink-0 min-w-0 overflow-hidden" href="index.php">
          <h3 class="text-base lg:text-lg xl:text-xl text-white font-bold tracking-wide font-['Playwrite_ZA'] drop-shadow-md whitespace-nowrap truncate max-w-full">
            Melodías Unidas
          </h3>
          <span class="text-white/90 text-xs lg:text-sm font-['Oswald'] font-light tracking-wider whitespace-nowrap truncate max-w-full">
            Tu comunidad musical
          </span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex flex-shrink min-w-0">
          <ul class="flex items-center gap-1 xl:gap-2 text-white flex-wrap">
            <li class="flex-shrink-0">
              <a href="index.php" class="font-['Oswald'] text-sm xl:text-lg px-2 xl:px-3 py-2 rounded-lg hover:bg-white/10 transition-all duration-300 hover:scale-105 border-b-2 border-transparent hover:border-white/50 whitespace-nowrap">
                Inicio
              </a>
            </li>
            <li class="flex-shrink-0">
              <a href="nosotros.php" class="font-['Oswald'] text-sm xl:text-lg px-2 xl:px-3 py-2 rounded-lg hover:bg-white/10 transition-all duration-300 hover:scale-105 border-b-2 border-transparent hover:border-white/50 whitespace-nowrap">
                Nosotros
              </a>
            </li>
            <li class="flex-shrink-0">
              <a href="como-funciona.php" class="font-['Oswald'] text-sm xl:text-lg px-2 xl:px-3 py-2 rounded-lg hover:bg-white/10 transition-all duration-300 hover:scale-105 border-b-2 border-transparent hover:border-white/50 whitespace-nowrap">
                ¿Cómo funciona?
              </a>
            </li>
            <li class="flex-shrink-0">
              <a href="encuentros.php" class="font-['Oswald'] text-sm xl:text-lg px-2 xl:px-3 py-2 rounded-lg hover:bg-white/10 transition-all duration-300 hover:scale-105 border-b-2 border-transparent hover:border-white/50 whitespace-nowrap">
                Encuentros Musicales
              </a>
            </li>
            <li class="flex-shrink-0 relative">
              <div class="group">
                <button class="font-['Oswald'] text-sm xl:text-lg px-2 xl:px-3 py-2 rounded-lg hover:bg-white/10 transition-all duration-300 hover:scale-105 border-b-2 border-transparent hover:border-white/50 whitespace-nowrap flex items-center gap-1">
                  Profesores
                  <svg class="w-3 h-3 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </button>
                <!-- Dropdown Menu -->
                <div class="fixed top-16 w-44 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[99999]" style="left: calc(var(--profesores-left, 0px));">
                  <a href="profejuancarlos.php" class="block px-4 py-3 text-gray-700 hover:bg-primary-color hover:text-white transition-all duration-200 font-['Oswald'] text-sm rounded-t-xl">
                    Juan Carlos
                  </a>
                  <a href="profesantiago.php" class="block px-4 py-3 text-gray-700 hover:bg-primary-color hover:text-white transition-all duration-200 font-['Oswald'] text-sm border-t border-gray-100">
                    Santiago
                  </a>
                  <a href="profejoseantonio.php" class="block px-4 py-3 text-gray-700 hover:bg-primary-color hover:text-white transition-all duration-200 font-['Oswald'] text-sm border-t border-gray-100 rounded-b-xl">
                    José Antonio
                  </a>
                </div>
              </div>
            </li>
            <li class="flex-shrink-0">
              <a href="contenido-digital.php" class="font-['Oswald'] text-sm xl:text-lg px-2 xl:px-3 py-2 rounded-lg hover:bg-white/10 transition-all duration-300 hover:scale-105 border-b-2 border-transparent hover:border-white/50 whitespace-nowrap">
                Contenido Digital
              </a>
            </li>
            <li class="flex-shrink-0">
              <a href="faq.php" class="font-['Oswald'] text-sm xl:text-lg px-2 xl:px-3 py-2 rounded-lg hover:bg-white/10 transition-all duration-300 hover:scale-105 border-b-2 border-transparent hover:border-white/50 whitespace-nowrap">
                FAQ
              </a>
            </li>
          </ul>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="btn-show-menu-mb" class="lg:hidden p-1 sm:p-2 rounded-lg hover:bg-white/10 transition-all duration-300 group flex-shrink-0 w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center" title="Mostrar Menú" alt="Mostrar Menú">
          <!-- Ícono hamburguesa (mostrado por defecto) -->
          <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white group-hover:scale-110 transition-transform duration-300">
            <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
          </svg>
          <!-- Ícono X (oculto por defecto) -->
          <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white group-hover:scale-110 transition-transform duration-300 hidden">
            <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
        </button>
      </div>
      <!-- Mobile Menu Dropdown (se muestra debajo de la barra principal) -->
      <div id="mobile-menu-dropdown" class="hidden lg:hidden bg-primary-color">
        <div class="px-4 py-4">
          <ul class="space-y-2">
            <li>
              <a href="index.php" class="font-['Oswald'] text-lg block p-3 rounded-lg hover:bg-white/10 transition-all duration-300 text-white border-l-4 border-transparent hover:border-secondary-color">
                Inicio
              </a>
            </li>
            <li>
              <a href="nosotros.php" class="font-['Oswald'] text-lg block p-3 rounded-lg hover:bg-white/10 transition-all duration-300 text-white border-l-4 border-transparent hover:border-secondary-color">
                Nosotros
              </a>
            </li>
            <li>
              <a href="como-funciona.php" class="font-['Oswald'] text-lg block p-3 rounded-lg hover:bg-white/10 transition-all duration-300 text-white border-l-4 border-transparent hover:border-secondary-color">
                ¿Cómo funciona?
              </a>
            </li>
            <li>
              <a href="encuentros.php" class="font-['Oswald'] text-lg block p-3 rounded-lg hover:bg-white/10 transition-all duration-300 text-white border-l-4 border-transparent hover:border-secondary-color">
                Encuentros Musicales
              </a>
            </li>
            <li>
              <div class="profesores-mobile-dropdown">
                <button class="font-['Oswald'] text-lg w-full text-left p-3 rounded-lg hover:bg-white/10 transition-all duration-300 text-white border-l-4 border-transparent hover:border-secondary-color flex items-center justify-between" onclick="toggleProfesoresDropdown()">
                  Profesores
                  <svg class="w-4 h-4 transition-transform duration-300" id="profesores-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </button>
                <div id="profesores-submenu" class="hidden ml-4 mt-2 space-y-1">
                  <a href="profejuancarlos.php" class="font-['Oswald'] text-base block p-2 pl-4 rounded-lg hover:bg-white/10 transition-all duration-300 text-white/90 border-l-2 border-transparent hover:border-secondary-color">
                    Juan Carlos
                  </a>
                  <a href="profesantiago.php" class="font-['Oswald'] text-base block p-2 pl-4 rounded-lg hover:bg-white/10 transition-all duration-300 text-white/90 border-l-2 border-transparent hover:border-secondary-color">
                    Santiago
                  </a>
                  <a href="profejoseantonio.php" class="font-['Oswald'] text-base block p-2 pl-4 rounded-lg hover:bg-white/10 transition-all duration-300 text-white/90 border-l-2 border-transparent hover:border-secondary-color">
                    José Antonio
                  </a>
                </div>
              </div>
            </li>
            <li>
              <a href="contenido-digital.php" class="font-['Oswald'] text-lg block p-3 rounded-lg hover:bg-white/10 transition-all duration-300 text-white border-l-4 border-transparent hover:border-secondary-color">
                Contenido Digital
              </a>
            </li>
            <li>
              <a href="faq.php" class="font-['Oswald'] text-lg block p-3 rounded-lg hover:bg-white/10 transition-all duration-300 text-white border-l-4 border-transparent hover:border-secondary-color">
                FAQ
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Script simple para menú móvil -->
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          const btnMenu = document.getElementById('btn-show-menu-mb');
          const menuDropdown = document.getElementById('mobile-menu-dropdown');
          const menuIcon = document.getElementById('menu-icon');
          const closeIcon = document.getElementById('close-icon');

          let isMenuOpen = false;

          console.log('🎵 Inicializando menú móvil simple');

          if (btnMenu && menuDropdown && menuIcon && closeIcon) {
            btnMenu.addEventListener('click', function(e) {
              e.preventDefault();
              isMenuOpen = !isMenuOpen;

              console.log('🔄 Toggle menú:', isMenuOpen ? 'ABRIR' : 'CERRAR');

              if (isMenuOpen) {
                // Mostrar menú
                menuDropdown.classList.remove('hidden');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
                console.log('✅ Menú ABIERTO');
              } else {
                // Ocultar menú
                menuDropdown.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                console.log('❌ Menú CERRADO');
              }
            });

            // Cerrar menú al hacer click en enlaces
            const menuLinks = menuDropdown.querySelectorAll('a');
            menuLinks.forEach(function(link) {
              link.addEventListener('click', function() {
                isMenuOpen = false;
                menuDropdown.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                console.log('🔗 Menú cerrado por enlace');
              });
            });
          }

          // Posicionamiento del dropdown de profesores
          const profesoresButton = document.querySelector('li .group button');
          const profesoresDropdown = document.querySelector('li .group div[style*="--profesores-left"]');

          if (profesoresButton && profesoresDropdown) {
            function updateDropdownPosition() {
              const buttonRect = profesoresButton.getBoundingClientRect();
              const leftPosition = buttonRect.left;
              document.documentElement.style.setProperty('--profesores-left', leftPosition + 'px');
            }

            // Actualizar posición al cargar
            updateDropdownPosition();

            // Actualizar posición al redimensionar
            window.addEventListener('resize', updateDropdownPosition);

            // Actualizar posición al hacer hover
            profesoresButton.parentElement.addEventListener('mouseenter', updateDropdownPosition);
          }
        });

        // Función para el dropdown de profesores en móvil
        function toggleProfesoresDropdown() {
          const submenu = document.getElementById('profesores-submenu');
          const arrow = document.getElementById('profesores-arrow');

          if (submenu && arrow) {
            submenu.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
          }
        }
      </script>
  </header>