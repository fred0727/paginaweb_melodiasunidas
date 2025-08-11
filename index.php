<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Melodías Unidas | Escuela de Música</title>
  <meta name="description" content="¡Siente el Vínculo Musical que Une Nuestros Corazones en Todo el Mundo!">
  <meta name="keywords" content="clases de musica, clases de piano, piano, clases online de piano, escuela de piano">
  <meta name="author" content="Melodías Unidas">
  <link rel="icon" href="./images/logo/iconoround.png" type="image/x-icon">
  <link rel="apple-touch-icon" href="./images/logo/iconoround.png">
  <link rel="canonical" href="https://www.melodiasunidas.com">
  <link href="./src/css/main.css?v=20250810" rel="stylesheet" />
  <link href="./src/css/aos-master/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" defer />
  <link href="./src/output_v6.css?v=20250810" rel="stylesheet" defer />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<?php
$pagina = "inicio";
?>

<body>
  <!-- Encabezado -->
  <?php include("header.php") ?>

  <!-- Hero Section Modernizado -->
  <section id="hero" class="relative w-full h-screen overflow-hidden">
    <!-- Slides con optimización -->
    <div id="slider" class="absolute inset-0 w-full h-full">
      <!-- Slide 1 -->
      <picture class="slide opacity-100 transition-opacity duration-1000 absolute inset-0">
        <source srcset="./images/slider/imagen1.webp" type="image/webp" />
        <img src="./images/slider/imagen1.jpg" alt="Estudiantes de piano disfrutando clases online" class="w-full h-full object-cover" loading="eager" />
      </picture>

      <!-- Slide 2 -->
      <picture class="slide opacity-0 transition-opacity duration-1000 absolute inset-0">
        <source srcset="./images/slider/imagen2.webp" type="image/webp" />
        <img src="./images/slider/imagen2.jpg" alt="Clases de música personalizadas" class="w-full h-full object-cover" loading="lazy" />
      </picture>

      <!-- Slide 3 -->
      <picture class="slide opacity-0 transition-opacity duration-1000 absolute inset-0">
        <source srcset="./images/slider/imagen3.webp" type="image/webp" />
        <img src="./images/slider/imagen3.jpg" alt="Profesores expertos en música" class="w-full h-full object-cover" loading="lazy" />
      </picture>
    </div>

    <!-- Overlay mejorado -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/30 z-10"></div>

    <!-- Contenido principal -->
    <div class="relative z-20 flex flex-col items-center justify-center h-full text-center px-6 max-w-5xl mx-auto">
      <h1 class="text-white font-bold text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-['Oswald'] mb-6 animate__animated animate__fadeInDown leading-tight">
        ¡La música es nuestro idioma común, no importa dónde estés!
      </h1>
      <p class="text-white/90 text-lg sm:text-xl lg:text-2xl mb-8 max-w-3xl mx-auto animate__animated animate__fadeInUp animate__delay-1s">
        Descubre tu potencial musical con clases online personalizadas
      </p>
      <a
        href="#contacto"
        class="inline-flex items-center gap-3 bg-gradient-to-r from-secondary-color to-yellow-400 hover:from-yellow-400 hover:to-secondary-color text-black font-bold py-4 px-8 rounded-full text-lg sm:text-xl transition-all duration-300 transform hover:scale-105 hover:shadow-2xl font-['Oswald'] animate__animated animate__fadeInUp animate__delay-2s"
        aria-label="Comenzar aventura musical - Ir a contacto">
        <span>¡Dale play a tu aventura musical!</span>
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </a>
    </div>

    <!-- Controles de navegación mejorados -->
    <div class="absolute top-1/2 w-full px-4 z-30 flex justify-between items-center -translate-y-1/2">
      <button id="prevBtn" 
              aria-label="Imagen anterior" 
              class="bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white p-4 rounded-full transition-all duration-300 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-white/50">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </button>
      <button id="nextBtn" 
              aria-label="Siguiente imagen" 
              class="bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white p-4 rounded-full transition-all duration-300 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-white/50">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>

    <!-- Indicadores de slide -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-30 flex space-x-3">
      <button class="slide-indicator active w-3 h-3 rounded-full bg-white transition-all duration-300" data-slide="0" aria-label="Ir a slide 1"></button>
      <button class="slide-indicator w-3 h-3 rounded-full bg-white/50 hover:bg-white/75 transition-all duration-300" data-slide="1" aria-label="Ir a slide 2"></button>
      <button class="slide-indicator w-3 h-3 rounded-full bg-white/50 hover:bg-white/75 transition-all duration-300" data-slide="2" aria-label="Ir a slide 3"></button>
    </div>
  </section>

  <!-- Sección de Introducción Modernizada -->
  <section class="bg-gradient-to-br from-white to-gray-50 text-gray-900 py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="flex flex-col-reverse lg:flex-row items-center gap-12 lg:gap-20">

        <!-- Contenido de texto -->
        <div class="flex-1 space-y-8 text-center lg:text-left" data-aos="fade-right" data-aos-duration="800">
          <div class="space-y-4">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-['Oswald'] leading-tight">
              NUESTRAS CLASES ONLINE:
            </h2>
            <p class="text-xl lg:text-2xl text-gray-600 font-light">
              ¡Como si estuviéramos ahí, pero sin salir de casa!
            </p>
          </div>
          
          <div class="w-20 h-1 bg-gradient-to-r from-primary-color to-secondary-color mx-auto lg:mx-0"></div>
          
          <p class="text-base lg:text-lg leading-relaxed text-gray-700 max-w-2xl mx-auto lg:mx-0">
            Nuestros profes están siempre al pie del cañón para acompañarte en esta aventura musical. Con clases online a tu medida, se aseguran de que no se te escape ni un detalle: desde cómo te sientas al tocar hasta que te sientas un crack en la técnica. ¡Vas a tener una base tan sólida que los desafíos van a parecer pan comido!
          </p>

          <!-- Stats Cards -->
          <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 pt-8">
            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-100 text-center">
              <div class="text-2xl font-bold text-primary-color mb-1">+12</div>
              <div class="text-sm text-gray-600">Años de experiencia</div>
            </div>
            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-100 text-center">
              <div class="text-2xl font-bold text-primary-color mb-1">+500</div>
              <div class="text-sm text-gray-600">Alumnos formados</div>
            </div>
            <!-- <div class="bg-white rounded-xl p-4 shadow-md border border-gray-100 text-center lg:col-span-1 col-span-2">
              <div class="text-2xl font-bold text-primary-color mb-1">100%</div>
              <div class="text-sm text-gray-600">Online</div>
            </div> -->
          </div>
        </div>

        <!-- Logo con efectos mejorados -->
        <div class="flex-shrink-0 lg:flex-1 max-w-md" data-aos="fade-left" data-aos-duration="800">
          <div class="relative group">
            <!-- Círculo de fondo decorativo -->
            <div class="absolute inset-0 bg-gradient-to-br from-primary-color/10 to-secondary-color/10 rounded-full transform rotate-6 group-hover:rotate-12 transition-transform duration-500"></div>
            <div class="absolute inset-4 bg-gradient-to-br from-secondary-color/10 to-primary-color/10 rounded-full transform -rotate-6 group-hover:-rotate-12 transition-transform duration-500 delay-100"></div>
            
            <!-- Logo principal -->
            <div class="relative bg-white rounded-full p-8 shadow-2xl group-hover:shadow-3xl transition-all duration-500">
              <!-- Contenedor circular para la imagen -->
              <div class="w-[140px] h-[140px] lg:w-[220px] lg:h-[220px] mx-auto rounded-full overflow-hidden bg-[#00011f] p-4">
                <img src="./images/logo/logo.png" 
                     alt="Logo Melodías Unidas - Escuela de música online" 
                     class="w-full h-full object-contain transform group-hover:scale-105 transition-transform duration-500" 
                     loading="lazy" />
              </div>
            </div>
            
            <!-- Elementos decorativos flotantes -->
            <div class="absolute -top-4 -right-4 w-8 h-8 bg-secondary-color rounded-full opacity-60 animate-bounce" style="animation-delay: 0.5s;"></div>
            <div class="absolute -bottom-6 -left-6 w-6 h-6 bg-primary-color rounded-full opacity-40 animate-bounce" style="animation-delay: 1s;"></div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- Sección de Audiciones Modernizada -->
  <section class="relative bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white overflow-hidden" id="audiciones-parallax">
    <!-- Elementos decorativos de fondo -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute top-10 left-10 w-20 h-20 border border-white/20 rounded-full"></div>
      <div class="absolute top-40 right-20 w-32 h-32 border border-white/10 rounded-full"></div>
      <div class="absolute bottom-20 left-1/4 w-16 h-16 border border-white/15 rounded-full"></div>
    </div>

    <div class="relative z-10 px-6 py-16 lg:py-24">
      <div class="max-w-6xl mx-auto text-center space-y-8">
        
        <!-- Header mejorado -->
        <div class="space-y-6" data-aos="fade-down" data-aos-duration="800">
          <div class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-full px-6 py-2 border border-white/20">
            <div class="w-2 h-2 bg-secondary-color rounded-full animate-pulse"></div>
            <span class="text-sm font-medium">Eventos especiales</span>
          </div>
          
          <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold font-['Oswald'] leading-tight">
            Nuestras Audiciones
          </h2>
          
          <div class="flex items-center justify-center gap-4">
            <div class="w-12 h-px bg-gradient-to-r from-transparent to-secondary-color"></div>
            <p class="text-xl lg:text-2xl font-medium text-secondary-color">¡El momentazo del año!</p>
            <div class="w-12 h-px bg-gradient-to-l from-transparent to-secondary-color"></div>
          </div>
        </div>

        <!-- Descripción -->
        <div class="max-w-4xl mx-auto space-y-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <p class="text-lg lg:text-xl leading-relaxed text-gray-300">
            En Melodías Unidas, las audiciones no son un concierto cualquiera… <span class="font-bold text-secondary-color">¡son EL PLANAZO!</span>
          </p>
          <p class="text-base lg:text-lg leading-relaxed text-gray-400">
            Es el momento en el que nuestros alumnos sacan todo su esfuerzo, sus ganas y, sobre todo, su pasión por la música.
            Aquí no venimos a competir, venimos a disfrutar.
          </p>
        </div>

        <!-- Video Section mejorada -->
        <div class="relative max-w-4xl mx-auto" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
          <div class="relative group">
            <!-- Decoración del video -->
            <div class="absolute -inset-4 bg-gradient-to-r from-primary-color/20 to-secondary-color/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
            
            <!-- Video container -->
            <div class="relative bg-black rounded-2xl overflow-hidden shadow-2xl border border-white/10">
              <!-- Thumbnail -->
              <img
                id="video-thumbnail"
                src="./images/logo/audiciones.png"
                alt="Ver audición en video - Estudiantes tocando piano"
                class="w-full aspect-video object-cover cursor-pointer transition-all duration-500 group-hover:scale-105"
                loading="lazy" />

              <!-- Play button overlay -->
              <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-100 group-hover:opacity-90 transition-opacity duration-300 cursor-pointer" id="play-overlay">
                <div class="bg-white/20 backdrop-blur-sm rounded-full p-6 group-hover:scale-110 transition-transform duration-300">
                  <svg class="w-12 h-12 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z"/>
                  </svg>
                </div>
              </div>

              <!-- Video element -->
              <video
                id="video-audicion"
                class="w-full aspect-video hidden"
                controls
                preload="none">
                <source src="./videos/audicion.mp4" type="video/mp4" />
                <p>Tu navegador no soporta el elemento video. <a href="./videos/audicion.mp4">Descargar video</a></p>
              </video>
            </div>
          </div>

          <!-- Video info -->
          <div class="mt-6 text-center">
            <p class="text-sm text-gray-400">Haz clic para ver las audiciones de nuestros estudiantes</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Sección Nuestro Profe Modernizada -->
  <section class="bg-gradient-to-br from-white to-gray-50 py-16 lg:py-24" id="nuestro-profe">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
        
        <!-- Información del Profesor -->
        <div class="flex-1 space-y-8" data-aos="fade-right" data-aos-duration="800">
          <!-- Header -->
          <div class="space-y-4">
            <div class="inline-flex items-center gap-2 bg-primary-color/10 rounded-full px-4 py-2">
              <div class="w-2 h-2 bg-primary-color rounded-full"></div>
              <span class="text-sm font-medium text-primary-color">Conoce a nuestro profesor</span>
            </div>
            
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-['Oswald'] text-gray-900 leading-tight">
              Nuestras clases de piano
            </h2>
          </div>

          <!-- Profesor Info -->
          <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-lg border border-gray-100">
            <div class="flex items-center gap-4 mb-6">
              <div class="flex items-center justify-center w-12 h-12 bg-gradient-to-r from-primary-color to-primary-color/80 rounded-xl">
                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl lg:text-2xl font-bold font-['Oswald'] text-gray-900">Juan Carlos Salazar Rico</h3>
                <p class="text-primary-color font-medium">Profesor de Piano</p>
              </div>
            </div>

            <!-- Biografía -->
            <div class="space-y-4 text-gray-700 leading-relaxed">
              <p>
                Juan Carlos es nuestro profe de piano y el que coordina a todo el equipo docente.
                Empezó su aventura en la música cuando tenía solo 8 años, y desde entonces no ha parado.
              </p>
              <p>
                Después de estudiar en Roma con el maestro Sasha Bajcic, y tras pasar por la escuela rusa de piano de la mano de Verónica Metakovskaia,
                Juan Carlos consiguió su Título de Grado Profesional en Piano, otorgado por el Conservatorio Adolfo Salazar. ¡Todo un crack!
              </p>
              <p>
                A la hora de enseñar, adapta sus clases a cada alumno, porque sabe que cada uno tiene su propio ritmo y estilo.
                Lleva más de tres décadas tocando el piano y más de doce años enseñando.
                Además, participa en muchos talleres y seminarios para seguir creciendo. Su misión es clara:
                que cada alumno encuentre su lugar en la música y saque todo su potencial.
              </p>
            </div>

            <!-- Highlights -->
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
              <div class="text-center p-4 bg-gray-50 rounded-xl">
                <div class="text-2xl font-bold text-primary-color mb-1">30+</div>
                <div class="text-sm text-gray-600">Años tocando</div>
              </div>
              <div class="text-center p-4 bg-gray-50 rounded-xl">
                <div class="text-2xl font-bold text-primary-color mb-1">12+</div>
                <div class="text-sm text-gray-600">Años enseñando</div>
              </div>
              <div class="text-center p-4 bg-gray-50 rounded-xl col-span-2 lg:col-span-1">
                <div class="text-2xl font-bold text-primary-color mb-1">∞</div>
                <div class="text-sm text-gray-600">Pasión musical</div>
              </div>
            </div>
          </div>

          <!-- CTA Button -->
          <div class="flex justify-center lg:justify-start">
            <a href="profejuancarlos.php"
               class="inline-flex items-center gap-3 bg-gradient-to-r from-secondary-color to-yellow-400 hover:from-yellow-400 hover:to-secondary-color text-black font-bold px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105 hover:shadow-lg font-['Oswald']">
              <span>Conóceme más</span>
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </a>
          </div>
        </div>

        <!-- Foto del Profesor -->
        <div class="flex-shrink-0" data-aos="fade-left" data-aos-duration="800">
          <div class="relative group">
            <!-- Decoración de fondo -->
            <div class="absolute inset-0 bg-gradient-to-br from-primary-color/20 to-secondary-color/20 rounded-full transform rotate-6 group-hover:rotate-12 transition-transform duration-500"></div>
            <div class="absolute inset-4 bg-gradient-to-br from-secondary-color/20 to-primary-color/20 rounded-full transform -rotate-6 group-hover:-rotate-12 transition-transform duration-500"></div>
            
            <!-- Imagen principal -->
            <div class="relative">
              <img src="./images/profes/juancarlos.webp"
                   alt="Juan Carlos Salazar Rico - Profesor de piano en Melodías Unidas"
                   class="relative z-10 w-[280px] h-[280px] lg:w-[350px] lg:h-[350px] object-cover rounded-full shadow-2xl border-4 border-white grayscale group-hover:grayscale-0 transition-all duration-500 transform group-hover:scale-105"
                   loading="lazy" />
              
              <!-- Badge flotante -->
              <div class="absolute -bottom-4 -right-4 bg-white rounded-full p-4 shadow-lg border border-gray-100 z-20">
                <div class="text-center">
                  <div class="text-sm font-bold text-primary-color">Profesor</div>
                  <!-- <div class="text-xs text-gray-600">Principal</div> -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Nuestro Equipo -->
  <!-- <section
    id="nuestroequipo-parallax"
    class="relative flex flex-col items-center justify-center text-black px-6 py-16 bg-black/70 sm:px-16 lg:px-48 xl:py-48"> -->
  <section
    id=""
    class="relative flex flex-col items-center justify-center text-black px-6 py-16 sm:px-16 lg:px-48 xl:py-24 bg-gray-50">
    <!-- Título principal -->
    <h2 class="text-3xl font-bold text-center font-['Oswald'] sm:text-4xl xl:text-5xl animate__animated animate__fadeInDown">
      Nuestro equipo
    </h2>

    <!-- Subtítulo -->
    <p
      class="mt-4 text-lg text-center font-['Oswald'] sm:text-xl lg:text-2xl animate__animated animate__fadeIn animate__delay-1s">
      ¡Hey, bienvenidos a Melodías Unidas!
    </p>

    <!-- Párrafo descriptivo -->
    <div
      class="mt-6 text-justify text-sm leading-relaxed lg:text-base xl:text-lg max-w-5xl animate__animated animate__fadeInUp animate__delay-2s"
      data-aos="zoom-in"
      data-aos-duration="1000">
      <p class="mb-4">
        Aquí somos un equipo súper preparado y lleno de energía para hacer de tu experiencia musical algo único.
        Desde que entras por primera vez, te recibimos con buena onda y todas las ganas de compartir nuestra pasión.
        No somos solo profes, somos una familia musical que cree en la magia de la música y en lo que nos conecta.
      </p>
      <p>
        Estamos aquí para echarte una mano, resolver tus dudas y celebrar tus éxitos.
        Únete a la aventura, ¡estamos deseando conocerte y compartir nuestra pasión contigo!
      </p>
    </div>
  </section>

  <!-- Nuestros colaboradores -->
  <?php
  // include("colaboradores.php") 
  ?>
  <section class="w-full px-6 py-16 sm:px-12 lg:px-24 xl:px-48  text-gray-800 bg-gray-50" data-aos="fade-up" data-aos-duration="1000" id="equipo-docente">
    <h2 class="text-3xl lg:text-4xl xl:text-5xl font-bold font-['Oswald'] text-center mb-12">
      Equipo Docente
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
      <!-- Docente 1 -->
      <div class="group flex flex-col items-center text-center transition-all duration-300 hover:shadow-xl hover:scale-105 bg-white p-6 rounded-xl cursor-pointer" onclick="changeProfe('juancarlos')">
        <div class="w-32 h-32 lg:w-40 lg:h-40 rounded-full overflow-hidden mb-4">
          <img src="./images/profes/juancarlos.webp" alt="Juan Carlos" class="object-cover w-full h-full grayscale group-hover:grayscale-0 transition-all duration-300">
        </div>
        <h3 class="text-xl font-semibold text-sky-700">Juan Carlos</h3>
        <p class="text-sm lg:text-base text-gray-600 mt-2">Piano clásico y moderno</p>
        <span class="text-xs text-gray-500 mt-1">Coordinador del equipo docente</span>
        <a href="profejuancarlos.php" class="mt-4 inline-block border border-sky-600 text-sky-600 px-4 py-2 rounded-md hover:bg-sky-600 hover:text-white text-sm transition-all duration-300">
          Conóceme
        </a>
      </div>

      <!-- Docente 2 -->
      <div class="group flex flex-col items-center text-center transition-all duration-300 hover:shadow-xl hover:scale-105 bg-white p-6 rounded-xl cursor-pointer" onclick="changeProfe('santiago')">
        <div class="w-32 h-32 lg:w-40 lg:h-40 rounded-full overflow-hidden mb-4">
          <img src="./images/profes/santiago.jpeg" alt="Santiago" class="object-cover w-full h-full grayscale group-hover:grayscale-0 transition-all duration-300">
        </div>
        <h3 class="text-xl font-semibold text-sky-700">Santiago Andrés Medina</h3>
        <p class="text-sm lg:text-base text-gray-600 mt-2">Lenguaje musical, teoría y producción musical</p>
        <a href="profesantiago.php" class="mt-4 inline-block border border-sky-600 text-sky-600 px-4 py-2 rounded-md hover:bg-sky-600 hover:text-white text-sm transition-all duration-300">
          Conóceme
        </a>
      </div>

      <!-- Docente 3 -->
      <div class="group flex flex-col items-center text-center transition-all duration-300 hover:shadow-xl hover:scale-105 bg-white p-6 rounded-xl cursor-pointer" onclick="changeProfe('joseantonio')">
        <div class="w-32 h-32 lg:w-40 lg:h-40 rounded-full overflow-hidden mb-4">
          <img src="./images/profes/joseantonio.webp" alt="José Antonio" class="object-cover w-full h-full grayscale group-hover:grayscale-0 transition-all duration-300">
        </div>
        <h3 class="text-xl font-semibold text-sky-700">José Antonio Aguilar</h3>
        <p class="text-sm lg:text-base text-gray-600 mt-2">Historia de la música</p>
        <a href="profejoseantonio.php" class="mt-4 inline-block border border-sky-600 text-sky-600 px-4 py-2 rounded-md hover:bg-sky-600 hover:text-white text-sm transition-all duration-300">
          Conóceme
        </a>
      </div>
    </div>
  </section>

  <section class="w-full px-6 py-16 sm:px-12 lg:px-24 xl:px-48 bg-gray-50 text-gray-800" data-aos="fade-up" data-aos-duration="1000" id="equipo-admin">
    <h2 class="text-3xl lg:text-4xl xl:text-5xl font-bold font-['Oswald'] text-center mb-12">
      Equipo de gestión y administración
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
      <!-- Manuel -->
      <div class="group flex flex-col items-center text-center transition-all duration-300 hover:shadow-xl hover:scale-105 bg-white p-6 rounded-xl">
        <div class="w-28 h-28 lg:w-32 lg:h-32 rounded-full overflow-hidden mb-4">
          <img src="./images/admins/manuel.jpeg" alt="Manuel" class="object-cover w-full h-full grayscale group-hover:grayscale-0 transition-all duration-300">
        </div>
        <h3 class="text-xl font-semibold text-sky-700">Manuel</h3>
        <p class="text-sm lg:text-base text-gray-600 mt-2">Se encarga de que todo esté en orden y el equipo dé lo mejor de sí.</p>
        <span class="text-xs text-gray-500 mt-1">Director</span>
        <a href="mailto:direccion.melodiasunidas@gmail.com?Subject=Quiero%20información" title="Contáctame"
          class="flex items-center justify-center gap-2 text-sky-600 hover:underline text-sm mt-4 transition-all duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
          </svg>
          direccion.melodiasunidas@gmail.com
        </a>
      </div>

      <!-- Ana -->
      <div class="group flex flex-col items-center text-center transition-all duration-300 hover:shadow-xl hover:scale-105 bg-white p-6 rounded-xl">
        <div class="w-28 h-28 lg:w-32 lg:h-32 rounded-full overflow-hidden mb-4">
          <img src="./images/admins/ana.jpeg" alt="Ana" class="object-cover w-full h-full grayscale group-hover:grayscale-0 transition-all duration-300">
        </div>
        <h3 class="text-xl font-semibold text-sky-700">Ana</h3>
        <p class="text-sm lg:text-base text-gray-600 mt-2">Gestiona el calendario, cambios de clases y cancelaciones para que no te pierdas de nada.</p>
        <span class="text-xs text-gray-500 mt-1">Coordinadora académica</span>
        <a href="mailto:coordacademica.melodiasunidas@gmail.com?Subject=Quiero%20información" title="Contáctame"
          class="flex items-center justify-center gap-2 text-sky-600 hover:underline text-sm mt-4 transition-all duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
          </svg>
          coordacademica.melodiasunidas@gmail.com
        </a>
      </div>

      <!-- Lucia -->
      <div class="group flex flex-col items-center text-center transition-all duration-300 hover:shadow-xl hover:scale-105 bg-white p-6 rounded-xl">
        <div class="w-28 h-28 lg:w-32 lg:h-32 rounded-full overflow-hidden mb-4">
          <img src="./images/admins/lucia.jpeg" alt="Lucía" class="object-cover w-full h-full grayscale group-hover:grayscale-0 transition-all duration-300">
        </div>
        <h3 class="text-xl font-semibold text-sky-700">Lucía</h3>
        <p class="text-sm lg:text-base text-gray-600 mt-2">La que controla que las cuotas y las finanzas estén al día.</p>
        <span class="text-xs text-gray-500 mt-1">Contabilidad</span>
        <a href="mailto:contabilidad.melodiasunidas@gmail.com?Subject=Quiero%20información" title="Contáctame"
          class="flex items-center justify-center gap-2 text-sky-600 hover:underline text-sm mt-4 transition-all duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
          </svg>
          contabilidad.melodiasunidas@gmail.com
        </a>
      </div>

      <!-- Marina -->
      <div class="group flex flex-col items-center text-center transition-all duration-300 hover:shadow-xl hover:scale-105 bg-white p-6 rounded-xl">
        <div class="w-28 h-28 lg:w-32 lg:h-32 rounded-full overflow-hidden mb-4">
          <img src="./images/admins/marina.jpeg" alt="Marina" class="object-cover w-full h-full grayscale group-hover:grayscale-0 transition-all duration-300">
        </div>
        <h3 class="text-xl font-semibold text-sky-700">Marina</h3>
        <p class="text-sm lg:text-base text-gray-600 mt-2">Está siempre al tanto para ayudarte y organizar todo lo administrativo.</p>
        <span class="text-xs text-gray-500 mt-1">Secretaría</span>
        <a href="mailto:secretaria.melodiasunidas@gmail.com?Subject=Quiero%20información" title="Contáctame"
          class="flex items-center justify-center gap-2 text-sky-600 hover:underline text-sm mt-4 transition-all duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
          </svg>
          secretaria.melodiasunidas@gmail.com
        </a>
      </div>
    </div>
  </section>

  <!-- Porque elegirnos -->
  <section class="hidden flex p-8 w-full justify-center items-center flex-col gap-4 sm:px-32 lg:px-48 py-16 bg-gradient-to-br from-gray-50 to-white">
    <h4 class="text-2xl font-[Oswald] font-medium lg:text-3xl xl:text-4xl" data-aos="fade-up" data-aos-duration="1000">¿Por qué elegirnos?</h4>
    <p class="text-[12px] lg:text-base lg:px-8 lg:mt-6 text-center" data-aos="zoom-in" data-aos-duration="1000">
      En Melodías Unidas no solo damos clases, creamos experiencias musicales que recordarás. <br>
      ¿Por qué somos la mejor opción? <br><br>
      <span class="font-medium lg:text-lg">Mira esto:</span>
    </p>
  </section>

  <?php include("ventajas.php"); ?>

  <!-- Testimonio Principal - Veronica Metakovskaya -->
  <section class="relative py-20 lg:py-28 bg-gradient-to-br from-gray-50 via-white to-gray-50 overflow-hidden" id="testimonios">
    <!-- Elementos decorativos -->
    <!-- <div class="absolute top-0 left-0 w-72 h-72 bg-primary-color/5 rounded-full -translate-x-36 -translate-y-36"></div> -->
    <!-- <div class="absolute bottom-0 right-0 w-96 h-96 bg-secondary-color/5 rounded-full translate-x-48 translate-y-48"></div> -->
    
    <div class="relative max-w-7xl mx-auto px-6 lg:px-12">
      <!-- Header de la sección -->
      <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
        <div class="inline-flex items-center gap-2 bg-primary-color/10 rounded-full px-4 py-2 mb-6">
          <div class="w-2 h-2 bg-primary-color rounded-full animate-pulse"></div>
          <span class="text-sm font-medium text-primary-color">Testimonio destacado</span>
        </div>
        <h2 class="text-3xl lg:text-4xl xl:text-5xl font-bold font-['Oswald'] text-gray-900 mb-4">
          Respaldo profesional
        </h2>
        <div class="w-24 h-1 bg-gradient-to-r from-primary-color to-secondary-color mx-auto"></div>
      </div>

      <!-- Contenido del testimonio -->
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
        
        <!-- Texto del testimonio -->
        <div class="space-y-8" data-aos="fade-right" data-aos-duration="1000">
          <div class="relative">
            <!-- Comillas decorativas -->
            <div class="absolute -top-4 -left-4 text-6xl text-primary-color/20 font-serif">"</div>
            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 relative z-10">
              <blockquote class="space-y-6">
                <p class="text-gray-700 leading-relaxed text-lg">
                  Durante varios años Juan Carlos Salazar fue uno de mis alumnos a quien siempre recuerdo con mucho cariño. Las clases con él fueron interesantes y significativas.
                  Juan Carlos es un pianista cuya imaginación artística y técnica pianística se desarrollaron a un alto nivel.
                </p>
                <p class="text-gray-700 leading-relaxed text-lg">
                  Gracias a su actitud cuidadosa y creativa ante las indicaciones de los compositores, interpreta obras de diversos estilos y épocas con constante éxito.
                  Estoy segura que en sus clases los alumnos no sólo reciben excelentes conocimientos, sino también algo más: amor por la música.
                </p>
              </blockquote>
            </div>
          </div>
          
          <!-- Autor del testimonio -->
          <div class="flex items-center gap-4 p-6 bg-white rounded-xl shadow-lg border border-gray-100">
            <div class="w-16 h-16 rounded-full overflow-hidden shadow-md">
              <img src="./images/veronicamet.webp" alt="Verónica Metakovskaya" class="w-full h-full object-cover" loading="lazy">
            </div>
            <div>
              <h4 class="text-xl font-bold text-primary-color">Verónica Metakovskaya</h4>
              <p class="text-gray-600">Pianista y Docente Profesional</p>
              <div class="flex items-center gap-1 mt-1">
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                <span class="text-xs text-gray-500">Testimonio verificado</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Certificado y elementos visuales -->
        <div class="flex flex-col items-center gap-8" data-aos="fade-left" data-aos-duration="1000">
          <div class="relative">
            <div class="w-80 h-80 rounded-full overflow-hidden shadow-2xl border-8 border-white">
              <img src="./images/veronicamet.webp" alt="Verónica Metakovskaya" class="w-full h-full object-cover" loading="lazy">
            </div>
            <!-- Badge de verificación -->
            <div class="absolute bottom-4 right-4 w-16 h-16 bg-green-500 rounded-full flex items-center justify-center shadow-lg">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
          </div>
          
          <!-- Certificado -->
          <div class="bg-white rounded-xl shadow-lg p-4 border border-gray-100 hidden sm:block">
            <img src="./images/certificados/testimonio_mano.jpeg" alt="Carta de testimonio manuscrita" class="rounded-lg max-w-[350px] w-full" loading="lazy">
            <p class="text-xs text-gray-500 text-center mt-3">Testimonio manuscrito original</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonios de Estudiantes -->
  <section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      
      <!-- Header -->
      <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
        <div class="inline-flex items-center gap-2 bg-secondary-color/10 rounded-full px-4 py-2 mb-6">
          <div class="w-2 h-2 bg-secondary-color rounded-full animate-pulse"></div>
          <span class="text-sm font-medium text-gray-600">Experiencias reales</span>
        </div>
        <h2 class="text-3xl lg:text-4xl xl:text-5xl font-bold font-['Oswald'] text-gray-900 mb-4">
          Lo que dicen nuestros alumnos
        </h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
          Descubre las experiencias de estudiantes reales que han transformado su relación con la música
        </p>
      </div>

      <!-- Videos de testimonios -->
      <div class="mb-16" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <!-- <div class="text-center mb-8">
          <h3 class="text-2xl font-bold font-['Oswald'] text-gray-800 mb-4">Videos de nuestros estudiantes</h3>
          <p class="text-gray-600">Escucha directamente a nuestros alumnos contar su experiencia</p>
        </div> -->
        
        <div class="swiper comunidadSwiper rounded-2xl overflow-hidden">
          <div class="swiper-wrapper">
            <?php
              $videos = [
                'video8.mp4', 'video2.mp4', 'video3.mp4', 'video4.mp4', 'video5.mp4',
                'video6.mp4', 'video7.mp4', 'video9.mp4', 'video10.mp4', 'video1.mp4'
              ];
              
              foreach ($videos as $index => $video) {
                echo <<<HTML
                <div class="swiper-slide">
                  <div class="relative bg-gray-900 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <video class="w-full h-64 object-cover" controls preload="none" poster="./images/logo/logo.png">
                      <source src="./videos/videos_alumnos/{$video}" type="video/mp4">
                      Tu navegador no soporta este video.
                    </video>
                    <div class="absolute inset-0 bg-black/20 hover:bg-black/10 transition-colors pointer-events-none"></div>
                  </div>
                </div>
                HTML;
              }
            ?>
          </div>
          
          <!-- Navegación mejorada para videos con mejor visibilidad -->
          <div class="relative mt-8">
            <!-- Botones de navegación centrados y más visibles -->
            <div class="flex justify-center items-center gap-6 mb-6">
              <button class="comunidad-prev-btn w-14 h-14 bg-gradient-to-r from-primary-color to-secondary-color hover:from-secondary-color hover:to-primary-color text-white rounded-full flex items-center justify-center shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-110 border-2 border-white">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"/>
                </svg>
              </button>
              <span class="text-gray-600 font-medium">Desliza para ver más videos</span>
              <button class="comunidad-next-btn w-14 h-14 bg-gradient-to-r from-primary-color to-secondary-color hover:from-secondary-color hover:to-primary-color text-white rounded-full flex items-center justify-center shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-110 border-2 border-white">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/>
                </svg>
              </button>
            </div>
            <!-- Paginación con mejor espaciado -->
            <div class="comunidad-pagination swiper-pagination !relative"></div>
          </div>
        </div>
      </div>
      <!-- Testimonios escritos -->
      <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <div class="text-center mb-8">
          <h3 class="text-2xl font-bold font-['Oswald'] text-gray-800 mb-4">Reseñas destacadas</h3>
          <p class="text-gray-600">Lee las experiencias detalladas de nuestros estudiantes</p>
        </div>
        
        <div class="swiper testimonial-swiper">
          <div class="swiper-wrapper">
            
            <!-- Testimonio 1: Jose -->
            <div class="swiper-slide">
              <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 lg:p-12 shadow-xl border border-gray-100 h-full">
                <div class="flex items-center gap-4 mb-6">
                  <div class="w-16 h-16 bg-gradient-to-br from-primary-color to-primary-color/80 rounded-2xl flex items-center justify-center text-white text-2xl font-bold">
                    J
                  </div>
                  <div>
                    <h4 class="text-xl font-bold text-gray-900">Jose</h4>
                    <p class="text-gray-600">Estudiante principiante</p>
                    <div class="flex items-center gap-1 mt-1">
                      <?php for($i = 0; $i < 5; $i++): ?>
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                      <?php endfor; ?>
                    </div>
                  </div>
                </div>
                <blockquote class="text-gray-700 leading-relaxed">
                  "Juan Carlos es un magnífico profesor. Adapta las clases a todos los niveles y las clases son muy prácticas y divertidas. Yo entré con cero conocimiento y estoy muy contento con el progreso que he hecho gracias a Juan Carlos. Además, la infraestructura que tiene montada para la clase online es perfecta y puedes ver a la vez varias cámaras y las partituras. 100% recomendado!! Además es un crack como persona!"
                </blockquote>
              </div>
            </div>

            <!-- Testimonio 2: Amanda -->
            <div class="swiper-slide">
              <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 lg:p-12 shadow-xl border border-gray-100 h-full">
                <div class="flex items-center gap-4 mb-6">
                  <div class="w-16 h-16 bg-gradient-to-br from-secondary-color to-yellow-400 rounded-2xl flex items-center justify-center text-black text-2xl font-bold">
                    A
                  </div>
                  <div>
                    <h4 class="text-xl font-bold text-gray-900">Amanda</h4>
                    <p class="text-gray-600">Madre de estudiantes</p>
                    <div class="flex items-center gap-1 mt-1">
                      <?php for($i = 0; $i < 5; $i++): ?>
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                      <?php endfor; ?>
                    </div>
                  </div>
                </div>
                <blockquote class="text-gray-700 leading-relaxed">
                  "Mis dos hijos de 8 y 11 años dan clases de piano con Juan. Darío, el pequeño, ha ganado muchísima seguridad en sí mismo incluso tocando delante de la familia y los amigos, Jorge, mi hijo de 11 años está planteándose preparar las pruebas de acceso al conservatorio con Juan. Durante el confinamiento hemos dado clases online con Juan y se dan estupendamente porque lo tiene todo muy bien preparado con un buen micrófono y varias cámaras."
                </blockquote>
              </div>
            </div>

            <!-- Testimonio 3: Carlota -->
            <div class="swiper-slide">
              <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 lg:p-12 shadow-xl border border-gray-100 h-full">
                <div class="flex items-center gap-4 mb-6">
                  <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold">
                    C
                  </div>
                  <div>
                    <h4 class="text-xl font-bold text-gray-900">Carlota</h4>
                    <p class="text-gray-600">Estudiante adulta</p>
                    <div class="flex items-center gap-1 mt-1">
                      <?php for($i = 0; $i < 5; $i++): ?>
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                      <?php endfor; ?>
                    </div>
                  </div>
                </div>
                <blockquote class="text-gray-700 leading-relaxed">
                  "Toqué hace 20 años el piano y lo he retomado hace 4 meses con Juan; me encanta su manera de dar clases, está muy pendiente de todo y se nota que le pone pasión a lo que enseña en cada clase; trato excepcional, es un chico majísimo, pero me pone las pilas en cada clase para que note que voy avanzando; sus técnicas de estudio me parecen fabulosas ya que optimizo el tiempo que puedo practicar al máximo, en 4 meses ya estoy tocando piezas que tenía completamente olvidadas, motivada al 100%, lo recomiendo sin duda."
                </blockquote>
              </div>
            </div>

            <!-- Testimonio 4: Laura -->
            <div class="swiper-slide">
              <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 lg:p-12 shadow-xl border border-gray-100 h-full">
                <div class="flex items-center gap-4 mb-6">
                  <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-pink-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold">
                    L
                  </div>
                  <div>
                    <h4 class="text-xl font-bold text-gray-900">Laura</h4>
                    <p class="text-gray-600">Estudiante de piano clásico</p>
                    <div class="flex items-center gap-1 mt-1">
                      <?php for($i = 0; $i < 5; $i++): ?>
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                      <?php endfor; ?>
                    </div>
                  </div>
                </div>
                <blockquote class="text-gray-700 leading-relaxed">
                  "Doy clases de piano clásico con Juan, he aprendido muchísimo en 2 años en cuanto al manejo del brazo y la muñeca, que es fundamental para poder tocar con fluidez y sacarle un buen sonido al piano; siempre tiene una manera de hacerte ver lo que por ti misma no llegas a ver y de darte las pautas necesarias para no caer en los mismos errores cuando estás practicando en casa, ha mejorado mi relajación y consigo comprender y ejecutar muchísimo mejor las dinámicas, lo recomiendo 100%."
                </blockquote>
              </div>
            </div>
          </div>
          
          <!-- Navegación y paginación mejorada para testimonios -->
          <div class="relative mt-12">
            <!-- Botones de navegación más visibles y separados -->
            <div class="flex justify-center items-center gap-4 mb-8">
              <button class="testimonial-prev-btn w-12 h-12 bg-primary-color hover:bg-primary-color/80 text-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
              </button>
              <button class="testimonial-next-btn w-12 h-12 bg-primary-color hover:bg-primary-color/80 text-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
              </button>
            </div>
            <!-- Paginación con mejor espaciado -->
            <div class="swiper-pagination testimonial-pagination !relative !bottom-auto"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contactanos -->
  <section id="contacto" class="relative bg-white py-20 overflow-hidden">
    <!-- Elementos decorativos -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute top-20 left-10 w-32 h-32 bg-gray-200 rounded-full animate-pulse"></div>
      <div class="absolute bottom-20 right-20 w-24 h-24 bg-gray-300 rounded-full animate-bounce"></div>
      <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-gray-200 rounded-full animate-ping"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
      <!-- Título principal -->
      <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 font-['Oswald'] mb-4">
          Contáctanos
        </h2>
        <div class="w-24 h-1 bg-gray-800 mx-auto rounded-full mb-6"></div>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
          ¿Tienes alguna duda o quieres saber más sobre nuestras clases y programas? Completa el formulario y nos pondremos en contacto contigo.
        </p>
      </div>

      <!-- Contenido principal -->
      <div class="grid lg:grid-cols-2 gap-12 items-start">
        <!-- Columna izquierda - Información de contacto -->
        <div class="space-y-8" data-aos="fade-right" data-aos-delay="200">
          <!-- Card de información -->
          <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl p-8 border border-gray-200 shadow-xl">
            <h3 class="text-2xl font-bold text-gray-900 font-['Oswald'] mb-6">
              ¡Comienza tu aventura musical!
            </h3>
            <p class="text-gray-700 mb-8 leading-relaxed">
              Únete a nuestra comunidad musical y descubre tu potencial artístico con profesores especializados y métodos innovadores.
            </p>

            <!-- Características destacadas -->
            <div class="space-y-4">
              <div class="flex items-center gap-3">
                <div class="bg-secondary-color rounded-full p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                    <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                  </svg>
                </div>
                <span class="text-gray-800 font-medium">Clases personalizadas para tu nivel</span>
              </div>
              <div class="flex items-center gap-3">
                <div class="bg-secondary-color rounded-full p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                    <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                  </svg>
                </div>
                <span class="text-gray-800 font-medium">Profesores con experiencia internacional</span>
              </div>
              <div class="flex items-center gap-3">
                <div class="bg-secondary-color rounded-full p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                    <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                  </svg>
                </div>
                <span class="text-gray-800 font-medium">Metodología moderna y divertida</span>
              </div>
              <div class="flex items-center gap-3">
                <div class="bg-secondary-color rounded-full p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                    <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                  </svg>
                </div>
                <span class="text-gray-800 font-medium">Flexibilidad de horarios</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Columna derecha - Formulario -->
        <div class="space-y-8" data-aos="fade-left" data-aos-delay="400">
          <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl p-8 border border-gray-200 shadow-xl">
            <h3 class="text-2xl font-bold text-gray-900 font-['Oswald'] mb-6">
              Envíanos un mensaje
            </h3>
            
            <form id="contactForm" method="post" class="space-y-6">
              <!-- Nombre y Email -->
              <div class="grid md:grid-cols-2 gap-4">
                <div class="space-y-2">
                  <label for="nombre" class="text-gray-800 font-medium text-sm">Nombre *</label>
                  <input type="text" name="nombre" id="nombre" placeholder="Tu nombre completo" required
                    class="w-full px-4 py-3 rounded-xl bg-white border border-gray-300 text-gray-900 placeholder-gray-500 focus:ring-2 focus:ring-gray-800 focus:border-transparent focus:outline-none transition-all duration-300 shadow-sm">
                </div>
                <div class="space-y-2">
                  <label for="email" class="text-gray-800 font-medium text-sm">Email *</label>
                  <input type="email" name="email" id="email" placeholder="tu@email.com" required
                    class="w-full px-4 py-3 rounded-xl bg-white border border-gray-300 text-gray-900 placeholder-gray-500 focus:ring-2 focus:ring-gray-800 focus:border-transparent focus:outline-none transition-all duration-300 shadow-sm">
                </div>
              </div>

              <!-- Teléfono -->
              <div class="space-y-2">
                <label for="celcontacto" class="text-gray-800 font-medium text-sm">Teléfono (opcional)</label>
                <input type="text" name="celcontacto" id="celcontacto" placeholder="Tu número de contacto"
                  class="w-full px-4 py-3 rounded-xl bg-white border border-gray-300 text-gray-900 placeholder-gray-500 focus:ring-2 focus:ring-gray-800 focus:border-transparent focus:outline-none transition-all duration-300 shadow-sm">
              </div>

              <!-- Mensaje -->
              <div class="space-y-2">
                <label for="content" class="text-gray-800 font-medium text-sm">Mensaje *</label>
                <textarea name="content" id="content" rows="5" placeholder="Cuéntanos sobre tus intereses musicales o preguntas que tengas..." required
                  class="w-full px-4 py-3 rounded-xl bg-white border border-gray-300 text-gray-900 placeholder-gray-500 focus:ring-2 focus:ring-gray-800 focus:border-transparent focus:outline-none transition-all duration-300 resize-none shadow-sm"></textarea>
              </div>

              <!-- Botón de envío -->
              <button type="submit" 
                class="w-full bg-gradient-to-r from-blue-800 to-primary-color text-white font-bold px-8 py-4 rounded-xl hover:shadow-2xl hover:from-primary-color-800 hover:to-primary-color-700 transform hover:scale-105 transition-all duration-300 text-lg font-['Oswald'] flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                  <path d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z" />
                </svg>
                Enviar Mensaje
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Pie de Pagina -->
  <?php include("footer.php") ?>

  <!-- Botones flotantes -->
  <div class="fixed z-30 bottom-0 flex gap-2 flex-col p-4 lg:p-8">
    <a href="https://api.whatsapp.com/send/?phone=+34604369473&text=Hola%2C%20me%20gustar%C3%ADa%20estudiar%20en%20Melod%C3%ADas%20Unidas." target="_blank" class="bg-white shadow-md rounded-full p-3" title="whastapp" alt="whastapp">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp text-green-600 hover:text-green-700 w-[24px] h-[24px] lg:w-[32px] lg:h-[32px]" viewBox="0 0 16 16" focusable="true">
        <title>Contactar por whastapp</title>
        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
      </svg>
    </a>
    <a href="#contacto" class="bg-white hidden shadow-md rounded-full p-3" title="Contactanos" alt="Contactanos" id="btn-contact">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-gray-600 hover:text-gray-700 w-[24px] h-[24px] lg:w-[32px] lg:h-[32px]" focusable="true">
        <title>Contactanos</title>
        <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97ZM6.75 8.25a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 0 1.5h-9a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H7.5Z" clip-rule="evenodd" />
      </svg>
    </a>
    <a href="#imageContainer" class="bg-white hidden shadow-md rounded-full p-3" title="subir" alt="subir" id="btn-up">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-primary-color w-[24px] h-[24px] lg:w-[32px] lg:h-[32px]" focusable="true">
        <title>Subir</title>
        <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z" clip-rule="evenodd" />
      </svg>
    </a>
  </div>

  <!-- Script Slider portada -->
  <script>
    const slides = document.querySelectorAll('.slide');
    let current = 0;
    let interval = setInterval(nextSlide, 6000); // cambia cada 6 segundos

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.toggle('opacity-100', i === index);
        slide.classList.toggle('opacity-0', i !== index);
      });
    }

    function nextSlide() {
      current = (current + 1) % slides.length;
      showSlide(current);
    }

    function prevSlide() {
      current = (current - 1 + slides.length) % slides.length;
      showSlide(current);
    }

    document.getElementById('nextBtn').addEventListener('click', () => {
      nextSlide();
      resetInterval();
    });

    document.getElementById('prevBtn').addEventListener('click', () => {
      prevSlide();
      resetInterval();
    });

    function resetInterval() {
      clearInterval(interval);
      interval = setInterval(nextSlide, 6000);
    }

    showSlide(current); // Mostrar el primero al cargar


    // Configuración del swiper de testimonios con botones personalizados
    const testimonialSwiper = new Swiper(".testimonial-swiper", {
      effect: "fade",
      autoplay: {
        delay: 8000,
        disableOnInteraction: false,
      },
      loop: true,
      pagination: {
        el: ".testimonial-pagination",
        clickable: true,
      },
      fadeEffect: {
        crossFade: true,
      },
    });

    // Botones personalizados para testimonios
    document.querySelector('.testimonial-prev-btn').addEventListener('click', () => {
      testimonialSwiper.slidePrev();
    });
    
    document.querySelector('.testimonial-next-btn').addEventListener('click', () => {
      testimonialSwiper.slideNext();
    });

    // Configuración del swiper de videos de comunidad con botones personalizados
    const comunidadSwiper = new Swiper(".comunidadSwiper", {
      loop: false,
      spaceBetween: 20,
      slidesPerView: 1.2,
      centeredSlides: false,
      pagination: {
        el: ".comunidad-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
        1280: {
          slidesPerView: 4,
        },
      },
      on: {
        init: function() {
          toggleComunidadNav(this);
        },
        resize: function() {
          toggleComunidadNav(this);
        }
      }
    });

    // Botones personalizados para videos de comunidad
    document.querySelector('.comunidad-prev-btn').addEventListener('click', () => {
      comunidadSwiper.slidePrev();
    });
    
    document.querySelector('.comunidad-next-btn').addEventListener('click', () => {
      comunidadSwiper.slideNext();
    });

    function toggleComunidadNav(swiper) {
      const slidesPerView = getSlidesPerView(swiper);
      const totalSlides = swiper.slides.length;

      const shouldShow = totalSlides > slidesPerView;

      const nextBtn = document.querySelector(".comunidad-next-btn");
      const prevBtn = document.querySelector(".comunidad-prev-btn");

      if (nextBtn && prevBtn) {
        nextBtn.style.display = shouldShow ? "flex" : "none";
        prevBtn.style.display = shouldShow ? "flex" : "none";
      }
    }

    function getSlidesPerView(swiper) {
      const width = window.innerWidth;
      const breakpoints = swiper.params.breakpoints;
      const sortedBreakpoints = Object.keys(breakpoints).map(Number).sort((a, b) => a - b);

      let slidesPerView = swiper.params.slidesPerView;

      for (let bp of sortedBreakpoints) {
        if (width >= bp) {
          slidesPerView = breakpoints[bp].slidesPerView;
        }
      }

      return slidesPerView;
    }
  </script>

  <script src="src/js/main.js?v=20250810"></script>
  <script src="./src/js/resenias.js?v=20250810"></script>
  <script src="./src/css/aos-master/dist/aos.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal/minimal.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</body>

</html>