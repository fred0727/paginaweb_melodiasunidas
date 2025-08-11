<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melodías Unidas | José Antonio Aguilar González</title>
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
    <style>
        /* Scrollbar personalizado */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #2d3436;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #636e72;
        }

        /* Efectos hover para íconos de herramientas */
        .tech-icon:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        /* Animación de gradiente */
        .gradient-animate {
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<?php
$pagina = "nosotros";
?>

<body>
    <!-- Encabezado -->
    <?php include("header.php") ?>

    <!-- Portada -->
    <section class="relative flex bg-black/30 h-[50vh] sm:h-[60vh] lg:h-[80vh] xl:h-[85vh] overflow-hidden">
        <img src="./images/nuestroprofe.webp" alt="José Antonio Aguilar González - Profesor de Música" class="w-full h-full object-cover">
        
        <!-- Overlay con gradiente -->
        <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-primary-color/40 to-black/80"></div>
        
        <!-- Contenido sobre la imagen -->
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-6 lg:px-12">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-white font-['Oswald'] mb-6 leading-tight drop-shadow-lg" data-aos="fade-up" data-aos-duration="1000">
                    José Antonio
                    <span class="block text-secondary-color">Aguilar González</span>
                </h1>
                <div class="w-32 h-1 bg-secondary-color mx-auto rounded-full mb-6" data-aos="fade-up" data-aos-delay="200"></div>
                <p class="text-xl lg:text-2xl text-white/90 font-light leading-relaxed drop-shadow-md" data-aos="fade-up" data-aos-delay="400">
                    Especialista en <span class="font-semibold text-secondary-color">Música, Canto y Producción Musical</span>
                </p>
                <p class="text-lg lg:text-xl text-white/80 mt-4 font-light" data-aos="fade-up" data-aos-delay="600">
                    "La música no se estudia, se disfruta"
                </p>
            </div>
        </div>

        <!-- Indicador de scroll -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-white/70">
                <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
            </svg>
        </div>
    </section>

    <!-- Nuestro Profesor - Mobile -->
    <section class="lg:hidden bg-gradient-to-br from-white to-gray-50 py-16 px-6">
        <div class="max-w-4xl mx-auto">
            <!-- Título principal -->
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 font-['Oswald'] mb-4">Nuestro Profesor</h2>
                <div class="w-20 h-1 bg-secondary-color mx-auto rounded-full"></div>
            </div>

            <!-- Card principal del profesor -->
            <div class="bg-white rounded-3xl shadow-xl p-8 mb-8 border border-gray-100" data-aos="fade-up" data-aos-duration="800">
                <!-- Foto y nombre -->
                <div class="flex flex-col items-center mb-8">
                    <div class="relative mb-6">
                        <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-secondary-color shadow-lg">
                            <img src="./images/profes/joseantonio.webp" alt="José Antonio Aguilar González" title="José Antonio Aguilar González" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-2 -right-2 bg-primary-color rounded-full p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 font-['Oswald'] text-center">José Antonio Aguilar González</h3>
                    <p class="text-primary-color font-semibold mt-2">Especialista en Música, Canto y Producción</p>
                </div>

                <!-- Descripción principal -->
                <div class="space-y-4 text-gray-700 leading-relaxed">
                    <p class="text-base">
                        ¡Con José Antonio no solo aprendes música, la vives! Este crack de la enseñanza lleva años compartiendo su pasión por la música, el canto y la producción musical. Para él, cada clase es una fiesta creativa donde los alumnos descubren su propio ritmo y estilo.
                    </p>
                </div>
            </div>

            <!-- Cards de experiencia -->
            <div class="grid gap-6 mb-8">
                <!-- Academia Momentos -->
                <div class="bg-gradient-to-r from-primary-color/5 to-secondary-color/5 rounded-2xl p-6 border border-gray-100" data-aos="fade-right" data-aos-delay="200">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="bg-primary-color rounded-full p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                            </svg>
                        </div>
                        <h4 class="font-bold text-gray-800">Academia Momentos</h4>
                    </div>
                    <p class="text-sm text-gray-600">
                        Fue el alma de la dirección académica, organizando todo como un maestro del backstage mientras daba clases que hacían que la teoría y la práctica fueran tan divertidas como una buena jam session.
                    </p>
                </div>

                <!-- Universidad Anáhuac -->
                <div class="bg-gradient-to-r from-secondary-color/5 to-primary-color/5 rounded-2xl p-6 border border-gray-100" data-aos="fade-left" data-aos-delay="300">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="bg-secondary-color rounded-full p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-primary-color">
                                <path d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443a55.381 55.381 0 0 1 5.25 2.882V15" />
                            </svg>
                        </div>
                        <h4 class="font-bold text-gray-800">Universidad Anáhuac Puebla</h4>
                    </div>
                    <p class="text-sm text-gray-600">
                        Fundó una compañía de canto, desarrollando programas innovadores que conectaban la teoría musical con la práctica vocal profesional.
                    </p>
                </div>
            </div>

            <!-- Historia de la Música -->
            <div class="bg-white rounded-2xl shadow-lg p-6 mb-8 border border-gray-100" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-gradient-to-r from-primary-color to-secondary-color rounded-full p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                            <path d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-gray-800">Historia de la Música</h4>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed">
                    José Antonio es un auténtico crack en Historia de la Música. Sus alumnos no solo descubren cómo surgieron las obras más emblemáticas, sino que aprenden a entender la música como un reflejo de cada época. Con él, la historia no es un rollo; es una fuente de inspiración.
                </p>
            </div>

            <!-- Herramientas tecnológicas -->
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-6 text-white" data-aos="fade-up" data-aos-delay="500">
                <h4 class="text-lg font-bold mb-4 text-center">Herramientas de Producción</h4>
                <div class="flex justify-center items-center gap-4">
                    <div class="bg-white/10 rounded-xl p-3 tech-icon">
                        <span class="text-secondary-color font-bold text-sm">Logic Pro</span>
                    </div>
                    <div class="bg-white/10 rounded-xl p-3 tech-icon">
                        <span class="text-secondary-color font-bold text-sm">Cuerda</span>
                    </div>
                    <div class="bg-white/10 rounded-xl p-3 tech-icon">
                        <span class="text-secondary-color font-bold text-sm">Percusión</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nuestro Profesor - Desktop-->
    <section class="hidden lg:block bg-gradient-to-br from-white to-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-8 lg:px-12">
            <!-- Título principal -->
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 font-['Oswald'] mb-6">Nuestro Profesor</h2>
                <div class="w-24 h-1 bg-secondary-color mx-auto rounded-full"></div>
            </div>

            <!-- Contenido principal -->
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <!-- Columna izquierda - Información -->
                <div class="space-y-8">
                    <!-- Card del profesor -->
                    <div class="bg-white rounded-3xl shadow-xl p-8 border border-gray-100" data-aos="fade-right" data-aos-duration="1000">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="bg-primary-color rounded-full p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-800 font-['Oswald']">José Antonio Aguilar González</h3>
                                <p class="text-primary-color font-semibold">Especialista en Música, Canto y Producción</p>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed text-base">
                            ¡Con José Antonio no solo aprendes música, la vives! Este crack de la enseñanza lleva años compartiendo su pasión por la música, el canto y la producción musical. Para él, cada clase es una fiesta creativa donde los alumnos descubren su propio ritmo y estilo.
                        </p>
                    </div>

                    <!-- Experiencia profesional -->
                    <div class="grid gap-6">
                        <!-- Academia Momentos -->
                        <div class="bg-gradient-to-r from-primary-color/5 to-secondary-color/5 rounded-2xl p-6 border border-gray-100" data-aos="fade-right" data-aos-delay="200">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="bg-primary-color rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                        <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-800 text-lg">Academia Momentos</h4>
                            </div>
                            <p class="text-gray-600">
                                Fue el alma de la dirección académica, organizando todo como un maestro del backstage mientras daba clases que hacían que la teoría y la práctica fueran tan divertidas como una buena jam session.
                            </p>
                        </div>

                        <!-- Universidad Anáhuac -->
                        <div class="bg-gradient-to-r from-secondary-color/5 to-primary-color/5 rounded-2xl p-6 border border-gray-100" data-aos="fade-right" data-aos-delay="300">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="bg-secondary-color rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-primary-color">
                                        <path d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443a55.381 55.381 0 0 1 5.25 2.882V15" />
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-800 text-lg">Universidad Anáhuac Puebla</h4>
                            </div>
                            <p class="text-gray-600">
                                Fundó una compañía de canto, desarrollando programas innovadores que conectaban la teoría musical con la práctica vocal profesional.
                            </p>
                        </div>
                    </div>

                    <!-- Historia de la Música -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100" data-aos="fade-right" data-aos-delay="400">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="bg-gradient-to-r from-primary-color to-secondary-color rounded-full p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                                    <path d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" />
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800">Historia de la Música</h4>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            José Antonio es un auténtico crack en Historia de la Música. Sus alumnos no solo descubren cómo surgieron las obras más emblemáticas, sino que aprenden a entender la música como un reflejo de cada época. Con él, la historia no es un rollo; es una fuente de inspiración.
                        </p>
                    </div>
                </div>

                <!-- Columna derecha - Imagen y herramientas -->
                <div class="space-y-8">
                    <!-- Imagen del profesor -->
                    <div class="flex justify-center" data-aos="fade-left" data-aos-duration="1000">
                        <div class="relative">
                            <div class="w-80 h-80 rounded-full overflow-hidden border-4 border-secondary-color shadow-2xl">
                                <img src="./images/profes/joseantonio.webp" alt="José Antonio Aguilar González" title="José Antonio Aguilar González" class="w-full h-full object-cover">
                            </div>
                            <!-- Badge decorativo -->
                            <div class="absolute -bottom-4 -right-4 bg-primary-color rounded-full p-4 shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-white">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Herramientas y especialidades -->
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 text-white" data-aos="fade-left" data-aos-delay="200">
                        <h4 class="text-xl font-bold mb-6 text-center text-secondary-color">Herramientas & Especialidades</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white/10 rounded-xl p-4 text-center tech-icon">
                                <div class="text-secondary-color font-bold text-lg mb-1">Logic Pro</div>
                                <div class="text-white/70 text-xs">DAW Profesional</div>
                            </div>
                            <div class="bg-white/10 rounded-xl p-4 text-center tech-icon">
                                <div class="text-secondary-color font-bold text-lg mb-1">Cuerda</div>
                                <div class="text-white/70 text-xs">Instrumentos</div>
                            </div>
                            <div class="bg-white/10 rounded-xl p-4 text-center tech-icon">
                                <div class="text-secondary-color font-bold text-lg mb-1">Percusión</div>
                                <div class="text-white/70 text-xs">Ritmo & Beat</div>
                            </div>
                            <div class="bg-white/10 rounded-xl p-4 text-center tech-icon">
                                <div class="text-secondary-color font-bold text-lg mb-1">Canto</div>
                                <div class="text-white/70 text-xs">Técnica Vocal</div>
                            </div>
                        </div>
                    </div>

                    <!-- FreshPots Records -->
                    <div class="bg-gradient-to-r from-primary-color/10 to-secondary-color/10 rounded-2xl p-6 border border-gray-200" data-aos="fade-left" data-aos-delay="300">
                        <h4 class="font-bold text-gray-800 text-lg mb-3">FreshPots Records</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Se dedica a descubrir y lanzar artistas emergentes, convirtiendo ideas en temazos que no puedes dejar de escuchar. El cerebro detrás de proyectos musicales súper frescos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Especialidades Musicales -->
    <section class="bg-gradient-to-br from-gray-900 via-primary-color to-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <!-- Título principal -->
            <div class="text-center mb-16">
                <h3 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-white font-['Oswald'] mb-4">Especialidades</h3>
                <div class="w-24 h-1 bg-secondary-color mx-auto rounded-full mb-6"></div>
                <p class="text-xl text-white/80 max-w-3xl mx-auto">
                    Dominando múltiples áreas de la música con pasión y expertise profesional
                </p>
            </div>

            <!-- Grid de especialidades -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Canto -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="bg-secondary-color rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-primary-color">
                                <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-white font-['Oswald']">Canto y Técnica Vocal</h4>
                    </div>
                    <p class="text-white/90 leading-relaxed">
                        Especialista en técnica vocal profesional, fundador de una compañía de canto en la Universidad Anáhuac Puebla con métodos innovadores de enseñanza.
                    </p>
                </div>

                <!-- Producción Musical -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="bg-secondary-color rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-primary-color">
                                <path d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-white font-['Oswald']">Producción Musical</h4>
                    </div>
                    <p class="text-white/90 leading-relaxed">
                        Experto en Logic Pro y producción digital, creando proyectos musicales únicos desde la composición hasta la masterización final.
                    </p>
                </div>

                <!-- Historia de la Música -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="bg-secondary-color rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-primary-color">
                                <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-white font-['Oswald']">Historia de la Música</h4>
                    </div>
                    <p class="text-white/90 leading-relaxed">
                        Dominio excepcional de la historia musical, enseñando cada época como una fuente de inspiración que conecta emocionalmente con los estudiantes.
                    </p>
                </div>

                <!-- Instrumentos de Cuerda -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="bg-secondary-color rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-primary-color">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-white font-['Oswald']">Instrumentos de Cuerda</h4>
                    </div>
                    <p class="text-white/90 leading-relaxed">
                        Dominio técnico de múltiples instrumentos de cuerda, desarrollando habilidades interpretativas y expresivas en sus estudiantes.
                    </p>
                </div>

                <!-- Percusiones -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300" data-aos="fade-up" data-aos-delay="500">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="bg-secondary-color rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-primary-color">
                                <path fill-rule="evenodd" d="M1.371 8.143c5.858-5.857 15.356-5.857 21.213 0a.75.75 0 0 1 0 1.061l-.53.53a.75.75 0 0 1-1.06 0c-4.98-4.979-13.053-4.979-18.032 0a.75.75 0 0 1-1.06 0l-.53-.53a.75.75 0 0 1 0-1.06Zm3.182 3.182c4.1-4.1 10.749-4.1 14.85 0a.75.75 0 0 1 0 1.061l-.53.53a.75.75 0 0 1-1.062 0 8.25 8.25 0 0 0-11.667 0 .75.75 0 0 1-1.06 0l-.53-.53a.75.75 0 0 1 0-1.06Zm3.204 3.182a6 6 0 0 1 8.486 0 .75.75 0 0 1 0 1.061l-.53.53a.75.75 0 0 1-1.061 0 3.75 3.75 0 0 0-5.304 0 .75.75 0 0 1-1.06 0l-.53-.53a.75.75 0 0 1 0-1.06Zm3.182 3.182a1.5 1.5 0 0 1 2.122 0 .75.75 0 0 1 0 1.061l-.53.53a.75.75 0 0 1-1.061 0l-.53-.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-white font-['Oswald']">Percusiones y Ritmo</h4>
                    </div>
                    <p class="text-white/90 leading-relaxed">
                        Especialista en instrumentos de percusión y desarrollo del sentido rítmico, base fundamental para cualquier expresión musical.
                    </p>
                </div>

                <!-- Dirección Académica -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300" data-aos="fade-up" data-aos-delay="600">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="bg-secondary-color rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-primary-color">
                                <path d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157l.001.003Z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-white font-['Oswald']">Dirección Académica</h4>
                    </div>
                    <p class="text-white/90 leading-relaxed">
                        Experiencia como director académico en la Academia Momentos, desarrollando programas educativos innovadores y efectivos.
                    </p>
                </div>
            </div>

            <!-- Proyectos destacados -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                <h3 class="text-3xl font-bold text-white font-['Oswald'] mb-8 text-center">Proyectos Destacados</h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-white/10 rounded-xl p-6 text-center">
                        <h4 class="text-lg font-bold text-secondary-color mb-2">FreshPots Records</h4>
                        <p class="text-white/80 text-sm">Sello discográfico</p>
                    </div>
                    <div class="bg-white/10 rounded-xl p-6 text-center">
                        <h4 class="text-lg font-bold text-secondary-color mb-2">Alquimia Soundlab</h4>
                        <p class="text-white/80 text-sm">Proyectos musicales</p>
                    </div>
                    <div class="bg-white/10 rounded-xl p-6 text-center">
                        <h4 class="text-lg font-bold text-secondary-color mb-2">Compañía de Canto</h4>
                        <p class="text-white/80 text-sm">Universidad Anáhuac</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Metodología de Enseñanza -->
    <section class="bg-gradient-to-br from-white to-gray-100 py-20">
        <div class="max-w-6xl mx-auto px-6 lg:px-12">
            <!-- Título -->
            <div class="text-center mb-16">
                <h5 class="text-4xl lg:text-5xl font-bold text-gray-800 font-['Oswald'] mb-4">
                    Metodología de Enseñanza
                </h5>
                <div class="w-24 h-1 bg-secondary-color mx-auto rounded-full mb-6"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Transformando el aprendizaje musical en una experiencia divertida y enriquecedora
                </p>
            </div>

            <!-- Contenido principal -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-12 border border-gray-100">
                <!-- Características destacadas -->
                <div class="grid md:grid-cols-3 gap-8 mb-12">
                    <div class="text-center">
                        <div class="bg-gradient-to-br from-primary-color to-primary-color/80 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 text-white">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 0 0-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634Zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 0 1-.189-.866c0-.298.059-.605.189-.866Zm2.023 6.828a.75.75 0 1 0-1.06-1.06 3.75 3.75 0 0 1-5.304 0 .75.75 0 0 0-1.06 1.06 5.25 5.25 0 0 0 7.424 0Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h6 class="text-xl font-bold text-gray-800 mb-2">Fiesta Creativa</h6>
                        <p class="text-gray-600 text-sm">Cada clase es una celebración de la creatividad</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-gradient-to-br from-secondary-color to-secondary-color/80 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 text-primary-color">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h6 class="text-xl font-bold text-gray-800 mb-2">Pasión Contagiosa</h6>
                        <p class="text-gray-600 text-sm">Enseñando con amor por cada nota musical</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-gradient-to-br from-primary-color to-primary-color/80 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 text-white">
                                <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                            </svg>
                        </div>
                        <h6 class="text-xl font-bold text-gray-800 mb-2">Historia Viva</h6>
                        <p class="text-gray-600 text-sm">Conectando épocas musicales con emociones</p>
                    </div>
                </div>

                <!-- Filosofía de enseñanza -->
                <div class="bg-gradient-to-r from-primary-color/5 to-secondary-color/5 rounded-2xl p-8 text-center">
                    <h4 class="text-2xl font-bold text-gray-800 mb-4">Su Filosofía</h4>
                    <p class="text-lg text-gray-700 leading-relaxed italic">
                        "Que aprender música sea un viaje lleno de buen rollo, risas y mucha pasión. Con José Antonio no hay formalidades aburridas, solo ganas de tocar, cantar, aprender y crear algo único. ¡La música no se estudia, se disfruta!"
                    </p>
                    <div class="mt-6">
                        <span class="text-primary-color font-bold text-lg">- José Antonio Aguilar González</span>
                    </div>
                </div>
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

    <!-- Pie de Pagina -->
    <?php include("footer.php") ?>

    <script src="src/js/main.js?v=20250810"></script>
    <script src="./src/css/aos-master/dist/aos.js"></script>

</body>

</html>