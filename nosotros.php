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
    <link href="./src/output_v5.css" rel="stylesheet" />
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
    <section class="flex bg-black/80 h-[30vh] sm:h-[50vh] lg:h-[70vh] xl:h-[85vh]">
        <img src="./images/portada.jpeg" alt="portadanosotros" class="w-full object-cover">
    </section>

    <!-- Intro -->
    <section class="flex flex-col pt-14 p-8 gap-6 sm:px-32 xl:px-48 xl:py-40">
        <h4 class="text-center text-lg font-medium font-['Oswald'] sm:text-xl xl:text-4xl xl:mb-4 lg:pb-10 ">¡Bienvenid@ a un mundo de música y buenas vibras!</h4>
        <div class="flex flex-col gap-8 xl:gap-12 lg:flex-row lg:justify-between xl:px-16">
            <p class="flex flex-col text-justify text-[12px] lg:text-[13px] xl:text-lg lg:flex animate__animated animate__fadeIn animate__delay-1s">
                En Melodías Unidas somos un equipo que respira música y está preparado para acompañarte en este increíble viaje. Desde el primer día te recibimos con los brazos abiertos y con todas las ganas de que disfrutes aprendiendo.
                <br /><br />
                Aquí no solo se trata de clases, ¡se trata de formar parte de algo más grande! Estaremos a tu lado en cada paso, ayudándote, apoyándote y celebrando tus avances.
                <br /><br />
                <span class="font-semibold">¡Ven a compartir esta aventura musical con nosotros!</span>
            </p>
            <video class="sm:w-[520px] lg:flex lg:justify-center lg:items-center lg:w-[320px] xl:w-[400px] shadow-md" muted autoplay data-aos="fade-up" data-aos-duration="1000">
                <source src="./videos/nosotros.webm" type="video/mp4">
            </video>
        </div>
    </section>

    <!-- Oferta educativa -->
    <!-- <section class="flex flex-col p-8 gap-6 sm:px-32 xl:px-48 xl:py-20"> -->
    <section class="flex text-white flex-col p-16 px-8 bg-black/90 sm:px-16 lg:px-48 lg:py-32 lg:justify-center lg:items-center" id="nuestroequipo2-parallax">
        <div class="flex w-full flex-col gap-4 justify-center mb-6">
            <h4 class="text-center text-2xl font-medium font-['Oswald'] lg:text-3xl xl:text-5xl xl:mb-4">Oferta educativa</h4>
            <!-- <div class="w-full flex justify-center items-center">
                <img src="./images/pianista.png" alt="pianista" title="pianista" class="w-[125px] h-[125px] lg:w-[175px] lg:h-[175px]" data-aos="fade-right" data-aos-duration="1000">
            </div> -->
        </div>
        <div class="flex flex-col gap-8 pb-10 sm:gap-8 xl:px-16 sm:pb-8">
            <div class="flex flex-col gap-2 sm:gap-4">
                <h5 class="font-semibold sm:text-lg xl:text-3xl text-secondary-color xl:mb-2">
                    Formación Oficial
                </h5>
                <p class="text-[12px] text-justify overflow-auto max-h-[225px] lg:text-sm xl:text-base">
                    Si tu sueño es entrar en el conservatorio o conseguir un título oficial, nuestra formación oficial te llevará directo a la meta. Te preparamos para pruebas de acceso y títulos de prestigio como ABRSM y Rock School. ¡Todo lo que necesitas para validar tu progreso y convertirte en un crack musical!
                    <br><br>
                    <span class="font-bold ">Beneficios:</span>
                    <br>
                    <span>Además de mejorar tu técnica, aprenderás a ser constante y disciplinado, con exámenes que te guían hacia tus objetivos. ¡Cada paso es una victoria que demuestra tu evolución!</span>
                </p>
            </div>
            <div class="flex flex-col gap-2 sm:gap-4 mt-2">
                <h5 class="font-semibold sm:text-lg xl:text-3xl text-secondary-color">
                    Formación No Oficial
                </h5>
                <p class="text-[12px] text-justify overflow-auto max-h-[225px] lg:text-sm xl:text-base">
                    Si lo que buscas es aprender música por puro placer, sin prisas ni exámenes, nuestras clases no oficiales son lo tuyo. Aquí aprendes a tu ritmo, sin estrés, y haces de la música una parte divertida de tu día a día. ¡Vas a disfrutar del proceso mientras desarrollas tu creatividad y bienestar emocional!
                    <br><br>
                    Al final, lo importante es que elijas lo que mejor se adapta a ti. Tanto si prefieres una formación oficial como algo más relajado, en Melodías Unidas tenemos lo que necesitas, con un equipo docente que lleva más de 12 años en esto. ¡Tú eliges cómo disfrutar de la música!
                </p>
            </div>
        </div>
    </section>

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
                    En Melodías Unidas, nuestro profe de piano es un crack con años de experiencia, listo para guiarte en este viaje musical.
                </p>
            </div>
            <div class="flex justify-center items-start flex-col min-w-[275px] gap-4 lg:w-full" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Adaptabilidad y personalización
                </h5>
                <p class="text-justify text-[12px]">
                    Tu música, tu ritmo. Nos adaptamos a ti y a lo que más te guste, desde lo clásico hasta lo moderno. ¡Tú mandas!
                </p>
            </div>
            <div class="flex justify-center items-start flex-col min-w-[275px] gap-4 lg:w-full" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Éxito demostrado
                </h5>
                <p class="text-justify text-[12px]">
                    Muchos de nuestros alumnos han alcanzado sus metas: desde entrar al conservatorio hasta disfrutar de la música como parte de su vida diaria.
                </p>
            </div>
            <div class="flex justify-center items-start flex-col min-w-[275px] gap-4 lg:w-full" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Enfoque integral e innovador
                </h5>
                <p class="text-justify text-[12px]">
                    No solo te enseñamos a tocar, te ayudamos a entender la música desde todos los ángulos: teoría, práctica y mucho más.
                </p>
            </div>
            <div class="flex justify-center items-start flex-col min-w-[275px] gap-4 lg:w-full" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Bienestar y desarrollo musical
                </h5>
                <p class="text-justify text-[12px]">
                    Nos enfocamos en tu bienestar. Te enseñamos a relajarte, a manejar el estrés de los escenarios y a mejorar tus técnicas para que disfrutes más. </p>
            </div>
            <div class="flex justify-center items-start flex-col min-w-[275px] gap-4 lg:w-full" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Excelencia en clases virtuales
                </h5>
                <p class="text-justify text-[12px]">
                    Clases online sin complicaciones: nos adaptamos a tu estilo de aprendizaje y te apoyamos en cada paso, sin perder ni un detalle.
                </p>
            </div>
            <div class="flex justify-center items-start flex-col min-w-[275px] gap-4 lg:w-full" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Profesionalismo
                </h5>
                <p class="text-justify text-[12px]">
                    Aquí encontrarás más que un profe, tendrás un mentor comprometido con tu crecimiento musical y personal.
                </p>
            </div>
            <div class="flex justify-center items-start flex-col min-w-[275px] gap-4 lg:w-full" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Pasión y plenitud musical
                </h5>
                <p class="text-justify text-[12px]">
                    La música en Melodías Unidas es una experiencia única, emocionante y súper personal. ¡Ven a disfrutarla con nosotros!
                </p>
            </div>
        </div>
    </section>

    <!-- Razones para elegir melodias Unidas LG -->
    <section class="hidden lg:flex flex-col py-24 px-16 justify-center w-full items-center">
        <div class="mb-12">
            <h3 class="text-black font-['Oswald'] text-center text-lg sm:text-xl lg:text-3xl lg:mb-6">Razones para elegir Melodías Unidas</h3>
        </div>
        <div class="flex flex-row flex-wrap gap-16 w-full xl:max-w-[1440px] justify-between">
            <div class="flex justify-start items-start flex-col gap-4 lg:w-[400px] xl:w-[375px]" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Talento y devoción musical
                </h5>
                <p class="text-justify text-[12px] xl:text-sm">
                En Melodías Unidas, nuestro profe de piano es un crack con años de experiencia, listo para guiarte en este viaje musical.
                </p>
            </div>
            <div class="flex justify-start items-start flex-col gap-4 lg:w-[400px] xl:w-[375px]" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Adaptabilidad y personalización
                </h5>
                <p class="text-justify text-[12px] xl:text-sm">
                Tu música, tu ritmo. Nos adaptamos a ti y a lo que más te guste, desde lo clásico hasta lo moderno. ¡Tú mandas!
                </p>
            </div>
            <div class="flex justify-start items-start flex-col gap-4 lg:w-[400px] xl:w-[375px]" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Éxito demostrado
                </h5>
                <p class="text-justify text-[12px] xl:text-sm">
                Muchos de nuestros alumnos han alcanzado sus metas: desde entrar al conservatorio hasta disfrutar de la música como parte de su vida diaria.
                </p>
            </div>
            <div class="flex justify-start items-start flex-col gap-4 lg:w-[400px] xl:w-[375px]" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Enfoque integral e innovador
                </h5>
                <p class="text-justify text-[12px] xl:text-sm">
                No solo te enseñamos a tocar, te ayudamos a entender la música desde todos los ángulos: teoría, práctica y mucho más.
                </p>
            </div>
            <div class="flex justify-start items-start flex-col gap-4 lg:w-[400px] xl:w-[375px]" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Bienestar y desarrollo musical
                </h5>
                <p class="text-justify text-[12px] xl:text-sm">
                Nos enfocamos en tu bienestar. Te enseñamos a relajarte, a manejar el estrés de los escenarios y a mejorar tus técnicas para que disfrutes más.
                </p>
            </div>
            <div class="flex justify-start items-start flex-col gap-4 lg:w-[400px] xl:w-[375px]" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Excelencia en clases virtuales
                </h5>
                <p class="text-justify text-[12px] xl:text-sm">
                Clases online sin complicaciones: nos adaptamos a tu estilo de aprendizaje y te apoyamos en cada paso, sin perder ni un detalle.
                </p>
            </div>
            <div class="flex justify-start items-start flex-col gap-4 lg:w-[400px] xl:w-[375px]" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Profesionalismo
                </h5>
                <p class="text-justify text-[12px] xl:text-sm">
                Aquí encontrarás más que un profe, tendrás un mentor comprometido con tu crecimiento musical y personal.
                </p>
            </div>
            <div class="flex justify-start items-start flex-col gap-4 lg:w-[400px] xl:w-[375px]" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="font-[Oswald] text-lg text-black/90 bg-secondary-color text-start px-4 py-2">
                    Pasión y plenitud musical
                </h5>
                <p class="text-justify text-[12px] xl:text-sm">
                La música en Melodías Unidas es una experiencia única, emocionante y súper personal. ¡Ven a disfrutarla con nosotros!
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