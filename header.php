  <header class="bg-primary-color lg:bg-transparent lg:fixed min-w-full flex justify-evenly items-center p-6 py-5 lg:px-14 xl:px-24 z-50" id="header">
    <div class="flex justify-around items-center w-full lg:justify-between xl:max-w-[1920px]">
      <a class="flex flex-col justify-center items-center w-full lg:max-w-[300px]" href="index.php">
        <h3 class="text-lg lg:text-xl text-white font-semibold underline underline-offset-[5px] font-['Playwrite_ZA']">
          Melodías Unidas
        </h3>
        <span class="text-white text-lg lg:text-xl font-['Oswald']">Escuela de Música</span>
      </a>
      <nav class="hidden lg:flex w-full justify-end">
        <ul class="flex items-center gap-8 text-white">
          <li><a href=" index.php" class="font-['Oswald'] text-xl">Inicio</a></li>
          <?php if ($pagina == "inicio") { ?>
            <li><a href="#testimonios" class="font-['Oswald'] text-xl">Testimonios</a></li>
          <?php } ?>
          <li><a href="nosotros.php" class="font-['Oswald'] text-xl">Nosotros</a></li>
          <li><a href="profejuancarlos.php" class="font-['Oswald'] text-xl">Nuestro Profe</a></li>
          <li><a href="index.php" class="font-['Oswald'] text-xl">Blog</a></li>
          <li class="">
            <button class="bg-secondary-color hover:bg-yellow-400 text-black px-6 py-2 rounded-full font-['Oswald'] text-base xl:text-lg transition-all duration-300">
              Iniciar Sesión
            </button>
          </li>
        </ul>
      </nav>
      <button id="btn-show-menu-mb" class="lg:hidden" title="Mostrar Menú" alt="Mostrar Menú">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7 text-white font-extrabold">
          <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
        </svg>
      </button>
    </div>
    <nav id="nav-menu-mobile" class="absolute hidden flex justify-center items-center top-[95px] z-50 w-full border border-t-gray-400/30 border-b-0 border-r-0 border-l-0 transition-all duration-100" data-aos="fade-right">
      <ul class="flex flex-col justify-center items-center gap-4 px-2 py-6 box-border bg-primary-color w-full text-white text-lg">
        <li><a href="index.php" class="font-['Oswald']">Inicio</a></li>
        <?php if ($pagina == "inicio") { ?>
          <li><a href="#testimonios" class="font-['Oswald'] text-xl">Testimonios</a></li>
        <?php } ?>
        <li><a href="nosotros.php" class="font-['Oswald']">Nosotros</a></li>
        <li><a href="profejuancarlos.php" class="font-['Oswald']">Nuestro Profe</a></li>
        <li><a href="index.php" class="font-['Oswald']">Blog</a></li>
        <li class="font-['Oswald']">
          <button class="bg-secondary-color hover:bg-yellow-400 text-black px-4 py-1 rounded-full font-['Oswald'] text-lg transition-all duration-300">
            Iniciar Sesión
          </button>
        </li>
      </ul>
    </nav>
  </header>