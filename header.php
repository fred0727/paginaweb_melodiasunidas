  <header class="relative bg-primary-color min-w-full flex justify-evenly items-center p-6 py-5" id="header">
    <div class="flex justify-around items-center w-full">
      <div class="flex flex-col justify-center items-center w-full">
        <h3 class="text-lg text-white font-semibold underline underline-offset-[5px] font-['Playwrite_ZA']">
          Melodías Unidas
        </h3>
        <span class="text-white text-lg font-['Oswald']">Escuela de Música</span>
      </div>
      <button id="btn-show-menu-mb">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7 text-white font-extrabold">
          <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
        </svg>
      </button>
    </div>
    <nav id="nav-menu-mobile" class="absolute hidden flex justify-center items-center top-[95px] z-50 w-full border border-t-gray-400/30 border-b-0 border-r-0 border-l-0 transition-all duration-100" data-aos="fade-right">
      <ul class="flex flex-col justify-center items-center gap-4 px-2 py-6 box-border bg-primary-color w-full text-white text-lg">
        <li class="font-['Oswald']"><a href="inicio.php">Inicio</a></li>
        <li class="font-['Oswald']"><a href="nosotros.php">Nosotros</a></li>
        <li class="font-['Oswald']">Blog</li>
        <li class="font-['Oswald']">Nuestro Profe</li>
        <li class="font-['Oswald']">
          <button class="bg-secondary-color text-black/80 px-2 py-1 rounded-sm font-['Oswald'] text-lg">
            Iniciar Sesión
          </button>
        </li>
      </ul>
    </nav>
  </header>