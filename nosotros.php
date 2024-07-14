<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melodías Unidas | Nosotros | Equipo apasionado</title>
    <meta name="description" content="¡Siente el Vínculo Musical que Une Nuestros Corazones en Todo el Mundo!">
    <meta name="keywords" content="clases de musica, clases de piano, piano, clases online de piano, escuela de piano, clases de piano en linea, clases de piano en españa">
    <meta name="author" content="Melodías Unidas">
    <link rel="icon" href="./images/logo/iconoround.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="./images/logo/iconoround.png">
    <link rel="canonical" href="https://www.melodiasunidas.com">
    <link href="./src/output_v1.css" rel="stylesheet" />
    <link href="./src/css/main.css" rel="stylesheet" />
    <script src="src/js/main.js" defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<?php 
  $pagina = "nosotros";
?>
<body>
    <!-- Encabezado -->
    <?php include("header.php") ?>

    <!-- Portada -->
    <section class="flex bg-black/30 h-[30vh] sm:h-[50vh] lg:h-[70vh] xl:h-[85vh]">
        <img src="./images/portada.jpeg" alt="portadanosotros" class="w-full object-cover">
    </section>

    <!-- Intro -->
    <section class="flex flex-col pt-14 p-8 gap-6 sm:px-32 xl:px-48 xl:py-20">
        <h4 class="text-center text-lg font-medium font-['Oswald'] sm:text-xl xl:text-3xl xl:mb-4">¡Te damos la bienvenida a un mundo de melodías unidas!</h4>
        <div class="flex flex-col gap-8 lg:flex-row lg:justify-between xl:px-16">
            <p class="text-justify text-[12px] lg:text-[13px] xl:text-base lg:flex animate__animated animate__fadeIn animate__delay-1s">
                Somos un equipo apasionado y dedicado, listos para hacer de tu viaje musical una experiencia emocionante y gratificante. Desde el primer momento, te recibiremos con una sonrisa y un abrazo musical. Creemos en la magia de la música y en el poder de la conexión humana. Más que un equipo, somos una familia de amantes de la música.
                <br /><br />
                Estamos aquí para ti en cada paso del camino, desde responder tus preguntas hasta celebrar tus logros. Juntos, exploraremos el mundo del piano y la alegría de crear música. ¡Únete a nosotros en este emocionante viaje musical! ¡Estamos emocionados de conocerte y compartir nuestra pasión contigo!
            </p>
            <video class="sm:w-[520px] lg:flex lg:justify-center lg:items-center lg:w-[320px] xl:w-[400px]" controls autoplay loop muted data-aos="fade-up" data-aos-duration="1000">
                <source src="./videos/nosotros.mp4" type="video/mp4">
            </video>
        </div>
    </section>

    <!-- Oferta educativa -->
    <section class="flex flex-col p-8 gap-6 sm:px-32 xl:px-48 xl:py-20">
        <div class="flex w-full flex-col gap-4 justify-center">
            <h4 class="text-center text-2xl font-medium font-['Oswald'] lg:text-3xl xl:text-4xl xl:mb-4">Oferta educativa</h4>
            <div class="w-full flex justify-center items-center">
                <img src="./images/pianista.png" alt="pianista" title="pianista" class="w-[125px] h-[125px] lg:w-[175px] lg:h-[175px]" data-aos="fade-right" data-aos-duration="1000">
            </div>
        </div>
        <div class="flex flex-col gap-8 pb-10 sm:gap-8 xl:px-16 sm:pb-8">
            <div class="flex flex-col gap-2 sm:gap-4">
                <h5 class="font-semibold sm:text-lg">
                    Formación Oficial
                </h5>
                <p class="text-[12px] text-justify overflow-auto max-h-[225px] lg:text-sm">
                    Para todos aquellos que buscan conseguir plaza en el conservatorio u obtener títulos oficiales, nuestra formación oficial proporciona un camino estructurado y reconocido para el desarrollo musical. Desde la preparación de pruebas de acceso hasta la obtención de títulos de prestigio como ABRSM y Rock School, nuestros programas oficialmente reconocidos validan el progreso y la competencia musical de nuestros estudiantes.
                    <br>
                    Beneficios: Estas opciones de formación oficial no solo fomentan un alto nivel de habilidad musical, sino que también promueven la disciplina, la perseverancia y la autoconfianza. Además, la preparación para exámenes ofrece una estructura clara y objetivos medibles para el crecimiento musical.
                </p>
            </div>
            <div class="flex flex-col gap-2 sm:gap-4">
                <h5 class="font-semibold sm:text-lg">
                    Formación No Oficial
                </h5>
                <p class="text-[12px] text-justify overflow-auto max-h-[225px] lg:text-sm">
                    Para todos aquellos que buscan que la música les acompañe en su día a día como un hobby más, sin intención de hacer exámenes ni pruebas de acceso al conservatorio, ofrecemos una forma de aprender más relajada y a tu ritmo. Nuestras clases no oficiales ofrecen un enfoque más flexible y personalizado para explorar la música como un pasatiempo enriquecedor. Además de desarrollar habilidades musicales, estas clases fomentan la creatividad, la socialización y el bienestar emocional.
                    <br>
                    En conclusión, tanto la formación oficial como la no oficial tienen sus propias ventajas y desafíos. La elección entre ellas depende de las metas, preferencias y circunstancias individuales de cada estudiante. En nuestra academia, nos comprometemos a proporcionar una experiencia educativa enriquecedora y personalizada, guiada por la experiencia de un equipo docente con más de 12 años dedicados a la enseñanza musical.
                </p>
            </div>
        </div>
    </section>

    <!-- Nuestros colaboradores -->
    <?php include("nosotros-colaboradores.php") ?>

    <!-- Razones para elegir melodias Unidas -->
    <section class="flex flex-col py-14 px-8 lg:hidden">
        <div>
            <h3 class="text-black font-['Oswald'] text-center text-lg sm:text-xl">Razones para elegir Melodías Unidas</h3>
        </div>
        <div class="flex justify-center items-center flex-col pt-8 gap-10 sm:px-16">
            <div class="flex justify-center items-start flex-col min-w-[275px] gap-4 lg:w-full" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Talento y devoción musical
                </h5>
                <p class="text-justify text-[12px]">
                    En Melodías Unidas, no solo recibes instrucción; te embarcas en un
                    viaje guiado por nuestro profe de piano, quien ha perfeccionado su
                    arte a lo largo de los años.
                </p>
            </div>
            <div class="flex justify-center items-start flex-col min-w-[275px] gap-4 lg:w-full" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Adaptabilidad y personalización
                </h5>
                <p class="text-justify text-[12px]">
                    Nos adaptamos a las necesidades y preferencias musicales de cada alumno, ofreciendo un espacio para explorar la música a tu propio ritmo y estilo, desde lo clásico hasta lo contemporáneo.
                </p>
            </div>
            <div class="flex justify-center items-start flex-col min-w-[275px] gap-4 lg:w-full" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Éxito demostrado
                </h5>
                <p class="text-justify text-[12px]">
                    Nuestra dedicación ha llevado a numerosos alumnos a alcanzar sus
                    metas musicales, desde la entrada a conservatorios hasta la simple
                    realización personal.
                </p>
            </div>
            <div class="flex justify-center items-start flex-col min-w-[275px] gap-4 lg:w-full" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Enfoque integral e innovador
                </h5>
                <p class="text-justify text-[12px]">
                    Ofrecemos una experiencia educativa completa, desde la teoría hasta la práctica, fomentando una comprensión profunda y apreciación de la música en todos sus aspectos.
                </p>
            </div>
            <div class="flex justify-center items-start flex-col min-w-[275px] gap-4 lg:w-full" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Bienestar y desarrollo musical
                </h5>
                <p class="text-justify text-[12px]">
                    Nos preocupamos por tu bienestar y progreso musical, enfocándonos en técnicas de relajación, manejo del estrés escénico y desarrollo de habilidades técnicas para una experiencia enriquecedora.
                </p>
            </div>
            <div class="flex justify-center items-start flex-col min-w-[275px] gap-4 lg:w-full" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Excelencia en clases virtuales
                </h5>
                <p class="text-justify text-[12px]">
                    Destacamos la eficacia de las clases virtuales con atención al detalle, compromiso del profesor y adaptación a diferentes estilos de aprendizaje, priorizando el éxito mutuo.
                </p>
            </div>
            <div class="flex justify-center items-start flex-col min-w-[275px] gap-4 lg:w-full" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Profesionalismo
                </h5>
                <p class="text-justify text-[12px]">
                    Más que un maestro, encontrarás un mentor dedicado a tu crecimiento musical y personal, en un ambiente de apoyo y respeto mutuo.
                </p>
            </div>
            <div class="flex justify-center items-start flex-col min-w-[275px] gap-4 lg:w-full" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Pasión y plenitud musical
                </h5>
                <p class="text-justify text-[12px]">
                    En Melodías Unidas, la música es más que una lección; es una
                    experiencia emocionante y personal que te invitamos a descubrir y
                    disfrutar plenamente. Únete a nosotros en un viaje donde la música
                    cobra vida y se convierte en una fuente inagotable de placer y
                    realización.
                </p>
            </div>
        </div>
    </section>

    <!-- Razones para elegir melodias Unidas LG -->
    <section class="hidden lg:flex flex-col py-14 px-16 justify-center w-full items-center">
        <div class="mb-8">
            <h3 class="text-black font-['Oswald'] text-center text-lg sm:text-xl lg:text-3xl lg:mb-6">Razones para elegir Melodías Unidas</h3>
        </div>
        <div class="flex flex-row flex-wrap gap-8 w-full xl:max-w-[1440px] justify-evenly">
            <div class="flex justify-start items-start flex-col gap-4 w-[275px]" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Talento y devoción musical
                </h5>
                <p class="text-justify text-[12px] xl:text-sm">
                    En Melodías Unidas, no solo recibes instrucción; te embarcas en un
                    viaje guiado por nuestro profe de piano, quien ha perfeccionado su
                    arte a lo largo de los años.
                </p>
            </div>
            <div class="flex justify-start items-start flex-col gap-4 w-[275px]" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Adaptabilidad y personalización
                </h5>
                <p class="text-justify text-[12px] xl:text-sm">
                    Nos adaptamos a las necesidades y preferencias musicales de cada alumno, ofreciendo un espacio para explorar la música a tu propio ritmo y estilo, desde lo clásico hasta lo contemporáneo.
                </p>
            </div>
            <div class="flex justify-start items-start flex-col gap-4 w-[275px]" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Éxito demostrado
                </h5>
                <p class="text-justify text-[12px] xl:text-sm">
                    Nuestra dedicación ha llevado a numerosos alumnos a alcanzar sus
                    metas musicales, desde la entrada a conservatorios hasta la simple
                    realización personal.
                </p>
            </div>
            <div class="flex justify-start items-start flex-col gap-4 w-[275px]" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Enfoque integral e innovador
                </h5>
                <p class="text-justify text-[12px] xl:text-sm">
                    Ofrecemos una experiencia educativa completa, desde la teoría hasta la práctica, fomentando una comprensión profunda y apreciación de la música en todos sus aspectos.
                </p>
            </div>
            <div class="flex justify-start items-start flex-col gap-4 w-[275px]" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Bienestar y desarrollo musical
                </h5>
                <p class="text-justify text-[12px] xl:text-sm">
                    Nos preocupamos por tu bienestar y progreso musical, enfocándonos en técnicas de relajación, manejo del estrés escénico y desarrollo de habilidades técnicas para una experiencia enriquecedora.
                </p>
            </div>
            <div class="flex justify-start items-start flex-col gap-4 w-[275px]" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Excelencia en clases virtuales
                </h5>
                <p class="text-justify text-[12px] xl:text-sm">
                    Destacamos la eficacia de las clases virtuales con atención al detalle, compromiso del profesor y adaptación a diferentes estilos de aprendizaje, priorizando el éxito mutuo.
                </p>
            </div>
            <div class="flex justify-start items-start flex-col gap-4 w-[275px]" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Profesionalismo
                </h5>
                <p class="text-justify text-[12px] xl:text-sm">
                    Más que un maestro, encontrarás un mentor dedicado a tu crecimiento musical y personal, en un ambiente de apoyo y respeto mutuo.
                </p>
            </div>
            <div class="flex justify-start items-start flex-col gap-4 w-[275px]" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Pasión y plenitud musical
                </h5>
                <p class="text-justify text-[12px] xl:text-sm">
                    En Melodías Unidas, la música es más que una lección; es una
                    experiencia emocionante y personal que te invitamos a descubrir y
                    disfrutar plenamente. Únete a nosotros en un viaje donde la música
                    cobra vida y se convierte en una fuente inagotable de placer y
                    realización.
                </p>
            </div>
        </div>
    </section>

    <!-- Pie de Pagina -->
    <?php include("footer.php") ?>

    <!-- Botones flotantes -->
    <div class="fixed z-30 bottom-0 flex gap-2 flex-col p-4 lg:p-8">
        <a href="https://api.whatsapp.com/send/?phone=+34604369473&text=Hola%2C%20me%20gustar%C3%ADa%20estudiar%20en%20Melod%C3%ADas%20Unidas." target="_blank" class="bg-white shadow-md rounded-full p-3" title="whastapp" alt="whastapp">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp text-primary-color hover:text-green-700 w-[24px] h-[24px] lg:w-[32px] lg:h-[32px]" viewBox="0 0 16 16" focusable="true">
                <title>Contactar por whastapp</title>
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
            </svg>
        </a>
        <a href="#header" class="bg-white flex shadow-md rounded-full p-3" title="subir" alt="subir">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-primary-color w-[24px] h-[24px] lg:w-[32px] lg:h-[32px]" focusable="true">
                <title>Subir</title>
                <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>

</body>

</html>