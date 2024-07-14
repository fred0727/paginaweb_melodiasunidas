<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melodías Unidas | Nuestro Profe | Aprende a tocar piano</title>
    <meta name="description" content="¡Siente el Vínculo Musical que Une Nuestros Corazones en Todo el Mundo!">
    <meta name="keywords" content="clases de musica, clases de piano, piano, clases online de piano, escuela de piano">
    <meta name="author" content="Melodías Unidas">
    <link rel="icon" href="./images/logo/iconoround.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="./images/logo/iconoround.png">
    <link rel="canonical" href="https://www.melodiasunidas.com">
    <link href="./src/css/main.css" rel="stylesheet" />
    <link href="./src/css/aos-master/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" defer />
    <link href="./src/output_v1.css" rel="stylesheet" defer />
</head>
<?php
$pagina = "nosotros";
?>

<body>
    <!-- Encabezado -->
    <?php include("header.php") ?>

    <!-- Portada -->
    <section class="flex bg-black/30 h-[30vh] sm:h-[50vh] lg:h-[70vh] xl:h-[85vh]">
        <img src="./images/nuestroprofe.webp" alt="portadanosotros" class="w-full object-cover">
    </section>

    <!-- NUestro Profesor - Mobile -->
    <section class="flex p-8 pt-14 w-full justify-center items-center flex-col gap-4 mb-6 sm:px-16 lg:hidden">
        <h2 class="text-2xl font-medium mb-2 font-['Oswald']">Nuestro Profesor</h2>
        <div class="flex justify-start items-center w-full gap-1" data-aos="fade-right" data-aos-duration="1000">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-primary-color">
                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
            </svg>
            <h3 class="font-medium text-start w-full font-['Oswald']">Juan Carlos Salazar Rico</h3>
        </div>
        <p class="text-[12px] text-justify">
            Inicié mi travesía musical a la edad de 8 años, con profesores que hicieron crecer mi amor por la música. Mi formación se vio profundamente enriquecida gracias a mis estudios en Roma con el maestro Sasha Bajcic, cuyo enfoque y técnica han sido fundamentales en mi desarrollo artístico. Gracias a la guía de Verónica Metakovskaia, desarrollándome bajo la influencia de la reconocida escuela rusa de piano, el Conservatorio Adolfo Salazar me otorgó el Título de Grado Profesional en Piano, consolidando así mi formación académica.
        </p>
        <p class="text-[12px] text-justify">
            Como profesor, diseño clases personalizadas para adaptarme a las necesidades únicas de cada alumno, fomentando en ellos la confianza y la pasión por la música. Con más de tres décadas de experiencia en el piano y doce años dedicados a la enseñanza, participo activamente en talleres y seminarios para enriquecer la comunidad musical. Mi objetivo es crear un entorno inspirador donde cada alumno pueda descubrir su lugar en la música y desarrollar plenamente su potencial artístico.
        </p>
        <div class="flex w-[200px] h-[200px] mt-2 rounded-full" data-aos="fade-up" data-aos-duration="1000">
            <img src="./images/profesorjuancarlos.webp" alt="Nuestro Profe" title="Nuestro Profe" srcset="" class="object-cover rounded-full w-[200px] h-[200px]" loading="lazy">
        </div>
    </section>

    <!-- NUestro Profesor - Desktop-->
    <section class="hidden lg:flex p-8 py-16 w-full justify-center items-center flex-col gap-4 mb-6 sm:px-16 lg:px-48">
        <h2 class="text-3xl font-medium mb-4 font-['Oswald']">Nuestro Profesor</h2>
        <div class="flex flex-row gap-8 max-px-16 xl:max-w-[1920px]">
            <div class="flex flex-col">
                <div class="flex justify-start items-center w-full gap-1 mb-6" data-aos="fade-right" data-aos-duration="1000">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-primary-color">
                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                    </svg>
                    <h3 class="font-medium text-start w-full font-['Oswald'] text-xl">Juan Carlos Salazar Rico</h3>
                </div>
                <p class="text-[14px] text-justify">
                    Inicié mi travesía musical a la edad de 8 años, con profesores que hicieron crecer mi amor por la música. Mi formación se vio profundamente enriquecida gracias a mis estudios en Roma con el maestro Sasha Bajcic, cuyo enfoque y técnica han sido fundamentales en mi desarrollo artístico. Gracias a la guía de Verónica Metakovskaia, desarrollándome bajo la influencia de la reconocida escuela rusa de piano, el Conservatorio Adolfo Salazar me otorgó el Título de Grado Profesional en Piano, consolidando así mi formación académica.
                </p>
                <p class="text-[14px] text-justify mt-4">
                    Como profesor, diseño clases personalizadas para adaptarme a las necesidades únicas de cada alumno, fomentando en ellos la confianza y la pasión por la música. Con más de tres décadas de experiencia en el piano y doce años dedicados a la enseñanza, participo activamente en talleres y seminarios para enriquecer la comunidad musical. Mi objetivo es crear un entorno inspirador donde cada alumno pueda descubrir su lugar en la música y desarrollar plenamente su potencial artístico.
                </p>
            </div>
            <div class="flex w-full flex-col justify-center items-center gap-4">
                <div class="flex w-[300px] h-[300px] mt-2 rounded-full" data-aos="fade-up" data-aos-duration="1000">
                    <img src="./images/profesorjuancarlos.jpeg" alt="Nuestro Profe" title="Nuestro Profe" class="object-cover rounded-full w-[300px] h-[300px]" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Mi formación -->
    <section class="flex p-8 py-16 w-full justify-center items-center flex-col gap-8 bg-[#272727] mt-8 sm:px-32 lg:px-16 lg:gap-12 lg:py-24">
        <h3 class="text-white text-2xl font-['Oswald'] lg:text-4xl">Mi formación</h3>
        <div class="flex flex-col gap-4 lg:px-32">
            <p class="flex text-[12px] text-white text-justify lg:text-sm">
                Este conocimiento es el tesoro que tengo el privilegio de compartir contigo. Desde las majestuosas composiciones de Mozart hasta los ritmos vibrantes del jazz y los acordes que marcan épocas en el rock, te guiaré con maestría a través de este vasto universo musical.
                Mi compromiso va más allá de las teclas del piano; es contigo, en cada paso de tu viaje musical. Ya sea que sueñes con conquistar el conservatorio, superar exámenes oficiales o simplemente explorar la música como un regalo diario, estoy aquí para inspirarte y brindarte una educación de la más alta calidad. ¡Juntos haremos que tu música cobre vida!
            </p>
        </div>
        <div class="flex flex-col gap-4 sm:flex-row sm:gap-8 sm:justify-between sm:w-full lg:justify-start lg:px-32">
            <div class="flex gap-2 flex-col">
                <h5 class="text-primary-color text-sm lg:text-xl">
                    GRADO ELEMENTAL (4 AÑOS)
                </h5>
                <ul class="text-white pl-5">
                    <li class="list-disc text-[12px] sm:text-sm"><span class="font-bolder sm:text-base">Piano</span> : 4 años</li>
                    <li class="list-disc text-[12px] sm:text-sm"><span class="font-bolder sm:text-base">Lenguaje musical: </span> 4 años</li>
                    <li class="list-disc text-[12px] sm:text-sm"><span class="font-bolder sm:text-base">Coro: </span> 4 años</li>
                    <li class="list-disc text-[12px] sm:text-sm"><span class="font-bolder sm:text-base">Conjunto: </span> 2 años</li>
                </ul>
            </div>
            <div class="flex gap-2 flex-col">
                <h5 class="text-primary-color text-sm lg:text-xl">
                    GRADO PROFESIONAL (6 AÑOS)
                </h5>
                <ul class="text-white pl-5">
                    <li class="list-disc text-[12px] sm:text-sm"><span class="font-bolder sm:text-base">Piano</span> : 6 años</li>
                    <li class="list-disc text-[12px] sm:text-sm"><span class="font-bolder sm:text-base">Lenguaje musical: </span> 2 años</li>
                    <li class="list-disc text-[12px] sm:text-sm"><span class="font-bolder sm:text-base">Música de cámara: </span> 4 años</li>
                    <li class="list-disc text-[12px] sm:text-sm"><span class="font-bolder sm:text-base">Conjunto: </span> 2 años</li>
                    <li class="list-disc text-[12px] sm:text-sm"><span class="font-bolder sm:text-base">Armonía: </span> 3 años</li>
                    <li class="list-disc text-[12px] sm:text-sm"><span class="font-bolder sm:text-base">Acompañamiento: </span> 2 años</li>
                    <li class="list-disc text-[12px] sm:text-sm"><span class="font-bolder sm:text-base">Análisis musical: </span> 2 años</li>
                    <li class="list-disc text-[12px] sm:text-sm"><span class="font-bolder sm:text-base">Historia de la música: </span> 2 años</li>
                    <li class="list-disc text-[12px] sm:text-sm"><span class="font-bolder sm:text-base">Estética: </span> 1 año</li>
                </ul>
            </div>
        </div>
        <h3 class="text-white text-2xl font-['Oswald'] lg:text-4xl">Mis Títulos</h3>
        <div class="flex flex-wrap w-full gap-4 lg:px-32 justify-center sm:justify-between lg:justify-between xl:justify-evenly">
            <div class="h-[200px] w-[250px] sm:w-[225px] overflow-hidden relative flex justify-center items-center" onclick="viewCertificado('certificado1')">
                <img src="./images/certificados/certificado1.jpeg" class="cursor-pointer" alt="Ver Certificado" title="Ver Certificado">
                <div class="z-20 w-full h-full bg-transparent absolute text-center flex justify-center items-center cursor-pointer text-black/0 hover:text-white hover:bg-black/80 transition-all duration-300">
                    <span class="font-semibold">Ver Certificado</span>
                </div>
            </div>
            <div class="h-[200px] w-[250px] sm:w-[225px] overflow-hidden relative flex justify-center items-center" onclick="viewCertificado('certificado2')">
                <img src="./images/certificados/certificado2.jpeg" class="cursor-pointer" alt="Ver Certificado" title="Ver Certificado">
                <div class="z-20 w-full h-full bg-transparent absolute text-center flex justify-center items-center cursor-pointer text-black/0 hover:text-white hover:bg-black/80 transition-all duration-300">
                    <span class="font-semibold">Ver Certificado</span>
                </div>
            </div>
            <div class="h-[200px] w-[250px] sm:w-[225px] overflow-hidden relative flex justify-center items-center" onclick="viewCertificado('certificado3')">
                <img src="./images/certificados/certificado3.jpeg" class="cursor-pointer" alt="Ver Certificado" title="Ver Certificado">
                <div class="z-20 w-full h-full bg-transparent absolute text-center flex justify-center items-center cursor-pointer text-black/0 hover:text-white hover:bg-black/80 transition-all duration-300">
                    <span class="font-semibold">Ver Certificado</span>
                </div>
            </div>
            <div class="h-[200px] w-[250px] sm:w-[225px] overflow-hidden relative flex justify-center items-center" onclick="viewCertificado('certificado4')">
                <img src="./images/certificados/certificado4.jpeg" class="cursor-pointer" alt="Ver Certificado" title="Ver Certificado">
                <div class="z-20 w-full h-full bg-transparent absolute text-center flex justify-center items-center cursor-pointer text-black/0 hover:text-white hover:bg-black/80 transition-all duration-300">
                    <span class="font-semibold">Ver Certificado</span>
                </div>
            </div>
            <div class="h-[200px] w-[250px] sm:w-[225px] overflow-hidden relative flex justify-center items-center" onclick="viewCertificado('certificado5')">
                <img src="./images/certificados/certificado5.jpeg" class="cursor-pointer" alt="Ver Certificado" title="Ver Certificado">
                <div class="z-20 w-full h-full bg-transparent absolute text-center flex justify-center items-center cursor-pointer text-black/0 hover:text-white hover:bg-black/80 transition-all duration-300">
                    <span class="font-semibold">Ver Certificado</span>
                </div>
            </div>
            <div class="h-[200px] w-[250px] sm:w-[225px] overflow-hidden relative flex justify-center items-center" onclick="viewCertificado('certificado6')">
                <img src="./images/certificados/certificado6.jpeg" class="cursor-pointer" alt="Ver Certificado" title="Ver Certificado">
                <div class="z-20 w-full h-full bg-transparent absolute text-center flex justify-center items-center cursor-pointer text-black/0 hover:text-white hover:bg-black/80 transition-all duration-300">
                    <span class="font-semibold">Ver Certificado</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Mi enfoque pedagogico -->
    <section class="flex p-8 pt-14 w-full justify-center items-center flex-col gap-6 sm:px-16 lg:px-32 xl:px-48 xl:pt-20">
        <h5 class="text-xl font-['Oswald'] text-center lg:text-2xl xl:text-3xl">
            Mi enfoque pedagógico
        </h5>
        <p class="flex overflow-y-auto max-h-[300px] text-[12px] text-justify lg:text-sm xl:text-base">
            Alta experiencia como docente. A lo largo de más de 12 años, he tenido el privilegio de formar a personas de todas las edades con mis conocimientos musicales.
            Mi enfoque esencialmente consiste en adaptarme a las necesidades de mis alumnos, independientemente de su nivel de conocimiento musical.
            <br>
            He tenido la satisfacción de guiar a alumnos hacia la admisión en conservatorios, utilizando enfoques personalizados para convertir los exámenes de ingreso en un proceso más ameno y efectivo.
            Mi método educativo se caracteriza por su flexibilidad y personalización. No impongo una selección rígida de piezas, sino que permito a los alumnos elegir entre una variedad de estilos musicales, combinando elementos clásicos y modernos.
            En mi enseñanza, abordo aspectos como la relajación y la gestión de la ansiedad escénica, proporcionando herramientas para que mis alumnos se sientan cómodos al interpretar frente a otros. Busco asegurarme de que tus dedos adquieran la técnica adecuada.
            Ofrezco un enfoque integral en lenguaje musical, teoría y armonía, siguiendo un enfoque de equilibrio entre teoría y práctica, adapto la proporción según las preferencias individuales.
            <br>
            En resumen, mi objetivo es compartir la emoción que experimento al tocar música, a través de un enfoque accesible y personalizado.
            Encaro la música como un proceso gradual y agradable, incentivando a los estudiantes a seguir sus aspiraciones musicales con confianza.
            Animo a explorar tus metas musicales, ya que mi objetivo es convertir cada paso en una experiencia gratificante.
        </p>
    </section>

    <!-- Formándose con los mejores -->
    <section class="flex p-8 pb-16 w-full justify-center items-center flex-col gap-6 xl:gap-8 sm:px-16 lg:px-32 xl:px-48 lg:py-16">
        <h4 class="text-xl font-['Oswald'] text-center sm:text-2xl lg:text-3xl">Formándome con los mejores</h4>
        <div class="flex w-full rounded-full justify-center">
            <img src="./images/certificados/profe_veronica.jpeg" alt="imagen profesora" title="imagen profesora" class="rounded-full w-[160px] h-[160px] lg:w-[200px] lg:h-[200px] object-cover" data-aos="zoom-in-up" data-aos-duration="1000">
        </div>
        <div class="w-full">
            <h5 class="text-sm text-center sm:text-base lg:text-lg" data-aos="fade-right" data-aos-duration="1000"><b>Profesora:</b> Veronika Metakovskaya</h5>
        </div>
        <div class="w-full flex flex-col gap-6 lg:gap-10">
            <div class="flex flex-col gap-4 text-[12px]">
                <div class="flex gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 lg:size-12 text-[#ffcb01]">
                        <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                        <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                        <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                    </svg>
                    <h6 class="font-semibold sm:text-sm lg:text-base">
                        Formación pedagógica
                    </h6>
                </div>
                <p class="text-justify overflow-y-auto max-h-[200px] lg:text-sm">
                    Nacida el 7 de marzo de 1956 en Moscú, Rusia, Verónika Metakovskaya mostró un talento excepcional desde temprana edad. A los 7 años ingresó al departamento de piano de la Escuela Central Especial de Música del Conservatorio Estatal Tchaykovsky de Moscú, bajo la tutela de la renombrada profesora de piano, T. Bobovich. Tras 11 años de dedicación, se graduó de esta institución, donde también formaron músicos de renombre mundial como V. Ashkenazi, V. Gornostaeva, A. Gavrilov, entre otros.
                    <br>
                    Continuó su formación pianística en el Conservatorio Estatal de Educación Superior Glinka de Nizhni Nóvgorod, bajo la guía de la prestigiosa profesora catedrática de piano O. Vinogradova, discípula de destacados pianistas rusos y mundiales, como Ya. Flier y K. Igumnov. Obtuvo el título académico de Máster en Música con distinciones en las áreas de Artista Solista, Artista de Conjunto de Cámara, Acompañante y Profesora de Piano de Educación Superior.
                </p>
            </div>
            <div class="flex flex-col gap-4 text-[12px]">
                <div class="flex gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 lg:size-12 text-[#ffcb01]">
                        <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                        <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                        <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                    </svg>
                    <h6 class="font-semibold sm:text-sm lg:text-base">
                        Actividad pedagógica
                    </h6>
                </div>
                <p class="text-justify overflow-y-auto max-h-[200px] lg:text-sm">
                    Con una trayectoria de 17 años como profesora de piano en el Conservatorio Pedagógico Estatal de Música de Moscú, Verónika Metakovskaya ha sido reconocida con 5 Diplomas de Honor del Ministerio de Cultura de Moscú por los destacados logros de sus estudiantes en diversas salas de conciertos de la capital rusa. Muchos de sus discípulos han continuado su formación en prestigiosas instituciones como el Conservatorio Estatal Tchaykovsky de Moscú y la Universität für Musik und darstellende Kunst Graz en Austria.
                    <br>
                    Desde hace dos décadas, Verónika ejerce como profesora de piano en el Centro Superior de Enseñanza Musical «Progreso Musical» de Madrid.
                </p>
            </div>
            <div class="flex flex-col gap-4 text-[12px]">
                <div class="flex gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 lg:size-12 text-[#ffcb01]">
                        <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                        <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                        <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                    </svg>
                    <h6 class="font-semibold sm:text-sm lg:text-base">
                        Participación de estudiantes
                        <br class="sm:hidden"> en concursos internacionales
                    </h6>
                </div>
                <p class="text-justify overflow-y-auto max-h-[200px] lg:text-sm">
                    Los éxitos de sus estudiantes en competiciones internacionales son un testimonio de la excelencia de su enseñanza: Victoria Wang obtuvo el Primer Premio en el Concurso Internacional de Piano de Maestros Intérpretes Schubert en Beijing (2015), mientras que Mijail Saprichev ganó el Segundo Premio en el Concurso Internacional de Piano Santa Cecilia en Segovia (2016) y el Primer Premio en el Concurso Internacional de Piano Gran Clavier en Alcalá (2019).
                </p>
            </div>
            <div class="flex flex-col gap-4 text-[12px]">
                <div class="flex gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 lg:size-12 text-[#ffcb01]">
                        <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                        <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                        <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                    </svg>
                    <h6 class="font-semibold sm:text-sm lg:text-base">
                        Actividad de concierto
                    </h6>
                </div>
                <p class="text-justify overflow-y-auto max-h-[200px] lg:text-sm">
                    Además de su labor pedagógica, Verónika Metakovskaya ha sido miembro de la Filarmónica de Maestros Intérpretes de Moscú durante más de una década. Su destacada trayectoria como pianista solista le valió un Diploma de Honor del Ministerio de Cultura de Moscú por su contribución a la escena concertística. Asimismo, su habilidad como pianista acompañante fue reconocida con un Diploma de Honor del Ministerio de Cultura de Rusia. Participó en el Concurso de Coros Infantiles de la Comunidad de Madrid, contribuyendo al éxito del coro ganador, lo que le valió otro Diploma de Honor.
                </p>
            </div>
            <div class="flex flex-col gap-4 text-[12px]">
                <div class="flex gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 lg:size-12 text-[#ffcb01]">
                        <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                        <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                        <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                    </svg>
                    <h6 class="font-semibold sm:text-sm lg:text-base">
                        Libros editados
                    </h6>
                </div>
                <p class="text-justify overflow-y-auto max-h-[200px] lg:text-sm">
                    Autora de la serie de libros para niños «Clases de Piano y Lenguaje Musical en Imágenes», Verónika Metakovskaya ha creado una invaluable herramienta educativa. Además, su libro «El Arte de Tocar el Piano: Sugerencias Prácticas» es una referencia esencial para estudiantes y profesores de piano de educación Profesional y Superior.
                </p>
            </div>
        </div>
    </section>

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

    <!-- Certificados popup -->
    <section class="hidden fixed overflow-auto flex justify-center items-center min-w-full min-h-full z-50 top-0 p-4 bg-black/70" id="popupCertificados">
        <div class="w-[275px] h-[500px] sm:w-[500px] sm:h-[750px] xl:w-[550px] xl:h-[825px]">
            <div class="w-full flex justify-end items-center mb-1">
                <button class="text-center text-gray-700 px-2 py-1 bg-secondary-color" id="btn-close-popup">Cerrar</button>
            </div>
            <img src="./images/certificados/certificado1.jpeg" alt="certificado1" title="certificado1" class="hidden" id="image-certificado1">
            <img src="./images/certificados/certificado2.jpeg" alt="certificado2" title="certificado2" class="hidden" id="image-certificado2">
            <img src="./images/certificados/certificado3.jpeg" alt="certificado3" title="certificado3" class="hidden" id="image-certificado3">
            <img src="./images/certificados/certificado4.jpeg" alt="certificado4" title="certificado4" class="hidden" id="image-certificado4">
            <img src="./images/certificados/certificado5.jpeg" alt="certificado5" title="certificado5" class="hidden" id="image-certificado5">
            <img src="./images/certificados/certificado6.jpeg" alt="certificado6" title="certificado6" class="hidden" id="image-certificado6">
        </div>
    </section>

    <!-- Pie de Pagina -->
    <?php include("footer.php") ?>

    <script src="src/js/main.js"></script>
    <script src="./src/css/aos-master/dist/aos.js"></script>

</body>

</html>