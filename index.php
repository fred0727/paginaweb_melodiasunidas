<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./src/output.css" rel="stylesheet" />
  <link href="./src/css/main.css" rel="stylesheet" />
  <script src="./src/js/main.js" defer></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title>Melodías Unidas</title>
</head>

<body>
  <header class="bg-primary-color min-w-full flex justify-evenly items-center p-7">
    <div class="flex justify-around items-center w-full">
      <div class="flex flex-col justify-center items-center w-full">
        <h3 class="text-lg text-white font-semibold underline underline-offset-[5px] font-['Playwrite_ZA']">
          Melodías Unidas
        </h3>
        <span class="text-white text-lg font-['Oswald']">Escuela de Música</span>
      </div>
      <button>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7 text-white font-extrabold">
          <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
        </svg>
      </button>
    </div>
    <nav class="hidden sm:flex justify-center items-center">
      <ul class="flex justify-center items-center gap-4">
        <li>Inicio</li>
        <li>Nosotros</li>
        <li>Clases</li>
        <li>Contacto</li>
        <li>
          <button class="border-white">
            Iniciar Sesión
          </button>
        </li>
      </ul>
    </nav>
  </header>

  <section id="imageContainer" class="min-w-full h-[35vh] border-primary-color flex justify-center items-center relative">
    <img id="image1" class="active object-cover" src="./images/slider/imagen1.jpg" alt="Imagen Cambiante" />
    <img id="image2" src="./images/slider/imagen2.jpg" alt="Imagen Cambiante" class="object-cover" />
    <div class="absolute z-10 bottom-10 animate__animated animate__backInUp animate__delay-1s">
      <button class="bg-[#FADA5E] text-black/60 rounded-full p-2 px-4 text-base font-['Oswald']">
        Comienza a aprender
      </button>
    </div>
    <div class="absolute z-10 top-20 px-12 animate__animated animate__backInDown animate__delay-1s">
      <p class="text-white text-center font-normal">
        ¡Siente el Vínculo Musical que Une Nuestros Corazones en Todo el
        Mundo!
      </p>
    </div>
  </section>

  <section class="flex bg-primary-color text-white flex-col p-8 px-8">
    <div class="flex justify-center items-center pb-4">
      <img src="./images/logo/logo_sinfondo.png" alt="Logo" title="Logo" class="w-[150px]" />
    </div>
    <h4 class="text-center text-lg font-['Oswald']">
      <!-- ¡Siente el vínculo musical que une nuestros corazones en todo el mundo! -->
      NUESTRAS CLASES ONLINE: <br />La presencialidad en la distancia.
    </h4>
    <br />
    <p class="text-justify text-[11.5px] animate__animated animate__fadeIn animate__delay-1s">
      Nuestros profes te acompañan en esta aventura musical con clases online
      personalizadas. Desde la postura hasta la técnica, se preocupan por cada
      detalle para que construyas una base sólida y afrontes desafíos cada vez
      más grandes.
    </p>
  </section>

  <section class="flex p-8 pt-14 w-full justify-center items-center flex-col gap-4 mb-6">
    <h2 class="text-2xl font-medium mb-2">Nuestro Profesor</h2>
    <div class="flex justify-start items-center w-full gap-1" data-aos="fade-right" data-aos-duration="1000">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-primary-color">
        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
      </svg>
      <h3 class="font-medium text-start w-full font-['Oswald']">Juan Carlos Salazar Rico</h3>
    </div>
    <p class="text-[11.5px] text-justify">
      Comencé mi viaje musical con el piano a los 8 años, formándome en la Escuela Maestro Barbieri, la Escuela de Música Ágata en Madrid, y en Roma con Sasha Bajcic y Verónica Metakovskaia. Obtuve el Grado Profesional de Piano del Conservatorio Adolfo Salazar.
    </p>
    <p class="text-[11.5px] text-justify">
      Como educador, personalizo lecciones para adaptarme a las necesidades de mis alumnos, fomentando confianza y pasión por la música. Con más de tres décadas en el piano y doce años de enseñanza, participo en talleres y seminarios para enriquecer la comunidad musical, creando un entorno donde cada estudiante puede encontrar su lugar en la música y desarrollarse plenamente.
    </p>
    <div class="flex w-[200px] h-[200px] mt-2 rounded-full" data-aos="fade-up" data-aos-duration="1000">
      <img src="./images/profesorjuancarlos.jpeg" alt="" srcset="" class="object-cover rounded-full">
    </div>
    <div class="flex justify-center items-center pt-4">
      <a href="#" class="bg-primary-color rounded-full px-4 py-1 flex justify-center items-center text-white font-['Oswald']">Conoceme mas</a>
    </div>
  </section>

  <section class="flex bg-primary-color text-white flex-col p-8 px-8">
    <h4 class="text-center text-lg font-['Oswald']">
      Nuestro equipo
    </h4>
    <br />
    <p class="text-justify text-[11.5px] animate__animated animate__fadeIn animate__delay-1s">
      Nuestros profes te acompañan en esta aventura musical con clases online
      personalizadas. Desde la postura hasta la técnica, se preocupan por cada
      detalle para que construyas una base sólida y afrontes desafíos cada vez
      más grandes.
    </p>
  </section>





  <section class="flex p-8 pt-16 w-full justify-center items-center flex-col gap-4">
    <h4 class="text-2xl font-[Oswald] font-medium">¿Por qué elegirnos?</h4>
    <p class="text-sm text-justify" data-aos="zoom-in" data-aos-duration="1000">
      En Melodías Unidas, la elección de nuestra academia se basa en una
      sinfonía de elementos que transforman las lecciones musicales en
      experiencias memorables y enriquecedoras.
    </p>
  </section>
  <section class="flex min-w-full h-[50vh] mb-10 relative justify-center items-center">
    <img src="./images/portada-melodias.jpeg" alt="" class="w-full object-cover" />
    <div class="flex px-5 absolute w-full h-full justify-center items-center">
      <!-- <span class="font-[Oswald] text-white text-5xl text-center font-normal" data-aos="zoom-in-up" data-aos-duration="1000">¡Te damos la bienvenida a un mundo de melodías unidas!</span> -->
    </div>
  </section>

  <script>
    const images = [
      "images/slider/imagen1.jpg",
      "images/slider/imagen2.jpg",
      "images/slider/imagen3.jpg",
      "images/slider/imagen4.jpg",
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

</body>

</html>