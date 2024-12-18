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
  <link href="./src/css/main.css" rel="stylesheet" />
  <link href="./src/css/aos-master/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" defer />
  <link href="./src/output_v5.css" rel="stylesheet" defer />
</head>
<?php
$pagina = "inicio";
?>

<body>
  <!-- Encabezado -->
  <?php include("header.php") ?>

  <!-- Portada -->
  <section id="imageContainer" class="min-w-full h-[40vh] sm:h-[56vh] lg:h-[90vh] border-primary-color flex justify-center items-center relative">
    <img id="image4" loading="lazy" class="active object-cover" src="./images/slider/imagen4.webp" alt="Imagen Cambiante" />
    <img id="image2" loading="lazy" class="object-cover" src="./images/slider/imagen2.webp" alt="Imagen Cambiante" />
    <img id="image3" loading="lazy" class="object-cover" src="./images/slider/imagen3.webp" alt="Imagen Cambiante" />
    <img id="image1" loading="lazy" class="object-cover" src="./images/slider/imagen1.webp" alt="Imagen Cambiante" />
    <div class="absolute z-10 bottom-10 animate__animated animate__backInUp animate__delay-1s lg:bottom-24">
      <a href="#footer" class="bg-secondary-color hover:bg-yellow-400 text-black p-3 rounded-full px-4 text-base lg:text-xl font-['Oswald'] transition-all duration-300">
        ¡Dale play a tu aventura musical!
      </a>
    </div>
    <div class="absolute z-10 top-12 px-12 animate__animated animate__backInDown animate__delay-1s sm:px-40 lg:px-60 lg:top-36">
      <p class="text-white text-center font-bold sm:text-xl lg:text-2xl xl:text-4xl font-['Oswald']">
        ¡La música es nuestro idioma común, no importa donde estes!
      </p>
    </div>
    <div class="absolute min-w-full min-h-full bg-black/40 z-0"></div>
  </section>

  <!-- Nuestras clases online + logo - Mobile -->
  <section class="flex bg-primary-color text-white flex-col p-8 px-8 lg:hidden">
    <div class="flex justify-center items-center mb-5">
      <img src="./images/logo/logo_sinfondo.webp" alt="Logo" title="Logo" class="w-[175px]" />
    </div>
    <h4 class="text-center text-lg font-['Oswald']">
      NUESTRAS CLASES ONLINE: <br /> ¡Como si estuviéramos ahí, pero sin salir de casa!
    </h4>
    <br />
    <p class="text-justify text-[12px] animate__animated animate__fadeIn animate__delay-1s sm:px-16">
      Nuestros profes están siempre al pie del cañón para acompañarte en esta aventura musical. Con clases online a tu medida, se aseguran de que no se te escape ni un detalle: desde cómo te sientas al tocar hasta que te sientas un crack en la técnica. ¡Vas a tener una base tan sólida que los desafíos van a parecer pan comido!
    </p>
  </section>

  <!-- Nuestras clases online + logo - Desktop -->
  <section class="hidden lg:flex bg-primary-color text-white flex-row p-8 px-48 lg:justify-center gap-20 lg:py-12 lg:px-32 xl:px-24 xl:py-24">
    <div class="flex justify-center items-center mb-5 w-[250px]">
      <img src="./images/logo/logo_sinfondo.webp" alt="Logo" title="Logo" class="w-[200px]" />
    </div>
    <div class="flex flex-col flex-1 max-w-[600px] xl:max-w-[800px]">
      <h4 class="text-center text-2xl font-['Oswald']">
        NUESTRAS CLASES ONLINE: <br /> ¡Como si estuviéramos ahí, pero sin salir de casa!
      </h4>
      <br />
      <p class="text-justify text-[13px] animate__animated animate__fadeIn animate__delay-1s sm:px-16 lg:px-0 xl:text-base">
        Nuestros profes están siempre al pie del cañón para acompañarte en esta aventura musical. Con clases online a tu medida, se aseguran de que no se te escape ni un detalle: desde cómo te sientas al tocar hasta que te sientas un crack en la técnica. ¡Vas a tener una base tan sólida que los desafíos van a parecer pan comido!
      </p>
    </div>
  </section>

  <!-- NUestro Profesor - Mobile -->
  <section class="flex p-8 pt-14 w-full justify-center items-center flex-col gap-4 mb-6 sm:px-16 lg:hidden">
    <h2 class="text-2xl font-medium mb-2">Nuestras clases de piano</h2>
    <div class="flex justify-start items-center w-full gap-1" data-aos="fade-right" data-aos-duration="1000">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-primary-color">
        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
      </svg>
      <h3 class="font-medium text-start w-full font-['Oswald']">Juan Carlos Salazar Rico</h3>
    </div>
    <p class="text-[12px] text-justify">
      Juan Carlos es nuestro profe de piano y el que coordina a todo el equipo docente.

      Empezó su aventura en la música cuando tenía solo 8 años, y desde entonces no ha parado.

      Después de estudiar en Roma con el maestro Sasha Bajcic, y tras pasar por la escuela rusa de piano de la mano de Verónica Metakovskaia, Juan Carlos consiguió su Título de Grado Profesional en Piano, otorgado por el Conservatorio Adolfo Salazar. ¡Todo un crack!
    </p>
    <p class="text-[12px] text-justify">
      A la hora de enseñar, Juan Carlos adapta sus clases a cada alumno, porque sabe que cada uno tiene su propio ritmo y estilo.

      Lleva más de tres décadas tocando el piano y más de doce años enseñando.

      Además, participa en un montón de talleres y seminarios para seguir creciendo. Su misión es clara: que cada alumno encuentre su lugar en la música y saque todo su potencial.
    </p>
    <div class="flex w-[200px] h-[200px] mt-2 rounded-full" data-aos="fade-up" data-aos-duration="1000">
      <img src="./images/profes/juancarlosinicio.jpeg" alt="Nuestro Profe" title="Nuestro Profe" srcset="" class="object-cover rounded-full w-[200px] h-[200px] grayscale hover:grayscale-0" loading="lazy">
    </div>
    <div class="flex justify-center items-center pt-4">
      <a href="profejuancarlos.php" class="bg-primary-color rounded-full px-4 py-1 flex justify-center items-center text-white font-['Oswald']">Conoceme mas</a>
    </div>
  </section>

  <!-- NUestro Profesor - Desktop-->
  <section class="hidden lg:flex p-8 py-16 w-full justify-center items-center flex-col gap-4 mb-6 sm:px-16 lg:px-48 lg:py-24 xl:gap-8">
    <h2 class="text-3xl font-medium mb-4 font-['Oswald'] xl:text-4xl">Nuestras clases de piano</h2>
    <div class="flex flex-row gap-8 max-px-16 xl:max-w-[1920px]">
      <div class="flex flex-col">
        <div class="flex justify-start items-center w-full gap-1 mb-6" data-aos="fade-right" data-aos-duration="1000">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-primary-color">
            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
          </svg>
          <h3 class="font-medium text-start w-full font-['Oswald'] text-xl">Juan Carlos Salazar Rico</h3>
        </div>
        <p class="text-[14px] text-justify xl:text-base">
          Juan Carlos es nuestro profe de piano y el que coordina a todo el equipo docente.

          Empezó su aventura en la música cuando tenía solo 8 años, y desde entonces no ha parado.

          Después de estudiar en Roma con el maestro Sasha Bajcic, y tras pasar por la escuela rusa de piano de la mano de Verónica Metakovskaia, Juan Carlos consiguió su Título de Grado Profesional en Piano, otorgado por el Conservatorio Adolfo Salazar. ¡Todo un crack!
        </p>
        <p class="text-[14px] text-justify mt-4 xl:text-base">
          A la hora de enseñar, Juan Carlos adapta sus clases a cada alumno, porque sabe que cada uno tiene su propio ritmo y estilo.

          Lleva más de tres décadas tocando el piano y más de doce años enseñando.

          Además, participa en un montón de talleres y seminarios para seguir creciendo. Su misión es clara: que cada alumno encuentre su lugar en la música y saque todo su potencial.
        </p>
      </div>
      <div class="flex w-full flex-col justify-center items-center gap-4">
        <div class="flex w-[300px] h-[300px] mt-2 rounded-full" data-aos="fade-up" data-aos-duration="1000">
          <img src="./images/profes/juancarlos.webp" alt="Nuestro Profe" title="Nuestro Profe" class="object-cover rounded-full w-[300px] h-[300px] grayscale hover:grayscale-0 cursor-pointer" loading="lazy">
        </div>
        <div class="flex justify-center items-center pt-4">
          <a href="profejuancarlos.php" class="bg-primary-color rounded-full px-6 py-2 flex justify-center items-center text-white font-['Oswald'] text-xl">Conoceme mas</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Nuestro Equipo -->
  <section class="flex text-white flex-col p-16 px-8 bg-black/70 sm:px-16 lg:px-48 xl:py-48 lg:justify-center lg:items-center" id="nuestroequipo-parallax">
    <h4 class="text-center text-2xl font-bold lg:text-4xl xl:text-5xl">
      Nuestro equipo
    </h4>
    <br />
    <span class="text-lg font-['Oswald'] lg:text-2xl lg:text-start w-full xl:max-w-[1920px]">
      ¡Hey, bienvenidos a Melodías Unidas!
    </span>
    <p class="text-justify text-[12px] animate__animated animate__fadeIn animate__delay-1s mt-4 mb-6 lg:text-base xl:max-w-[1920px] xl:text-lg" data-aos="zoom-in" data-aos-duration="1000">
      Aquí somos un equipo súper preparado y lleno de energía para hacer de tu experieancia musical algo único.

      Desde que entras por primera vez, te recibimos con buena onda y todas las ganas de compartir nuestra pasión.

      No somos solo profes, somos una familia musical que cree en la magia de la música y en lo que nos conecta.

      Estamos aquí para echarte una mano, resolver tus dudas y celebrar tus éxitos.

      Únete a la aventura, ¡estamos deseando conocerte y compartir nuestra pasión contigo!
    </p>
  </section>

  <!-- Nuestros colaboradores -->
  <?php
  // include("colaboradores.php") 
  ?>
  <section class="flex p-8 px-8 w-full justify-center items-center flex-col gap-4 sm:px-32 lg:px-48 lg:py-16 lg:mt-16" data-aos="fade-up" data-aos-duration="1000">
    <h4 class="text-xl font-[Oswald] font-normal lg:text-3xl mb-4 lg:mb-8 xl:text-4xl">
      Equipo Docente
    </h4>
    <div class="flex justify-center items-center flex-wrap gap-4 lg:gap-10">
      <div class="max-w-[500px]" onclick="changeProfe('juancarlos')">
        <div class="rounded-full w-[50px] h-[50px] lg:w-[125px] lg:h-[125px] xl:w-[150px] xl:h-[150px] transition-all duration-300 overflow-hidden cursor-pointer" id="profe1">
          <img src="./images/profes/juancarlos.webp" alt="" class="object-cover w-full h-full">
        </div>
      </div>
      <div class="max-w-[500px]" onclick="changeProfe('santiago')">
        <div class="rounded-full w-[50px] h-[50px] lg:w-[125px] lg:h-[125px] xl:w-[150px] xl:h-[150px] transition-all duration-300 overflow-hidden cursor-pointer grayscale hover:grayscale-0" id="profe2">
          <img src="./images/profes/santiago.jpeg" alt="" class="object-cover w-full h-full">
        </div>
      </div>
      <div class="max-w-[500px]" onclick="changeProfe('joseantonio')">
        <div class="rounded-full w-[50px] h-[50px] lg:w-[125px] lg:h-[125px] xl:w-[150px] xl:h-[150px] transition-all duration-300 overflow-hidden cursor-pointer grayscale hover:grayscale-0" id="profe3">
          <img src="./images/profes/joseantonio.webp" alt="" class="object-cover w-full h-full">
        </div>
      </div>
    </div>
    <div class="flex justify-center items-center flex-col mt-4 transition-all duration-300" id="profe-juancarlos">
      <p class="font-light mt-2 mb-4 text-center text-xs md:text-base lg:text-lg">Piano clásico <br> y moderno
      </p>
      <h3 class="text-sky-700 text-lg text-center lg:text-xl">Juan Carlos</h3>
      <span class="font-light text-center text-xs md:text-base lg:text-lg">Coordinador del equipo docente</span>
      <a href="profejuancarlos.php" class="text-sky-600 text-sm lg:text-base mt-4 border border-sky-600 hover:text-white hover:bg-sky-600 rounded-md px-4 py-2 transition-all duration-300">Conóceme</a>
    </div>
    <div class="flex hidden justify-center items-center flex-col mt-4 transition-all duration-300" id="profe-santiago">
      <p class="font-light mt-2 mb-4 text-center text-xs md:text-base lg:text-lg">Lenguaje musical, teoría <br> y producción musical
      </p>
      <h3 class="text-sky-700 text-lg text-center lg:text-xl">Santiago Andrés Medina Gómez</h3>
      <a href="profesantiago.php" class="text-sky-600 text-sm lg:text-base mt-4 border border-sky-600 hover:text-white hover:bg-sky-600 rounded-md px-4 py-2 transition-all duration-300">Conóceme</a>
    </div>
    <div class="flex hidden justify-center items-center flex-col mt-4 transition-all duration-300" id="profe-joseantonio">
      <p class="font-light mt-2 mb-4 text-center  text-xs md:text-base lg:text-lg">Historia de la <br> música
      </p>
      <h3 class="text-sky-700 text-lg text-center lg:text-xl">José Antonio Aguilar González</h3>
      <a href="profejoseantonio.php" class="text-sky-600 text-sm lg:text-base mt-4 border border-sky-600 hover:text-white hover:bg-sky-600 rounded-md px-4 py-2 transition-all duration-300">Conóceme</a>
    </div>
  </section>

  <section class="flex p-8 px-8 w-full justify-center items-center flex-col gap-4 sm:px-32 lg:px-48 lg:pb-16 lg:pt-0 xl:mt-16" data-aos="fade-up" data-aos-duration="1000">
    <h4 class="text-xl font-[Oswald] font-normal lg:text-3xl mb-4 lg:mb-8 xl:text-4xl">
      Equipo de gestión y administración
    </h4>
    <div class="flex justify-center items-center flex-wrap gap-4 lg:gap-10">
      <div class="max-w-[500px]" onclick="changeAdmin('manuel')">
        <div class="rounded-full w-[50px] h-[50px] lg:w-[125px] lg:h-[125px] xl:w-[150px] xl:h-[150px] transition-all duration-300 overflow-hidden cursor-pointer" id="admin1">
          <img src="./images/admins/manuel.jpeg" alt="" class="object-cover w-full h-full">
        </div>
      </div>
      <div class="max-w-[500px]" onclick="changeAdmin('ana')">
        <div class="rounded-full w-[50px] h-[50px] lg:w-[125px] lg:h-[125px] xl:w-[150px] xl:h-[150px] transition-all duration-300 overflow-hidden cursor-pointer grayscale hover:grayscale-0" id="admin2">
          <img src="./images/admins/ana.jpeg" alt="" class="object-cover w-full h-full">
        </div>
      </div>
      <div class="max-w-[500px]" onclick="changeAdmin('lucia')">
        <div class="rounded-full w-[50px] h-[50px] lg:w-[125px] lg:h-[125px] xl:w-[150px] xl:h-[150px] transition-all duration-300 overflow-hidden cursor-pointer grayscale hover:grayscale-0" id="admin3">
          <img src="./images/admins/lucia.jpeg" alt="" class="object-cover w-full h-full">
        </div>
      </div>
      <div class="max-w-[500px]" onclick="changeAdmin('marina')">
        <div class="rounded-full w-[50px] h-[50px] lg:w-[125px] lg:h-[125px] xl:w-[150px] xl:h-[150px] transition-all duration-300 overflow-hidden cursor-pointer grayscale hover:grayscale-0" id="admin4">
          <img src="./images/admins/marina.jpeg" alt="" class="object-cover w-full h-full">
        </div>
      </div>
    </div>
    <div class="flex justify-center items-center flex-col mt-4 transition-all duration-300" id="admin-manuel">
      <p class="font-light mt-2 mb-4 text-center text-xs md:text-base xl:text-lg">Se encarga de que todo esté en orden y <br> el equipo dé lo mejor de sí.
      </p>
      <h3 class="text-sky-700 text-lg lg:text-xl text-center">Manuel</h3>
      <span class="font-light text-center text-xs md:text-base xl:text-lg">Director</span>
      <a href="mailto:direccion.melodiasunidas@gmail.com?Subject=Quiero%20información" title="Contactame" class="flex justify-center items-center gap-2 text-sky-600 hover:underline text-sm lg:text-base mt-4 px-4 py-2 transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
        </svg>
        direccion.melodiasunidas@gmail.com</a>
    </div>
    <div class="flex hidden justify-center items-center flex-col mt-4 transition-all duration-300" id="admin-ana">
      <p class="font-light mt-2 mb-4 text-center text-xs md:text-base xl:text-lg">Gestiona el calendario, cambios de clases y <br> cancelaciones para que no te pierdas de nada.
      </p>
      <h3 class="text-sky-700 text-lg lg:text-xl text-center">Ana</h3>
      <span class="font-light text-center text-xs md:text-base xl:text-lg">Coordinadora académica</span>
      <a href="mailto:coordacademica.melodiasunidas@gmail.com?Subject=Quiero%20información" title="Contactame" class="flex justify-center items-center gap-2 text-sky-600 hover:underline text-sm lg:text-base mt-4 px-4 py-2 transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
        </svg>
        coordacademica.melodiasunidas@gmail.com</a>
    </div>
    <div class="flex hidden justify-center items-center flex-col mt-4 transition-all duration-300" id="admin-lucia">
      <p class="font-light mt-2 mb-4 text-center text-xs md:text-base xl:text-lg">La que controla que las cuotas y <br> las finanzas estén al día.
      </p>
      <h3 class="text-sky-700 text-lg lg:text-xl text-center">Lucía</h3>
      <span class="font-light text-center text-xs md:text-base xl:text-lg">Contabilidad</span>
      <a href="mailto:contabilidad.melodiasunidas@gmail.com?Subject=Quiero%20información" title="Contactame" class="flex justify-center items-center gap-2 text-sky-600 hover:underline text-sm lg:text-base mt-4 px-4 py-2 transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
        </svg>
        contabilidad.melodiasunidas@gmail.com</a>
    </div>
    <div class="flex hidden justify-center items-center flex-col mt-4 transition-all duration-300" id="admin-marina">
      <p class="font-light mt-2 mb-4 text-center text-xs md:text-base xl:text-lg">Es la que siempre está al tanto para ayudarte y <br> organizar todo lo administrativo.
      </p>
      <h3 class="text-sky-700 text-lg lg:text-xl text-center">Marina</h3>
      <span class="font-light text-center text-xs md:text-base xl:text-lg">Secretaría</span>
      <a href="mailto:secretaria.melodiasunidas@gmail.com?Subject=Quiero%20información" title="Contactame" class="flex justify-center items-center gap-2 text-sky-600 hover:underline text-sm lg:text-base mt-4 px-4 py-2 transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
        </svg>
        secretaria.melodiasunidas@gmail.com</a>
    </div>
  </section>


  <!-- Porque elegirnos -->
  <section class="flex p-8 w-full justify-center items-center flex-col gap-4 sm:px-32 lg:px-48">
    <h4 class="text-2xl font-[Oswald] font-medium lg:text-3xl xl:text-4xl">¿Por qué elegirnos?</h4>
    <p class="text-[12px] lg:text-base lg:px-8 lg:mt-6 text-center" data-aos="zoom-in" data-aos-duration="1000">
      En Melodías Unidas no solo damos clases, creamos experiencias musicales que recordarás. <br> ¿Por qué somos la mejor opción? <br><br> <span class="font-medium lg:text-lg">Mira esto:</span>
    </p>
  </section>

  <!-- Slider - Ventajas Exclusivas -->
  <?php include("ventajas.php") ?>

  <!-- Testimonio Veronica Metakovskaya -->
  <section class="flex p-8 py-16 w-full justify-center items-center flex-col gap-8 bg-gray-900 mt-8 sm:px-32 lg:px-48 lg:flex-row lg:gap-16 lg:py-24" id="testimonios">
    <div class="flex justify-center items-center flex-col gap-6 lg:max-w-[300px]">
      <div class="flex justify-center items-center w-[120px] h-[120px] lg:w-[200px] lg:h-[200px] rounded-full" data-aos="zoom-in" data-aos-duration="1000">
        <img src="./images/veronicamet.webp" alt="Veronica Metakovskaya" title="Veronica Metakovskaya" class="object-cover w-full h-full rounded-full" loading="lazy">
      </div>
      <p class="text-sm text-[#73aed9] lg:text-lg text-center">Verónica Metakovskaya</p>
    </div>
    <div class="px-6">
      <img src="./images/certificados/testimonio_mano.jpeg" alt="" class="rounded-md sm:max-w-[400px] lg:max-w-[500px]">
    </div>
    <!-- <div class="flex flex-col gap-2 lg:max-w-[600px] flex-1">
      <p class="text-[12px] font-light text-white text-justify lg:text-sm">Durante varios años Juan Carlos Salazar fue uno de mis alumnos a quien siempre recuerdo con mucho cariño. Las clases con él fueron interesantes y significativas. Juan Carlos es un pianista cuya imaginación artística y técnica pianística se desarrollaron a un alto nivel. Gracias a su actitud cuidadosa y creativa ante las indicaciones de los compositores, Juan Carlos interpreta obras de diversos estilos y épocas con constante éxito.</p>
      <p class="text-[12px] font-light text-white text-justify lg:text-sm">Estoy segura que en las clases de Juan Carlos los alumnos no sólo reciben excelentes conocimientos, sino también algo más, Amor por la Música.</p>
    </div> -->
  </section>

  <!-- Reseñas de estudiantes -->
  <section class="flex p-8 pt-12 pb-0 w-full justify-center items-center flex-col gap-4 sm:px-32 lg:px-48 xl:px-52 lg:py-12 xl:pt-24 xl:mb-0">
    <p class="w-full text-center lg:pt-8 font-['Oswald'] text-xl lg:text-2xl xl:text-3xl">Lo que dicen nuestros alumnos</p>
    <div class="slider-resenia w-full mt-2 lg:max-w-[1200px]">
      <div class="slides-resenia">
        <div class="slide-resenia gap-2">
          <div class="flex gap-2">
            <div class="flex justify-center items-center p-2 pl-0">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12 lg:size-16 text-[#ffcb01]">
                <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
              </svg>
            </div>
            <div class="flex flex-col justify-center items-start">
              <h5 class="text-start font-semibold lg:text-xl">Jose</h5>
              <span class="font-light text-[12px] lg:text-sm">Estudiante</span>
            </div>
          </div>
          <p class="flex text-justify text-[12px] lg:text-sm">Juan Carlos es un magnífico profesor. Adapta las clases a todos los niveles y las clases son muy prácticas y divertidas. Yo entré con cero conocimiento y estoy muy contento con el progreso que he hecho gracias a Juan Carlos. Además, la infraestructura que tiene montada para la clase on line es perfecta y puedes ver a la vez varias cámaras y las partituras. 100% recomendado!! Además es un crack como persona!
          </p>
        </div>
        <div class="slide-resenia gap-2">
          <div class="flex gap-2">
            <div class="flex justify-center items-center p-2 pl-0">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12 text-[#ffcb01]">
                <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
              </svg>
            </div>
            <div class="flex flex-col justify-center items-start">
              <h5 class="text-start font-semibold lg:text-xl">Amanda</h5>
              <span class="font-light text-[12px] lg:text-sm">Testimonio</span>
            </div>
          </div>
          <p class="flex text-justify text-[12px] lg:text-sm">Mis dos hijos de 8 y 11 años dan clases de piano con Juan. Darío, el pequeño, ha ganado muchísima seguridad en sí mismo incluso tocando delante de la familia y los amigos, Jorge, mi hijo de 11 años está planteándose preparar las pruebas de acceso al conservatorio con Juan. Durante el confinamiento hemos dado clases online con Juan y se dan estupendamente porque lo tiene todo muy bien preparado con un buen micrófono y varias cámaras.</p>
        </div>
        <div class="slide-resenia gap-2">
          <div class="flex gap-2">
            <div class="flex justify-center items-center p-2 pl-0">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12 text-[#ffcb01]">
                <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
              </svg>
            </div>
            <div class="flex flex-col justify-center items-start">
              <h5 class="text-start font-semibold lg:text-xl">Carlota</h5>
              <span class="font-light text-[12px] lg:text-sm">Estudiante</span>
            </div>
          </div>
          <p class="flex text-justify text-[12px] lg:text-sm">Toqué hace 20 años el piano y lo he retomado hace 4 meses con Juan; me encanta su manera de dar clases, está muy pendiente de todo y se nota que le pone pasión a lo que enseña en cada clase; trato excepcional, es un chico majísimo, pero me pone las pilas en cada clase para que note que voy avanzando; sus técnicas de estudio me parecen fabulosas ya que optimizo el tiempo que puedo practicar al máximo, en 4 meses ya estoy tocando piezas que tenía completamente olvidadas, motivada al 100%, lo recomiendo sin duda.</p>
        </div>
        <div class="slide-resenia gap-2">
          <div class="flex gap-2">
            <div class="flex justify-center items-center p-2 pl-0">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12 text-[#ffcb01]">
                <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
              </svg>
            </div>
            <div class="flex flex-col justify-center items-start">
              <h5 class="text-start font-semibold lg:text-xl">Laura</h5>
              <span class="font-light text-[12px] lg:text-sm">Estudiante</span>
            </div>
          </div>
          <p class="flex text-justify text-[12px] lg:text-sm">Doy clases de piano clásico con Juan, he aprendido muchísimo en 2 años en cuanto al manejo del brazo y la muñeca, que es fundamental para poder tocar con fluidez y sacarle un buen sonido al piano; siempre tiene una manera de hacerte ver lo que por tí misma no llegas a ver y de darte las pautas necesarias para no caer en los mismos errores cuando estás practicando en casa, ha mejorado mi relajación y consigo comprender y ejecutar muchísimo mejor las dinámicas, lo recomiendo 100%.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- Videos de comunidad estudiantil -->
  <section class="relative flex p-8 pt-12 w-full justify-center items-center flex-col gap-4 sm:px-32 lg:px-48 lg:py-0 xl:py-12 xl:pt-0 xl:mb-10">
    <div class="relative flex flex-row justify-start gap-4 lg:pt-8 lg:gap-6 w-[275px] sm:w-[550px] py-4 lg:w-[750px] xl:w-[1200px] overflow-x-scroll" id="section-div-videos">
      <!-- <div class="relative flex bg-black/80 opacity-85 hover:opacity-100 shadow-md min-w-[260px] h-[160px]">
        <video class="w-full h-full" controls preload="none">
          <source src="./videos/videos_alumnos/video8.mp4" type="video/mp4">
        </video>
        <img src="./images/logo/logo.png" alt="" class="absolute w-[50px] h-[50px] right-0">
      </div> -->

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
        <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" stroke-width="1.5" stroke="currentColor" class="size-6 lg:size-10 text-secondary-color cursor-pointer" id="scrollLeft">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
        </svg> -->
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left-circle-fil text-secondary-color cursor-pointer" viewBox="0 0 16 16" id="scrollLeft">
          <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
        </svg>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 lg:size-8 text-secondary-color cursor-pointer" id="scrollRight">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
        </svg> -->
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right-circle-fill text-secondary-color cursor-pointer" viewBox="0 0 16 16" id="scrollRight">
          <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
        </svg>
      </div>
    </div>
  </section>

  <!-- Contactanos -->
  <section class="flex p-8 py-16 pt-8 w-full justify-center items-center flex-col sm:px-32 lg:px-48 xl:mb-12" id="contacto">
    <form id="contactForm" method="post" class="flex flex-col gap-4 w-full sm:max-w-[520px] lg:max-w-[800px]">
      <h5 class="font-['Oswald'] text-lg lg:text-2xl xl:text-3xl lg:mb-2">Escribenos</h5>
      <input type="text" placeholder="Ingresa tu nombre" name="nombre" id="nombre" class="w-full border border-primary-color/80 rounded-md px-3 py-2 text-sm lg:text-base outline-none" required>
      <input type="text" placeholder="Ingresa tu correo" name="email" id="email" class="w-full border border-primary-color/80 rounded-md px-3 py-2 text-sm lg:text-base outline-none" required>
      <input type="text" placeholder="Ingresa tu numero (opcional)" name="celcontacto" id="celcontacto" class="w-full border border-primary-color/80 rounded-md px-3 py-2 text-sm lg:text-base outline-none">
      <textarea name="content" id="content" placeholder="Dejanos un mensaje" rows="6" class="w-full border border-primary-color/80 rounded-md px-3 py-1 text-sm lg:text-base outline-none" required></textarea>
      <input type="submit" class="bg-secondary-color hover:bg-yellow-400/80 text-black/60 px-2 py-2 rounded-md font-['Oswald'] text-lg lg:text-2xl lg:py-3 cursor-pointer" value="Enviar mensaje">
    </form>
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
    const images = [
      "images/slider/imagen4.webp",
      "images/slider/imagen2.webp",
      "images/slider/imagen3.webp",
      "images/slider/imagen1.webp",
    ];
    let currentIndex = 0;

    function changeImage() {
      const activeImage = document.querySelector("#imageContainer img.active");
      const nextImage = document.querySelector(
        "#imageContainer img:not(.active)"
      );

      currentIndex = (currentIndex + 1) % images.length;
      nextImage.src = images[currentIndex];

      activeImage.classList.remove("active");
      nextImage.classList.add("active");
    }

    setInterval(changeImage, 3000);
  </script>

  <script src="src/js/main.js"></script>
  <script src="./src/js/resenias.js"></script>
  <script src="./src/css/aos-master/dist/aos.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal/minimal.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</body>

</html>