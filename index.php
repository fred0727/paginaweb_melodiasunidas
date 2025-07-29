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
  <link href="./src/css/main.css?v=20250728" rel="stylesheet" />
  <link href="./src/css/aos-master/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" defer />
  <link href="./src/output_v6.css?v=20250728" rel="stylesheet" defer />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<?php
$pagina = "inicio";
?>

<body>
  <!-- Encabezado -->
  <?php include("header.php") ?>

  <!-- Portada -->
  <section id="hero" class="relative w-full h-screen overflow-hidden">
    <!-- Slides -->
    <div id="slider" class="absolute inset-0 w-full h-full">
      <!-- Slide 1 -->
      <picture class="slide opacity-100 transition-opacity duration-1000 absolute inset-0">
        <source srcset="./images/slider/imagen1.webp" type="image/webp" />
        <source srcset="./images/slider/imagen1.webp" type="image/webp" />
        <img src="./images/slider/imagen1.jpg" alt="Slide 1" class="w-full h-full object-cover" loading="lazy" />
      </picture>

      <!-- Slide 2 -->
      <picture class="slide opacity-0 transition-opacity duration-1000 absolute inset-0">
        <source srcset="./images/slider/imagen2.webp" type="image/webp" />
        <source srcset="./images/slider/imagen2.webp" type="image/webp" />
        <img src="./images/slider/imagen2.jpg" alt="Slide 2" class="w-full h-full object-cover" loading="lazy" />
      </picture>

      <!-- Slide 3 -->
      <picture class="slide opacity-0 transition-opacity duration-1000 absolute inset-0">
        <source srcset="./images/slider/imagen3.webp" type="image/webp" />
        <source srcset="./images/slider/imagen3.webp" type="image/webp" />
        <img src="./images/slider/imagen3.jpg" alt="Slide 3" class="w-full h-full object-cover" loading="lazy" />
      </picture>
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/70 to-black/30 z-10"></div>

    <!-- Contenido -->
    <div class="relative z-20 flex flex-col items-center justify-center h-full text-center px-6 max-w-4xl mx-auto">
      <h1 class="text-white font-bold text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-['Oswald'] animate__animated animate__fadeInDown">
        ¡La música es nuestro idioma común, no importa dónde estés!
      </h1>
      <a
        href="#footer"
        class="mt-8 inline-block bg-yellow-400 hover:bg-yellow-300 text-black font-semibold py-3 px-6 rounded-full text-lg sm:text-xl transition transform hover:scale-105 hover:shadow-lg font-['Oswald'] animate__animated animate__fadeInUp animate__delay-1s">
        ¡Dale play a tu aventura musical!
      </a>
    </div>

    <!-- Botones navegación -->
    <div class="absolute top-1/2 w-full px-4 z-30 flex justify-between items-center -translate-y-1/2">
      <button id="prevBtn" aria-label="Anterior" class="bg-black/40 hover:bg-black/70 text-white p-3 px-4 rounded-full transition">
        &#8592;
      </button>
      <button id="nextBtn" aria-label="Siguiente" class="bg-black/40 hover:bg-black/70 text-white p-3 px-4 rounded-full transition">
        &#8594;
      </button>
    </div>
  </section>

  <section class="bg-white text-[#0e1a2b] px-6 py-12 lg:px-24 lg:py-24">
    <div class="max-w-7xl mx-auto flex flex-col-reverse lg:flex-row items-center gap-10 lg:gap-20">

      <!-- Texto -->
      <div class="flex flex-col text-center lg:text-left max-w-2xl animate__animated animate__fadeIn animate__delay-1s">
        <h4 class="text-xl sm:text-2xl lg:text-3xl font-bold font-['Oswald'] mb-4 text-black">
          NUESTRAS CLASES ONLINE:<br />
          <span class="font-normal text-[#3c3c3c] text-lg">¡Como si estuviéramos ahí, pero sin salir de casa!</span>
        </h4>
        <p class="text-sm sm:text-base text-justify leading-relaxed text-[#4c4c4c]">
          Nuestros profes están siempre al pie del cañón para acompañarte en esta aventura musical. Con clases online a tu medida, se aseguran de que no se te escape ni un detalle: desde cómo te sientas al tocar hasta que te sientas un crack en la técnica. ¡Vas a tener una base tan sólida que los desafíos van a parecer pan comido!
        </p>
      </div>

      <!-- Logo con animación -->
      <div class="flex justify-center items-center w-full lg:w-[250px] animate__animated animate__zoomIn animate__slow">
        <img src="./images/logo/logo.png" alt="Logo" title="Logo"
          class="w-[140px] sm:w-[180px] lg:w-[240px]" loading="lazy" />
      </div>
    </div>
  </section>


  <!-- Nuestras Audiciones -->
  <section
    class="flex flex-col items-center justify-center px-6 py-32 sm:px-10 lg:px-32 xl:px-64 bg-black/70 text-white"
    id="audiciones-parallax">
    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-center mb-4 animate__animated animate__fadeInDown">
      Nuestras Audiciones
    </h2>

    <div
      class="flex flex-col items-center gap-2 mb-4"
      data-aos="fade-up"
      data-aos-duration="1000">
      <p class="text-center text-lg sm:text-xl font-medium">¡El momentazo del año!</p>
      <!-- <span class="text-3xl sm:text-4xl">📽️</span> -->
    </div>

    <p
      class="text-center max-w-4xl text-sm sm:text-base xl:text-lg leading-relaxed mb-8 animate__animated animate__fadeInUp animate__delay-1s"
      data-aos="zoom-in"
      data-aos-duration="1000">
      En Melodías Unidas, las audiciones no son un concierto cualquiera… ¡son EL PLANAZO!
      Es el momento en el que nuestros alumnos sacan todo su esfuerzo, sus ganas y, sobre todo, su pasión por la música.
      Aquí no venimos a competir, venimos a disfrutar.
    </p>

    <!-- Video / Miniatura -->
    <div class="relative flex justify-center items-center w-full max-w-[750px]">
      <!-- Imagen previa -->
      <img
        id="video-thumbnail"
        src="./images/logo/audiciones.png"
        alt="Ver audición en video"
        class="w-full object-cover rounded-xl shadow-lg cursor-pointer transition-transform duration-300 hover:scale-105"
        loading="lazy"
        aria-label="Haz clic para ver el video de las audiciones" />

      <!-- Video oculto -->
      <video
        id="video-audicion"
        class="w-full rounded-xl shadow-lg hidden"
        controls>
        <source src="./videos/audicion.mp4" type="video/mp4" />
        Tu navegador no soporta el video.
      </video>
    </div>
  </section>

  <!-- Nuestro Profe -->
  <section class="flex flex-col lg:flex-row justify-center items-center gap-10 px-6 py-32 sm:px-10 lg:px-32 xl:px-48 bg-white text-black" id="nuestro-profe">
    <!-- Info del Profe -->
    <div class="flex-1" data-aos="fade-right" data-aos-duration="1000">
      <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-['Oswald'] text-center lg:text-left mb-4">
        Nuestras clases de piano
      </h2>

      <!-- Nombre del profesor -->
      <div class="flex items-center gap-2 mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary-color" viewBox="0 0 24 24" fill="currentColor">
          <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
        </svg>
        <h3 class="text-lg sm:text-xl font-semibold font-['Oswald']">Juan Carlos Salazar Rico</h3>
      </div>

      <!-- Biografía -->
      <div class="space-y-4 text-justify text-sm sm:text-base leading-relaxed">
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

      <!-- Botón -->
      <div class="mt-6 flex justify-center lg:justify-start">
        <a href="profejuancarlos.php"
          class="bg-secondary-color/70 hover:bg-secondary-color text-black px-6 py-2 rounded-full transition-all font-['Oswald'] text-sm sm:text-base">
          Conóceme más
        </a>
      </div>
    </div>

    <!-- Foto del Profe -->
    <div class="flex justify-center items-center" data-aos="zoom-in" data-aos-duration="1000">
      <img src="./images/profes/juancarlos.webp"
        alt="Juan Carlos Salazar Rico"
        class="w-[200px] h-[200px] sm:w-[250px] sm:h-[250px] lg:w-[300px] lg:h-[300px] object-cover rounded-full grayscale hover:grayscale-0 transition-all duration-500 shadow-lg"
        loading="lazy" />
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
  <section class="flex p-8 w-full justify-center items-center flex-col gap-4 sm:px-32 lg:px-48 py-16">
    <h4 class="text-2xl font-[Oswald] font-medium lg:text-3xl xl:text-4xl" data-aos="fade-up" data-aos-duration="1000">¿Por qué elegirnos?</h4>
    <p class="text-[12px] lg:text-base lg:px-8 lg:mt-6 text-center" data-aos="zoom-in" data-aos-duration="1000">
      En Melodías Unidas no solo damos clases, creamos experiencias musicales que recordarás. <br>
      ¿Por qué somos la mejor opción? <br><br>
      <span class="font-medium lg:text-lg">Mira esto:</span>
    </p>
  </section>

  <?php include("ventajas.php"); ?>

  <!-- Testimonio Veronica Metakovskaya -->
  <section class="flex flex-col-reverse items-center justify-center gap-12 px-6 py-16 sm:px-12 lg:px-32 lg:flex-row lg:gap-24 xl:py-24 backdrop-blur-md bg-gray-50" id="testimonios">
    <!-- Texto del testimonio -->
    <div class="flex flex-col gap-4 max-w-2xl" data-aos="fade-right" data-aos-duration="1000">
      <!-- <h4 class="text-xl font-semibold text-gray-800 lg:text-2xl">Testimonio</h4> -->
      <p class="text-sm leading-relaxed text-gray-700 lg:text-base italic">
        “Durante varios años Juan Carlos Salazar fue uno de mis alumnos a quien siempre recuerdo con mucho cariño. Las clases con él fueron interesantes y significativas.
        Juan Carlos es un pianista cuya imaginación artística y técnica pianística se desarrollaron a un alto nivel.”
      </p>
      <p class="text-sm leading-relaxed text-gray-700 lg:text-base italic">
        “Gracias a su actitud cuidadosa y creativa ante las indicaciones de los compositores, interpreta obras de diversos estilos y épocas con constante éxito.
        Estoy segura que en sus clases los alumnos no sólo reciben excelentes conocimientos, sino también algo más: amor por la música.”
      </p>
      <div class="mt-4">
        <p class="text-base font-semibold text-primary-color">Verónica Metakovskaya</p>
        <p class="text-xs text-gray-500">Pianista y docente</p>
      </div>
    </div>

    <!-- Foto o certificado -->
    <div class="flex flex-col items-center gap-4" data-aos="fade-left" data-aos-duration="1000">
      <div class="rounded-full overflow-hidden shadow-lg w-[160px] h-[160px] sm:w-[200px] sm:h-[200px] lg:w-[220px] lg:h-[220px]">
        <img src="./images/veronicamet.webp" alt="Veronica Metakovskaya" class="w-full h-full object-cover" loading="lazy">
      </div>
      <img src="./images/certificados/testimonio_mano.jpeg" alt="Carta de testimonio" class="rounded-md shadow-md max-w-[300px] sm:max-w-[350px] lg:max-w-[400px] hidden sm:block" loading="lazy">
    </div>
  </section>

  <!-- Reseñas de estudiantes -->
  <section class="px-6 py-12 lg:pt-32 sm:px-16 lg:px-48 bg-white">
    <h2 class="text-center text-xl lg:text-4xl font-['Oswald'] mb-8">Lo que dicen nuestros alumnos</h2>

    <!-- Swiper personalizado -->
    <div class="swiper comunidadSwiper">
      <div class="swiper-wrapper lg:px-16 py-16">
        <div class="swiper-slide bg-black rounded-md overflow-hidden">
          <video class="w-full h-[200px] object-contain" controls preload="none">
            <source src="./videos/videos_alumnos/video8.mp4" type="video/mp4">
          </video>
        </div>

        <div class="swiper-slide bg-black rounded-md overflow-hidden">
          <video class="w-full h-[200px] object-contain" controls preload="none">
            <source src="./videos/videos_alumnos/video2.mp4" type="video/mp4">
          </video>
        </div>
        <div class="swiper-slide bg-black rounded-md overflow-hidden">
          <video class="w-full h-[200px] object-contain" controls preload="none">
            <source src="./videos/videos_alumnos/video3.mp4" type="video/mp4">
          </video>
        </div>

        <div class="swiper-slide bg-black rounded-md overflow-hidden">
          <video class="w-full h-[200px] object-contain" controls preload="none">
            <source src="./videos/videos_alumnos/video4.mp4" type="video/mp4">
          </video>
        </div>
        <div class="swiper-slide bg-black rounded-md overflow-hidden">
          <video class="w-full h-[200px] object-contain" controls preload="none">
            <source src="./videos/videos_alumnos/video5.mp4" type="video/mp4">
          </video>
        </div>

        <div class="swiper-slide bg-black rounded-md overflow-hidden">
          <video class="w-full h-[200px] object-contain" controls preload="none">
            <source src="./videos/videos_alumnos/video6.mp4" type="video/mp4">
          </video>
        </div>
        <div class="swiper-slide bg-black rounded-md overflow-hidden">
          <video class="w-full h-[200px] object-contain" controls preload="none">
            <source src="./videos/videos_alumnos/video7.mp4" type="video/mp4">
          </video>
        </div>
        <div class="swiper-slide bg-black rounded-md overflow-hidden">
          <video class="w-full h-[200px] object-contain" controls preload="none">
            <source src="./videos/videos_alumnos/video9.mp4" type="video/mp4">
          </video>
        </div>
        <div class="swiper-slide bg-black rounded-md overflow-hidden">
          <video class="w-full h-[200px] object-contain" controls preload="none">
            <source src="./videos/videos_alumnos/video10.mp4" type="video/mp4">
          </video>
        </div>
        <div class="swiper-slide bg-black rounded-md overflow-hidden">
          <video class="w-full h-[200px] object-contain" controls preload="none">
            <source src="./videos/videos_alumnos/video1.mp4" type="video/mp4">
          </video>
        </div>

        <!-- Agrega más slides aquí -->
      </div>

      <!-- Navegación -->
      <div class="comunidad-next swiper-button-next text-gray-700"></div>
      <div class="comunidad-prev swiper-button-prev text-gray-700"></div>

      <!-- Paginación -->
      <div class="comunidad-pagination swiper-pagination mt-4"></div>
    </div>
    <div class="swiper testimonial-swiper">
      <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide bg-white px-16 lg:px-32 py-6 lg:py-32 rounded-lg">
          <div class="flex gap-4 items-start mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12 lg:size-16 text-[#ffcb01]">
              <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
              <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
              <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
            </svg>
            <div>
              <h5 class="text-lg font-semibold">Jose</h5>
              <p class="text-sm text-gray-500">Estudiante</p>
            </div>
          </div>
          <p class="text-sm lg:text-base text-gray-700 text-justify">Juan Carlos es un magnífico profesor. Adapta las clases a todos los niveles y las clases son muy prácticas y divertidas. Yo entré con cero conocimiento y estoy muy contento con el progreso que he hecho gracias a Juan Carlos. Además, la infraestructura que tiene montada para la clase on line es perfecta y puedes ver a la vez varias cámaras y las partituras. 100% recomendado!! Además es un crack como persona!
          </p>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide bg-white px-16 lg:px-32 py-6 lg:py-32 rounded-lg">
          <div class="flex gap-4 items-start mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12 lg:size-16 text-[#ffcb01]">
              <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
              <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
              <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
            </svg>
            <div>
              <h5 class="text-lg font-semibold">Amanda</h5>
              <p class="text-sm text-gray-500">Testimonio</p>
            </div>
          </div>
          <p class="text-sm lg:text-base text-gray-700 text-justify">Mis dos hijos de 8 y 11 años dan clases de piano con Juan. Darío, el pequeño, ha ganado muchísima seguridad en sí mismo incluso tocando delante de la familia y los amigos, Jorge, mi hijo de 11 años está planteándose preparar las pruebas de acceso al conservatorio con Juan. Durante el confinamiento hemos dado clases online con Juan y se dan estupendamente porque lo tiene todo muy bien preparado con un buen micrófono y varias cámaras.</p>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide bg-white px-16 lg:px-32 py-6 lg:py-32 rounded-lg">
          <div class="flex gap-4 items-start mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12 lg:size-16 text-[#ffcb01]">
              <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
              <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
              <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
            </svg>
            <div>
              <h5 class="text-lg font-semibold">Carlota</h5>
              <p class="text-sm text-gray-500">Estudiante</p>
            </div>
          </div>
          <p class="text-sm lg:text-base text-gray-700 text-justify">Toqué hace 20 años el piano y lo he retomado hace 4 meses con Juan; me encanta su manera de dar clases, está muy pendiente de todo y se nota que le pone pasión a lo que enseña en cada clase; trato excepcional, es un chico majísimo, pero me pone las pilas en cada clase para que note que voy avanzando; sus técnicas de estudio me parecen fabulosas ya que optimizo el tiempo que puedo practicar al máximo, en 4 meses ya estoy tocando piezas que tenía completamente olvidadas, motivada al 100%, lo recomiendo sin duda.</p>
        </div>

        <div class="swiper-slide bg-white px-16 lg:px-32 py-6 lg:py-32 rounded-lg">
          <div class="flex gap-4 items-start mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12 lg:size-16 text-[#ffcb01]">
              <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
              <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
              <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
            </svg>
            <div>
              <h5 class="text-lg font-semibold">Laura</h5>
              <p class="text-sm text-gray-500">Estudiante</p>
            </div>
          </div>
          <p class="text-sm lg:text-base text-gray-700 text-justify">Doy clases de piano clásico con Juan, he aprendido muchísimo en 2 años en cuanto al manejo del brazo y la muñeca, que es fundamental para poder tocar con fluidez y sacarle un buen sonido al piano; siempre tiene una manera de hacerte ver lo que por tí misma no llegas a ver y de darte las pautas necesarias para no caer en los mismos errores cuando estás practicando en casa, ha mejorado mi relajación y consigo comprender y ejecutar muchísimo mejor las dinámicas, lo recomiendo 100%.</p>
        </div>

        <!-- Agrega más slides aquí -->
      </div>

      <!-- Paginación y navegación -->
      <div class="swiper-pagination mt-4"></div>
      <!-- <div class="swiper-button-prev text-[#333]"></div> -->
      <!-- <div class="swiper-button-next text-[#333]"></div> -->
    </div>
  </section>

  <!-- <section class="w-full py-16 px-4 sm:px-16 lg:px-32 xl:px-48 bg-white" id="comunidad-videos">
    <h2 class="text-2xl sm:text-3xl xl:text-4xl font-bold text-center text-black mb-10">
      Así Suena Nuestra Comunidad
    </h2>
  </section> -->

  <!-- Videos de comunidad estudiantil -->
  <section class="relative flex p-8 pt-12 w-full justify-center items-center flex-col gap-4 sm:px-32 lg:px-48 lg:py-0 xl:py-12 xl:pt-0 xl:mb-10 hidden">
    <div class="relative flex flex-row justify-start gap-4 lg:pt-8 lg:gap-6 w-[275px] sm:w-[550px] py-4 lg:w-[750px] xl:w-[1200px] overflow-x-scroll" id="section-div-videos">

      <div class="relative flex bg-black/80 shadow-md min-w-[260px] h-[160px]">
        <!-- Contenedor de la miniatura -->
        <div class="w-full h-full cursor-pointer flex flex-col justify-center items-center relative p-4" id="container1" onclick="viewvideo('container1','video1')">
          <img src="./images/logo/logo.png" alt="Logo" class="absolute w-[50px] h-[50px] right-0 top-0">
          <img src="./images/iconvideo.png" alt="Video thumbnail" style="width: 65px !important;">
        </div>
        <!-- Video oculto inicialmente -->
        <video class="w-full h-full hidden" id="video1" controls>
          <source src="./videos/videos_alumnos/video8.mp4" type="video/mp4">
        </video>
      </div>

      <div class="relative flex bg-black/80 shadow-md min-w-[260px] h-[160px]">
        <!-- Contenedor de la miniatura -->
        <div class="w-full h-full cursor-pointer flex flex-col justify-center items-center relative p-4" id="container2" onclick="viewvideo('container2','video2')">
          <img src="./images/logo/logo.png" alt="Logo" class="absolute w-[50px] h-[50px] right-0 top-0">
          <img src="./images/iconvideo.png" alt="Video thumbnail" style="width: 65px !important;">
        </div>
        <!-- Video oculto inicialmente -->
        <video class="w-full h-full hidden" id="video2" controls>
          <source src="./videos/videos_alumnos/video2.mp4" type="video/mp4">
        </video>
      </div>

      <div class="relative flex bg-black/80 shadow-md min-w-[260px] h-[160px]">
        <!-- Contenedor de la miniatura -->
        <div class="w-full h-full cursor-pointer flex flex-col justify-center items-center relative p-4" id="container3" onclick="viewvideo('container3','video3')">
          <img src="./images/logo/logo.png" alt="Logo" class="absolute w-[50px] h-[50px] right-0 top-0">
          <img src="./images/iconvideo.png" alt="Video thumbnail" style="width: 65px !important;">
        </div>
        <!-- Video oculto inicialmente -->
        <video class="w-full h-full hidden" id="video3" controls>
          <source src="./videos/videos_alumnos/video3.mp4" type="video/mp4">
        </video>
      </div>

      <div class="relative flex bg-black/80 shadow-md min-w-[260px] h-[160px]">
        <!-- Contenedor de la miniatura -->
        <div class="w-full h-full cursor-pointer flex flex-col justify-center items-center relative p-4" id="container4" onclick="viewvideo('container4','video4')">
          <img src="./images/logo/logo.png" alt="Logo" class="absolute w-[50px] h-[50px] right-0 top-0">
          <img src="./images/iconvideo.png" alt="Video thumbnail" style="width: 65px !important;">
        </div>
        <!-- Video oculto inicialmente -->
        <video class="w-full h-full hidden" id="video4" controls>
          <source src="./videos/videos_alumnos/video4.mp4" type="video/mp4">
        </video>
      </div>

      <div class="relative flex bg-black/80 shadow-md min-w-[260px] h-[160px]">
        <!-- Contenedor de la miniatura -->
        <div class="w-full h-full cursor-pointer flex flex-col justify-center items-center relative p-4" id="container5" onclick="viewvideo('container5','video5')">
          <img src="./images/logo/logo.png" alt="Logo" class="absolute w-[50px] h-[50px] right-0 top-0">
          <img src="./images/iconvideo.png" alt="Video thumbnail" style="width: 65px !important;">
        </div>
        <!-- Video oculto inicialmente -->
        <video class="w-full h-full hidden" id="video5" controls>
          <source src="./videos/videos_alumnos/video5.mp4" type="video/mp4">
        </video>
      </div>

      <div class="relative flex bg-black/80 shadow-md min-w-[260px] h-[160px]">
        <!-- Contenedor de la miniatura -->
        <div class="w-full h-full cursor-pointer flex flex-col justify-center items-center relative p-4" id="container6" onclick="viewvideo('container6','video6')">
          <img src="./images/logo/logo.png" alt="Logo" class="absolute w-[50px] h-[50px] right-0 top-0">
          <img src="./images/iconvideo.png" alt="Video thumbnail" style="width: 65px !important;">
        </div>
        <!-- Video oculto inicialmente -->
        <video class="w-full h-full hidden" id="video6" controls>
          <source src="./videos/videos_alumnos/video6.mp4" type="video/mp4">
        </video>
      </div>

      <div class="relative flex bg-black/80 shadow-md min-w-[260px] h-[160px]">
        <!-- Contenedor de la miniatura -->
        <div class="w-full h-full cursor-pointer flex flex-col justify-center items-center relative p-4" id="container7" onclick="viewvideo('container7','video7')">
          <img src="./images/logo/logo.png" alt="Logo" class="absolute w-[50px] h-[50px] right-0 top-0">
          <img src="./images/iconvideo.png" alt="Video thumbnail" style="width: 65px !important;">
        </div>
        <!-- Video oculto inicialmente -->
        <video class="w-full h-full hidden" id="video7" controls>
          <source src="./videos/videos_alumnos/video7.mp4" type="video/mp4">
        </video>
      </div>

      <div class="relative flex bg-black/80 shadow-md min-w-[260px] h-[160px]">
        <!-- Contenedor de la miniatura -->
        <div class="w-full h-full cursor-pointer flex flex-col justify-center items-center relative p-4" id="container8" onclick="viewvideo('container8','video8')">
          <img src="./images/logo/logo.png" alt="Logo" class="absolute w-[50px] h-[50px] right-0 top-0">
          <img src="./images/iconvideo.png" alt="Video thumbnail" style="width: 65px !important;">
        </div>
        <!-- Video oculto inicialmente -->
        <video class="w-full h-full hidden" id="video8" controls>
          <source src="./videos/videos_alumnos/video9.mp4" type="video/mp4">
        </video>
      </div>

      <div class="relative flex bg-black/80 shadow-md min-w-[260px] h-[160px]">
        <!-- Contenedor de la miniatura -->
        <div class="w-full h-full cursor-pointer flex flex-col justify-center items-center relative p-4" id="container9" onclick="viewvideo('container9','video9')">
          <img src="./images/logo/logo.png" alt="Logo" class="absolute w-[50px] h-[50px] right-0 top-0">
          <img src="./images/iconvideo.png" alt="Video thumbnail" style="width: 65px !important;">
        </div>
        <!-- Video oculto inicialmente -->
        <video class="w-full h-full hidden" id="video9" controls>
          <source src="./videos/videos_alumnos/video10.mp4" type="video/mp4">
        </video>
      </div>

    </div>
    <div class="absolute bottom-1 lg:-bottom-5 xl:bottom-3 flex w-full justify-center items-center">
      <div class="flex gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left-circle-fil text-secondary-color cursor-pointer" viewBox="0 0 16 16" id="scrollLeft">
          <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right-circle-fill text-secondary-color cursor-pointer" viewBox="0 0 16 16" id="scrollRight">
          <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
        </svg>
      </div>
    </div>
  </section>

  <!-- Contactanos -->
  <section id="contacto" class="w-full px-6 py-16 flex justify-center items-center">
    <div class="w-full max-w-5xl flex flex-col items-center gap-8" data-aos="fade-up" data-aos-duration="800">

      <!-- Título -->
      <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold font-['Oswald'] text-center">Contáctanos</h2>
      <p class="text-sm md:text-base  text-center max-w-xl">¿Tienes alguna duda o quieres saber más sobre nuestras clases y programas? Completa el formulario y nos pondremos en contacto contigo.</p>

      <!-- Formulario -->
      <form id="contactForm" method="post" class="w-full flex flex-col gap-5 bg-white/10 backdrop-blur-md border border-white/10 rounded-xl p-6 md:p-10 shadow-xl sm:max-w-[520px] lg:max-w-[800px]">

        <div class="flex flex-col md:flex-row gap-4">
          <input type="text" name="nombre" id="nombre" placeholder="Tu nombre" required
            class="flex-1 px-4 py-2 rounded-md placeholder-gray-400 border border-gray-600 focus:ring-2 focus:ring-secondary-color focus:outline-none transition">

          <input type="email" name="email" id="email" placeholder="Tu correo electrónico" required
            class="flex-1 px-4 py-2 rounded-md placeholder-gray-400 border border-gray-600 focus:ring-2 focus:ring-secondary-color focus:outline-none transition">
        </div>

        <input type="text" name="celcontacto" id="celcontacto" placeholder="Tu número (opcional)"
          class="w-full px-4 py-2 rounded-md placeholder-gray-400 border border-gray-600 focus:ring-2 focus:ring-secondary-color focus:outline-none transition">

        <textarea name="content" id="content" rows="5" placeholder="Dejanos un mensaje" required
          class="w-full px-4 py-2 rounded-md placeholder-gray-400 border border-gray-600 focus:ring-2 focus:ring-secondary-color focus:outline-none transition resize-none"></textarea>

        <input type="submit" value="Enviar mensaje"
          class="bg-secondary-color text-black font-semibold px-6 py-3 rounded-md hover:bg-yellow-400/80 transition cursor-pointer text-lg font-['Oswald'] mt-4 shadow-md">
      </form>
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


    new Swiper(".testimonial-swiper", {
      effect: "fade",
      autoplay: {
        delay: 8000,
        disableOnInteraction: false,
      },
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      fadeEffect: {
        crossFade: true,
      },
    });

    const comunidadSwiper = new Swiper(".comunidadSwiper", {
      loop: false,
      spaceBetween: 20,
      slidesPerView: 1.2,
      centeredSlides: false,
      pagination: {
        el: ".comunidad-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".comunidad-next",
        prevEl: ".comunidad-prev",
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

    function toggleComunidadNav(swiper) {
      const slidesPerView = getSlidesPerView(swiper);
      const totalSlides = swiper.slides.length;

      const shouldShow = totalSlides > slidesPerView;

      const nextBtn = document.querySelector(".comunidad-next");
      const prevBtn = document.querySelector(".comunidad-prev");

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

  <script src="src/js/main.js?v=20250728"></script>
  <script src="./src/js/resenias.js?v=20250728"></script>
  <script src="./src/css/aos-master/dist/aos.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal/minimal.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</body>

</html>