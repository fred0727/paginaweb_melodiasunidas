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
  <link href="./src/output.css" rel="stylesheet" />
  <link href="./src/css/main.css" rel="stylesheet" />
  <script src="src/js/main.js" defer></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
  <!-- Encabezado -->
  <?php include("header.php") ?>

  <!-- Portada -->
  <section id="imageContainer" class="min-w-full h-[40vh] border-primary-color flex justify-center items-center relative">
    <img id="image1" class="active object-cover" src="./images/slider/imagen1.jpg" alt="Imagen Cambiante" />
    <img id="image2" src="./images/slider/imagen2.jpg" alt="Imagen Cambiante" class="object-cover" />
    <img id="image3" src="./images/slider/imagen3.jpg" alt="Imagen Cambiante" class="object-cover" />
    <img id="image4" src="./images/slider/imagen4.png" alt="Imagen Cambiante" class="object-cover" />
    <div class="absolute z-10 bottom-10 animate__animated animate__backInUp animate__delay-1s">
      <a href="#footer" class="bg-secondary-color text-black/80 rounded-full p-2 px-4 text-base font-['Oswald']">
        Comienza a aprender
      </a>
    </div>
    <div class="absolute z-10 top-20 px-12 animate__animated animate__backInDown animate__delay-1s">
      <p class="text-white text-center font-normal">
        ¡Siente el Vínculo Musical que Une Nuestros Corazones en Todo el
        Mundo!
      </p>
    </div>
    <div class="absolute min-w-full min-h-full bg-black/50 z-0"></div>
  </section>

  <!-- Nuestras clases online + logo -->
  <section class="flex bg-primary-color text-white flex-col p-8 px-8">
    <div class="flex justify-center items-center mb-5">
      <img src="./images/logo/logo_sinfondo2.png" alt="Logo" title="Logo" class="w-[175px]" />
    </div>
    <h4 class="text-center text-lg font-['Oswald']">
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

  <!-- NUestro Profesor -->
  <section class="flex p-8 pt-14 w-full justify-center items-center flex-col gap-4 mb-6">
    <h2 class="text-2xl font-medium mb-2">Nuestro Profesor</h2>
    <div class="flex justify-start items-center w-full gap-1" data-aos="fade-right" data-aos-duration="1000">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-primary-color">
        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
      </svg>
      <h3 class="font-medium text-start w-full font-['Oswald']">Juan Carlos Salazar Rico</h3>
    </div>
    <p class="text-[11.5px] text-justify">
      Inicié mi travesía musical a la edad de 8 años, con profesores que hicieron crecer mi amor por la música. Mi formación se vio profundamente enriquecida gracias a mis estudios en Roma con el maestro Sasha Bajcic, cuyo enfoque y técnica han sido fundamentales en mi desarrollo artístico. Gracias a la guía de Verónica Metakovskaia, desarrollándome bajo la influencia de la reconocida escuela rusa de piano, el Conservatorio Adolfo Salazar me otorgó el Título de Grado Profesional en Piano, consolidando así mi formación académica.
    </p>
    <p class="text-[11.5px] text-justify">
      Como profesor, diseño clases personalizadas para adaptarme a las necesidades únicas de cada alumno, fomentando en ellos la confianza y la pasión por la música. Con más de tres décadas de experiencia en el piano y doce años dedicados a la enseñanza, participo activamente en talleres y seminarios para enriquecer la comunidad musical. Mi objetivo es crear un entorno inspirador donde cada alumno pueda descubrir su lugar en la música y desarrollar plenamente su potencial artístico.
    </p>
    <div class="flex w-[200px] h-[200px] mt-2 rounded-full" data-aos="fade-up" data-aos-duration="1000">
      <img src="./images/profesorjuancarlos.jpeg" alt="" srcset="" class="object-cover rounded-full">
    </div>
    <div class="flex justify-center items-center pt-4">
      <a href="#" class="bg-primary-color rounded-full px-4 py-1 flex justify-center items-center text-white font-['Oswald']">Conoceme mas</a>
    </div>
  </section>

  <!-- Nuestro Equipo -->
  <section class="flex text-white flex-col p-16 px-8 bg-black/60" id="nuestroequipo-parallax">
    <h4 class="text-center text-2xl font-medium">
      Nuestro equipo
    </h4>
    <br />
    <span class="text-lg font-['Oswald']">
      ¡Hola y bienvenidos a Melodías Unidas!
    </span>
    <p class="text-justify text-[11.5px] animate__animated animate__fadeIn animate__delay-1s mt-4 mb-6" data-aos="zoom-in" data-aos-duration="1000">
      Somos un equipo apasionado y dedicado, listos para hacer de tu viaje musical una experiencia emocionante y gratificante. Desde el primer momento, te recibiremos con una sonrisa y un abrazo musical. Creemos en la magia de la música y en el poder de la conexión humana. Más que un equipo, somos una familia de amantes de la música.

      Estamos aquí para ti en cada paso del camino, desde responder tus preguntas hasta celebrar tus logros. Juntos, exploraremos el mundo del piano y la alegría de crear música. ¡Únete a nosotros en este emocionante viaje musical! ¡Estamos emocionados de conocerte y compartir nuestra pasión contigo!
    </p>
  </section>

  <!-- Nuestros colaboradores -->
  <?php include("colaboradores.php") ?>

  <!-- Porque elegirnos -->
  <section class="flex p-8 w-full justify-center items-center flex-col gap-4">
    <h4 class="text-2xl font-[Oswald] font-medium">¿Por qué elegirnos?</h4>
    <p class="text-[12px] text-justify" data-aos="zoom-in" data-aos-duration="1000">
      En Melodías Unidas, la elección de nuestra academia se basa en una
      sinfonía de elementos que transforman las lecciones musicales en
      experiencias memorables y enriquecedoras.
    </p>
  </section>

  <!-- Slider - Ventajas Exclusivas -->
  <?php include("ventajas.php") ?>

  <!-- Testimonio Veronica Metakovskaya -->
  <section class="flex p-8 py-16 w-full justify-center items-center flex-col gap-8 bg-[#272727] mt-8">
    <div class="flex justify-center items-center w-[120px] h-[120px] rounded-full" data-aos="zoom-in" data-aos-duration="1000">
      <img src="./images/veronicamet.jpeg" alt="" class="object-cover w-full h-full rounded-full">
    </div>
    <p class="text-[11.5px] font-light text-white text-justify">Durante varios años Juan Carlos Salazar fue uno de mis alumnos a quien siempre recuerdo con mucho cariño. Las clases con él fueron interesantes y significativas. Juan Carlos es un pianista cuya imaginación artística y técnica pianística se desarrollaron a un alto nivel. Gracias a su actitud cuidadosa y creativa ante las indicaciones de los compositores, Juan Carlos interpreta obras de diversos estilos y épocas con constante éxito.</p>
    <p class="text-[11.5px] font-light text-white text-justify">Estoy segura que en las clases de Juan Carlos los alumnos no sólo reciben excelentes conocimientos, sino también algo más, Amor por la Música.</p>
    <p class="text-sm text-[#73aed9]">Verónica Metakovskaya</p>
  </section>

  <!-- Contactanos -->
  <section class="flex p-8 py-16 w-full justify-center items-center flex-col" id="contacto">
    <form action="" class="flex flex-col gap-4 w-full">
      <h5 class="font-['Oswald'] text-lg">Escribenos</h5>
      <input type="text" placeholder="Ingresa tu correo" class="w-full border border-primary-color rounded-sm px-2 py-2 text-sm" required>
      <input type="text" placeholder="Ingresa tu numero" class="w-full border border-primary-color rounded-sm px-2 py-2 text-sm" required>
      <textarea name="content" id="content" placeholder="Dejanos un mensaje" rows="6" class="w-full border border-primary-color rounded-sm px-2 py-1 text-sm"></textarea>
      <button class="bg-secondary-color text-black/80 px-2 py-2 rounded-sm font-['Oswald'] text-lg">Enviar</button>
    </form>
  </section>

  <!-- Pie de Pagina -->
  <footer class="flex flex-col p-8 py-14 gap-6 w-full justify-center items-center bg-primary-color" id="footer">
    <div class="w-full flex justify-center items-center gap-4">
      <a href="https://www.facebook.com/profile.php?id=61559635380871" class="cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook text-white w-[24px] h-[24px]" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
        </svg>
      </a>
      <a href="mailto:melodiaunidas@gmail.com?Subject=Quiero%20información%20de%20las%20clases" class="cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill text-white w-[24px] h-[24px]" viewBox="0 0 16 16">
          <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671" />
          <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791" />
        </svg>
      </a>
    </div>
    <div class="flex w-full justify-center items-center">
      <h5 class="flex flex-col justify-start items-center text-white text-[12px] gap-2">
        <b class="text-sm">Horario de atencion:</b>
        <span class="flex justify-start items-center text-white text-[12px]">
          09:00-14:00 / 15:30-20:20
        </span>
      </h5>
    </div>
    <div class="w-full flex justify-evenly gap-2 items-center text-white">
      <div class="flex gap-1 justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
          <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
        </svg>
        <span class="text-sm">Madrid</span>
      </div>
      <div class="flex gap-1 justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
          <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
        </svg>
        <span class="text-sm">604 369 473</span>
      </div>
    </div>
    <p class="flex justify-center items-center text-[11px] text-white text-center font-light">
      Melodías Unidas © 2024 <br> Todos los derechos reservados
    </p>
  </footer>

  <!-- Botones flotantes -->
  <div class="fixed z-30 bottom-0 flex gap-2 flex-col p-4">
    <a href="#contacto" class="bg-white shadow-md rounded-full p-3">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-primary-color w-[24px] h-[24px]">
        <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97ZM6.75 8.25a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 0 1.5h-9a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H7.5Z" clip-rule="evenodd" />
      </svg>
    </a>
    <a href="https://wa.me/send?phone=34604369473&text=Hola%2C%20me%20gustar%C3%ADa%20estudiar%20en%20Melod%C3%ADas%20Unidas." target="_blank" class="bg-white shadow-md rounded-full p-3">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp text-primary-color w-[24px] h-[24px]" viewBox="0 0 16 16">
        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
      </svg>
    </a>
    <a href="#header" class="bg-white flex shadow-md rounded-full p-3">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-primary-color w-[24px] h-[24px]">
        <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z" clip-rule="evenodd" />
      </svg>
    </a>
  </div>

  <!-- Script Slider portada -->
  <script>
    const images = [
      "images/slider/imagen1.jpg",
      "images/slider/imagen2.jpg",
      "images/slider/imagen3.jpg",
      "images/slider/imagen4.png",
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