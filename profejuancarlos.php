<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melodías Unidas | Profe Juan Carlos</title>
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
        
        /* Estilos específicos para certificados */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(255, 203, 1, 0.7);
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 203, 1, 1);
        }
        
        @media (max-width: 1024px) {
            #popupCertificados.flex {
                display: flex !important;
            }
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
        <img src="./images/nuestroprofe.webp" alt="Juan Carlos Salazar Rico - Profesor de Piano" class="w-full h-full object-cover">
        
        <!-- Overlay con gradiente -->
        <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-primary-color/40 to-black/80"></div>
        
        <!-- Contenido sobre la imagen -->
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-6 lg:px-12">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-white font-['Oswald'] mb-6 leading-tight drop-shadow-lg" data-aos="fade-up" data-aos-duration="1000">
                    Juan Carlos
                    <span class="block text-secondary-color">Salazar Rico</span>
                </h1>
                <div class="w-32 h-1 bg-secondary-color mx-auto rounded-full mb-6" data-aos="fade-up" data-aos-delay="200"></div>
                <p class="text-xl lg:text-2xl text-white/90 font-light leading-relaxed drop-shadow-md" data-aos="fade-up" data-aos-delay="400">
                    Especialista en <span class="font-semibold text-secondary-color">Piano Clásico y Moderno</span>
                </p>
                <p class="text-lg lg:text-xl text-white/80 mt-4 font-light" data-aos="fade-up" data-aos-delay="600">
                    "30+ años conquistando el mundo musical"
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
                            <img src="./images/profesorjuancarlos.webp" alt="Juan Carlos Salazar Rico" title="Juan Carlos Salazar Rico" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-2 -right-2 bg-primary-color rounded-full p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 font-['Oswald'] text-center">Juan Carlos Salazar Rico</h3>
                    <p class="text-primary-color font-semibold mt-2">Especialista en Piano</p>
                </div>

                <!-- Descripción principal -->
                <div class="space-y-4 text-gray-700 leading-relaxed">
                    <p class="text-base">
                        Con más de 30 años de experiencia musical y 12 años dedicados a la enseñanza, Juan Carlos es un maestro que convierte cada lección en una aventura musical única.
                    </p>
                </div>
            </div>

            <!-- Cards de especialidades -->
            <div class="grid gap-6 mb-8">
                <!-- Piano Clásico -->
                <div class="bg-gradient-to-r from-primary-color/5 to-secondary-color/5 rounded-2xl p-6 border border-gray-100" data-aos="fade-right" data-aos-delay="200">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="bg-primary-color rounded-full p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                <path d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" />
                            </svg>
                        </div>
                        <h4 class="font-bold text-gray-800">Piano Clásico</h4>
                    </div>
                    <p class="text-sm text-gray-600">
                        Formación completa en conservatorio con grados elemental y profesional, dominando desde Mozart hasta las técnicas más avanzadas.
                    </p>
                </div>

                <!-- Control de Ansiedad -->
                <div class="bg-gradient-to-r from-secondary-color/5 to-primary-color/5 rounded-2xl p-6 border border-gray-100" data-aos="fade-left" data-aos-delay="300">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="bg-secondary-color rounded-full p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-primary-color">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 0 0-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634Zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 0 1-.189-.866c0-.298.059-.605.189-.866Zm2.023 6.828a.75.75 0 1 0-1.06-1.06 3.75 3.75 0 0 1-5.304 0 .75.75 0 0 0-1.06 1.06 5.25 5.25 0 0 0 7.424 0Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h4 class="font-bold text-gray-800">Control de Ansiedad</h4>
                    </div>
                    <p class="text-sm text-gray-600">
                        Técnicas especializadas para superar el miedo escénico y tocar con confianza absoluta en cualquier situación.
                    </p>
                </div>
            </div>

            <!-- Diversidad Musical -->
            <div class="bg-white rounded-2xl shadow-lg p-6 mb-8 border border-gray-100" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-gradient-to-r from-primary-color to-secondary-color rounded-full p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                            <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-gray-800">Diversidad Musical</h4>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Desde clásico hasta moderno: jazz, rock y mucho más. Juan Carlos adapta su enseñanza a todos los estilos musicales que quieras explorar.
                </p>
            </div>

            <!-- Herramientas pedagógicas -->
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-6 text-white" data-aos="fade-up" data-aos-delay="500">
                <h4 class="text-lg font-bold mb-4 text-center">Enfoque Pedagógico</h4>
                <div class="flex justify-center items-center gap-4">
                    <div class="bg-white/10 rounded-xl p-3 tech-icon">
                        <span class="text-secondary-color font-bold text-sm">Personalización</span>
                    </div>
                    <div class="bg-white/10 rounded-xl p-3 tech-icon">
                        <span class="text-secondary-color font-bold text-sm">Paciencia</span>
                    </div>
                    <div class="bg-white/10 rounded-xl p-3 tech-icon">
                        <span class="text-secondary-color font-bold text-sm">Excelencia</span>
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
                                <h3 class="text-2xl font-bold text-gray-800 font-['Oswald']">Juan Carlos Salazar Rico</h3>
                                <p class="text-primary-color font-semibold">Especialista en Piano</p>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed text-base">
                            Con más de 30 años de experiencia musical y 12 años dedicados a la enseñanza, Juan Carlos es un maestro que convierte cada lección en una aventura musical única.
                        </p>
                    </div>

                    <!-- Experiencia profesional -->
                    <div class="grid gap-6">
                        <!-- Formación en Roma -->
                        <div class="bg-gradient-to-r from-primary-color/5 to-secondary-color/5 rounded-2xl p-6 border border-gray-100" data-aos="fade-right" data-aos-delay="200">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="bg-primary-color rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                        <path d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443a55.381 55.381 0 0 1 5.25 2.882V15" />
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-800 text-lg">Formación en Roma</h4>
                            </div>
                            <p class="text-gray-600">
                                Estudios especializados con el maestro Sasha Bajcic, enriqueciendo su técnica y enfoque artístico con la tradición europea.
                            </p>
                        </div>

                        <!-- Escuela Rusa -->
                        <div class="bg-gradient-to-r from-secondary-color/5 to-primary-color/5 rounded-2xl p-6 border border-gray-100" data-aos="fade-right" data-aos-delay="300">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="bg-secondary-color rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-primary-color">
                                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-800 text-lg">Escuela Rusa de Piano</h4>
                            </div>
                            <p class="text-gray-600">
                                Influencia directa de Verónica Metakovskaia y la reconocida tradición pedagógica rusa, garantizando técnica y expresividad excepcionales.
                            </p>
                        </div>
                    </div>

                    <!-- Enfoque Pedagógico -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100" data-aos="fade-right" data-aos-delay="400">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="bg-gradient-to-r from-primary-color to-secondary-color rounded-full p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 0 0-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634Zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 0 1-.189-.866c0-.298.059-.605.189-.866Zm2.023 6.828a.75.75 0 1 0-1.06-1.06 3.75 3.75 0 0 1-5.304 0 .75.75 0 0 0-1.06 1.06 5.25 5.25 0 0 0 7.424 0Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800">Enfoque Pedagógico</h4>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Clases personalizadas que se adaptan a las necesidades únicas de cada alumno, fomentando la confianza y la pasión por la música a través de métodos probados.
                        </p>
                    </div>
                </div>

                <!-- Columna derecha - Imagen y herramientas -->
                <div class="space-y-8">
                    <!-- Imagen del profesor -->
                    <div class="flex justify-center" data-aos="fade-left" data-aos-duration="1000">
                        <div class="relative">
                            <div class="w-80 h-80 rounded-full overflow-hidden border-4 border-secondary-color shadow-2xl">
                                <img src="./images/profesorjuancarlos.webp" alt="Juan Carlos Salazar Rico" title="Juan Carlos Salazar Rico" class="w-full h-full object-cover">
                            </div>
                            <!-- Badge decorativo -->
                            <div class="absolute -bottom-4 -right-4 bg-primary-color rounded-full p-4 shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-white">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Especialidades -->
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 text-white" data-aos="fade-left" data-aos-delay="200">
                        <h4 class="text-xl font-bold mb-6 text-center text-secondary-color">Especialidades</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white/10 rounded-xl p-4 text-center tech-icon">
                                <div class="text-secondary-color font-bold text-lg mb-1">Piano Clásico</div>
                                <div class="text-white/70 text-xs">Tradición Europea</div>
                            </div>
                            <div class="bg-white/10 rounded-xl p-4 text-center tech-icon">
                                <div class="text-secondary-color font-bold text-lg mb-1">Jazz & Rock</div>
                                <div class="text-white/70 text-xs">Estilos Modernos</div>
                            </div>
                            <div class="bg-white/10 rounded-xl p-4 text-center tech-icon">
                                <div class="text-secondary-color font-bold text-lg mb-1">Conservatorio</div>
                                <div class="text-white/70 text-xs">Preparación</div>
                            </div>
                            <div class="bg-white/10 rounded-xl p-4 text-center tech-icon">
                                <div class="text-secondary-color font-bold text-lg mb-1">Control Ansiedad</div>
                                <div class="text-white/70 text-xs">Técnicas Avanzadas</div>
                            </div>
                        </div>
                    </div>

                    <!-- Años de experiencia -->
                    <div class="bg-gradient-to-r from-primary-color/10 to-secondary-color/10 rounded-2xl p-6 border border-gray-200" data-aos="fade-left" data-aos-delay="300">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-primary-color font-['Oswald']">30+</div>
                                <div class="text-sm text-gray-600">Años de experiencia</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-primary-color font-['Oswald']">12+</div>
                                <div class="text-sm text-gray-600">Años enseñando</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Su formación - Diseño mejorado -->
    <section class="bg-gradient-to-br from-gray-900 via-primary-color to-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <!-- Título principal -->
            <div class="text-center mb-16">
                <h3 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-white font-['Oswald'] mb-4">Su Formación</h3>
                <div class="w-24 h-1 bg-secondary-color mx-auto rounded-full"></div>
            </div>

            <!-- Descripción introductoria -->
            <div class="max-w-4xl mx-auto mb-16">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <p class="text-white text-lg lg:text-xl leading-relaxed text-center">
                        Todo lo que ha aprendido a lo largo de los años está preparado para compartirlo contigo, como si fuera un mapa del tesoro musical.
                        <br><br>
                        Desde las melodías de Mozart hasta los ritmos más cool del jazz y el rock, te llevará de la mano por este fantástico mundo. No solo es un crack con el piano, también lo es acompañándote en cada paso, asegurándose de que disfrutes mientras aprendes.
                        <br><br>
                        <span class="text-secondary-color font-semibold">¿Buscas conquistar el conservatorio, superar exámenes o simplemente disfrutar del piano como hobby? ¡Cuenta con él para que todo vaya sobre ruedas!</span>
                    </p>
                </div>
            </div>

            <!-- Grados de formación -->
            <div class="grid lg:grid-cols-2 gap-8 mb-16">
                <!-- Grado Elemental -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="bg-secondary-color rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-primary-color">
                                <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                            </svg>
                        </div>
                        <div>
                            <h5 class="text-secondary-color text-xl lg:text-2xl font-bold font-['Oswald']">
                                GRADO ELEMENTAL
                            </h5>
                            <p class="text-white/80 text-sm">4 años de formación base</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-white/10 rounded-lg p-4">
                            <div class="text-white font-bold text-lg">Piano</div>
                            <div class="text-secondary-color text-sm">4 años</div>
                        </div>
                        <div class="bg-white/10 rounded-lg p-4">
                            <div class="text-white font-bold text-lg">Lenguaje Musical</div>
                            <div class="text-secondary-color text-sm">4 años</div>
                        </div>
                        <div class="bg-white/10 rounded-lg p-4">
                            <div class="text-white font-bold text-lg">Coro</div>
                            <div class="text-secondary-color text-sm">4 años</div>
                        </div>
                        <div class="bg-white/10 rounded-lg p-4">
                            <div class="text-white font-bold text-lg">Conjunto</div>
                            <div class="text-secondary-color text-sm">2 años</div>
                        </div>
                    </div>
                </div>

                <!-- Grado Profesional -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="bg-secondary-color rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-primary-color">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h5 class="text-secondary-color text-xl lg:text-2xl font-bold font-['Oswald']">
                                GRADO PROFESIONAL
                            </h5>
                            <p class="text-white/80 text-sm">6 años de especialización</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div class="bg-white/10 rounded-lg p-3">
                            <div class="text-white font-bold">Piano</div>
                            <div class="text-secondary-color text-sm">6 años</div>
                        </div>
                        <div class="bg-white/10 rounded-lg p-3">
                            <div class="text-white font-bold">Lenguaje musical</div>
                            <div class="text-secondary-color text-sm">2 años</div>
                        </div>
                        <div class="bg-white/10 rounded-lg p-3">
                            <div class="text-white font-bold">Música de cámara</div>
                            <div class="text-secondary-color text-sm">4 años</div>
                        </div>
                        <div class="bg-white/10 rounded-lg p-3">
                            <div class="text-white font-bold">Conjunto</div>
                            <div class="text-secondary-color text-sm">2 años</div>
                        </div>
                        <div class="bg-white/10 rounded-lg p-3">
                            <div class="text-white font-bold">Armonía</div>
                            <div class="text-secondary-color text-sm">3 años</div>
                        </div>
                        <div class="bg-white/10 rounded-lg p-3">
                            <div class="text-white font-bold">Acompañamiento</div>
                            <div class="text-secondary-color text-sm">2 años</div>
                        </div>
                        <div class="bg-white/10 rounded-lg p-3">
                            <div class="text-white font-bold">Análisis musical</div>
                            <div class="text-secondary-color text-sm">2 años</div>
                        </div>
                        <div class="bg-white/10 rounded-lg p-3">
                            <div class="text-white font-bold">Historia de la música</div>
                            <div class="text-secondary-color text-sm">2 años</div>
                        </div>
                        <div class="bg-white/10 rounded-lg p-3 sm:col-span-2">
                            <div class="text-white font-bold">Estética</div>
                            <div class="text-secondary-color text-sm">1 año</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sus Títulos -->
            <div class="text-center mb-12">
                <h3 class="text-4xl lg:text-5xl font-bold text-white font-['Oswald'] mb-4">Sus Títulos</h3>
                <div class="w-24 h-1 bg-secondary-color mx-auto rounded-full"></div>
            </div>

            <!-- Grid de certificados mejorado -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-500 hover:scale-105" onclick="viewCertificado('certificado1')">
                    <img src="./images/certificados/certificado1.jpeg" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500" 
                         alt="Ver Certificado" 
                         title="Ver Certificado">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <div class="flex items-center justify-center gap-2 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-semibold">Ver Certificado</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-500 hover:scale-105" onclick="viewCertificado('certificado2')">
                    <img src="./images/certificados/certificado2.jpeg" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500" 
                         alt="Ver Certificado" 
                         title="Ver Certificado">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <div class="flex items-center justify-center gap-2 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-semibold">Ver Certificado</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-500 hover:scale-105" onclick="viewCertificado('certificado3')">
                    <img src="./images/certificados/certificado3.jpeg" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500" 
                         alt="Ver Certificado" 
                         title="Ver Certificado">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <div class="flex items-center justify-center gap-2 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-semibold">Ver Certificado</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-500 hover:scale-105" onclick="viewCertificado('certificado4')">
                    <img src="./images/certificados/certificado4.jpeg" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500" 
                         alt="Ver Certificado" 
                         title="Ver Certificado">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <div class="flex items-center justify-center gap-2 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-semibold">Ver Certificado</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-500 hover:scale-105" onclick="viewCertificado('certificado5')">
                    <img src="./images/certificados/certificado5.jpeg" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500" 
                         alt="Ver Certificado" 
                         title="Ver Certificado">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <div class="flex items-center justify-center gap-2 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-semibold">Ver Certificado</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-500 hover:scale-105" onclick="viewCertificado('certificado6')">
                    <img src="./images/certificados/certificado6.jpeg" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500" 
                         alt="Ver Certificado" 
                         title="Ver Certificado">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <div class="flex items-center justify-center gap-2 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-semibold">Ver Certificado</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Su enfoque pedagógico - Diseño mejorado -->
    <section class="bg-gradient-to-br from-white to-gray-100 py-20">
        <div class="max-w-6xl mx-auto px-6 lg:px-12">
            <!-- Título -->
            <div class="text-center mb-16">
                <h5 class="text-4xl lg:text-5xl font-bold text-gray-800 font-['Oswald'] mb-4">
                    Su Enfoque Pedagógico
                </h5>
                <div class="w-24 h-1 bg-secondary-color mx-auto rounded-full mb-6"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Más de 12 años transformando vidas a través de la música
                </p>
            </div>

            <!-- Contenido principal -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-12 border border-gray-100">
                <!-- Características destacadas -->
                <div class="grid md:grid-cols-3 gap-8 mb-12">
                    <div class="text-center">
                        <div class="bg-gradient-to-br from-primary-color to-primary-color/80 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 text-white">
                                <path d="M21.721 12.752a9.711 9.711 0 0 0-.945-5.003 12.754 12.754 0 0 1-4.339 2.708 18.991 18.991 0 0 1-.214 4.772 17.165 17.165 0 0 0 5.498-2.477ZM14.634 15.55a17.324 17.324 0 0 0 .332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 0 0 .332 4.647 17.385 17.385 0 0 0 5.268 0ZM9.772 17.119a18.963 18.963 0 0 0 4.456 0A17.182 17.182 0 0 1 12 21.724a17.18 17.18 0 0 1-2.228-4.605ZM7.777 15.23a18.87 18.87 0 0 1-.214-4.774 12.753 12.753 0 0 1-4.34-2.708 9.711 9.711 0 0 0-.944 5.004 17.165 17.165 0 0 0 5.498 2.477Z" />
                                <path d="M21.356 14.752a9.765 9.765 0 0 1-7.478 6.817 18.64 18.64 0 0 0 1.988-4.718 18.627 18.627 0 0 0 5.49-2.098ZM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 0 0 1.988 4.718 9.765 9.765 0 0 1-7.478-6.816ZM13.878 2.43a9.755 9.755 0 0 1 6.116 3.986 11.267 11.267 0 0 1-3.746 2.504 18.63 18.63 0 0 0-2.37-6.49ZM12 2.276a17.152 17.152 0 0 1 2.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0 1 12 2.276ZM10.122 2.43a18.629 18.629 0 0 0-2.37 6.49 11.266 11.266 0 0 1-3.746-2.504 9.754 9.754 0 0 1 6.116-3.985Z" />
                            </svg>
                        </div>
                        <h6 class="text-xl font-bold text-gray-800 mb-2">Personalización Total</h6>
                        <p class="text-gray-600 text-sm">Métodos adaptados a cada alumno y su ritmo personal</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-gradient-to-br from-secondary-color to-secondary-color/80 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 text-primary-color">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h6 class="text-xl font-bold text-gray-800 mb-2">Control de Ansiedad</h6>
                        <p class="text-gray-600 text-sm">Técnicas para superar el miedo escénico y tocar con confianza</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-gradient-to-br from-primary-color to-primary-color/80 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 text-white">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h6 class="text-xl font-bold text-gray-800 mb-2">Diversidad Musical</h6>
                        <p class="text-gray-600 text-sm">Desde clásico hasta moderno: jazz, rock y mucho más</p>
                    </div>
                </div>

                <!-- Contenido descriptivo -->
                <div class="prose prose-lg max-w-none">
                    <div class="bg-gradient-to-r from-primary-color/5 to-secondary-color/5 rounded-2xl p-8 mb-8">
                        <p class="text-lg text-gray-700 leading-relaxed text-justify mb-0">
                            Juan Carlos lleva más de 12 años haciendo que la música sea divertida y accesible para todos. ¿Su truco? <strong class="text-primary-color">Personalización total</strong>. Aquí no hay métodos cuadrados ni aburridos. Con él, cada alumno va a su ritmo, eligiendo entre estilos que van desde lo más clásico hasta lo más moderno. ¡Porque la música es mucho más que partituras!
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-secondary-color/5 to-primary-color/5 rounded-2xl p-8 mb-8">
                        <p class="text-lg text-gray-700 leading-relaxed text-justify mb-0">
                            Cuando se trata de preparar a sus alumnos para conservatorios, Juan Carlos tiene un enfoque que <strong class="text-secondary-color">convierte los exámenes en un reto emocionante</strong>, no en un dolor de cabeza. Y sabe bien que los nervios antes de tocar son lo peor, por eso también enseña a relajarse y a controlar la ansiedad escénica. ¿El objetivo? Que cada uno toque con confianza, ¡como si estuviera en casa!
                        </p>
                    </div>

                    <div class="bg-gradient-to-r from-primary-color/5 to-secondary-color/5 rounded-2xl p-8">
                        <p class="text-lg text-gray-700 leading-relaxed text-justify mb-0">
                            Su método combina lo mejor de la teoría y la práctica, siempre adaptando las clases según lo que cada alumno prefiera. En resumen, Juan Carlos quiere que la música no solo se toque, <strong class="text-primary-color">¡sino que se viva y se disfrute a tope!</strong> Porque, al final, lo importante es pasarlo bien mientras aprendes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formándose con los mejores - Diseño mejorado -->
    <section class="bg-gradient-to-br from-gray-900 via-primary-color to-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <!-- Título principal -->
            <div class="text-center mb-16">
                <h4 class="text-4xl lg:text-5xl font-bold text-white font-['Oswald'] mb-4">
                    Formándose con los Mejores
                </h4>
                <div class="w-24 h-1 bg-secondary-color mx-auto rounded-full mb-6"></div>
                <p class="text-xl text-white/80 max-w-3xl mx-auto">
                    Influencia directa de la reconocida escuela rusa de piano
                </p>
            </div>

            <!-- Card principal de la profesora -->
            <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 lg:p-12 border border-white/20 mb-12">
                <div class="grid lg:grid-cols-3 gap-8 items-center">
                    <!-- Imagen de la profesora -->
                    <div class="lg:col-span-1 flex justify-center">
                        <div class="relative" data-aos="zoom-in-up" data-aos-duration="1000">
                            <img src="./images/certificados/profe_veronica.jpeg" 
                                 alt="Veronika Metakovskaya - Profesora" 
                                 title="Veronika Metakovskaya - Profesora" 
                                 class="w-64 h-64 lg:w-80 lg:h-80 object-cover rounded-full shadow-2xl border-8 border-secondary-color/30">
                            <div class="absolute -bottom-4 -right-4 bg-secondary-color rounded-full p-4 shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-primary-color">
                                    <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Información de la profesora -->
                    <div class="lg:col-span-2">
                        <div class="text-center lg:text-left" data-aos="fade-right" data-aos-duration="1000">
                            <h5 class="text-3xl lg:text-4xl font-bold text-white mb-2 font-['Oswald']">
                                Veronika Metakovskaya
                            </h5>
                            <p class="text-secondary-color text-lg font-semibold mb-4">
                                Mentora · Escuela Rusa de Piano · Conservatorio Tchaykovsky de Moscú
                            </p>
                            <div class="bg-white/10 rounded-xl p-6 mb-6">
                                <p class="text-white/90 text-lg leading-relaxed">
                                    Nacida en Moscú, formada en la prestigiosa Escuela Central Especial de Música del Conservatorio Estatal Tchaykovsky. Con una trayectoria de 17 años como profesora en el Conservatorio Pedagógico Estatal de Música de Moscú, ha sido reconocida con 5 Diplomas de Honor del Ministerio de Cultura de Moscú.
                                </p>
                            </div>
                            <!-- Stats destacados -->
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-center">
                                <div class="bg-white/10 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-secondary-color">17</div>
                                    <div class="text-white/80 text-sm">Años enseñando</div>
                                </div>
                                <div class="bg-white/10 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-secondary-color">5</div>
                                    <div class="text-white/80 text-sm">Diplomas de Honor</div>
                                </div>
                                <div class="bg-white/10 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-secondary-color">20+</div>
                                    <div class="text-white/80 text-sm">Años en Madrid</div>
                                </div>
                                <div class="bg-white/10 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-secondary-color">∞</div>
                                    <div class="text-white/80 text-sm">Experiencia</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grid de información detallada -->
            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Formación pedagógica -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <div class="flex items-center gap-4 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 text-secondary-color">
                            <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                        </svg>
                        <h6 class="text-2xl font-bold text-white font-['Oswald']">
                            Formación Pedagógica
                        </h6>
                    </div>
                    <div class="h-48 overflow-y-auto custom-scrollbar">
                        <p class="text-white/90 leading-relaxed text-justify">
                            Nacida el 7 de marzo de 1956 en Moscú, Rusia, Verónika Metakovskaya mostró un talento excepcional desde temprana edad. A los 7 años ingresó al departamento de piano de la Escuela Central Especial de Música del Conservatorio Estatal Tchaykovsky de Moscú, bajo la tutela de la renombrada profesora de piano, T. Bobovich. Tras 11 años de dedicación, se graduó de esta institución, donde también formaron músicos de renombre mundial como V. Ashkenazi, V. Gornostaeva, A. Gavrilov, entre otros.
                            <br><br>
                            Continuó su formación pianística en el Conservatorio Estatal de Educación Superior Glinka de Nizhni Nóvgorod, bajo la guía de la prestigiosa profesora catedrática de piano O. Vinogradova, discípula de destacados pianistas rusos y mundiales, como Ya. Flier y K. Igumnov. Obtuvo el título académico de Máster en Música con distinciones en las áreas de Artista Solista, Artista de Conjunto de Cámara, Acompañante y Profesora de Piano de Educación Superior.
                        </p>
                    </div>
                </div>

                <!-- Actividad pedagógica -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <div class="flex items-center gap-4 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 text-secondary-color">
                            <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                        </svg>
                        <h6 class="text-2xl font-bold text-white font-['Oswald']">
                            Actividad Pedagógica
                        </h6>
                    </div>
                    <div class="h-48 overflow-y-auto custom-scrollbar">
                        <p class="text-white/90 leading-relaxed text-justify">
                            Con una trayectoria de 17 años como profesora de piano en el Conservatorio Pedagógico Estatal de Música de Moscú, Verónika Metakovskaya ha sido reconocida con 5 Diplomas de Honor del Ministerio de Cultura de Moscú por los destacados logros de sus estudiantes en diversas salas de conciertos de la capital rusa. Muchos de sus discípulos han continuado su formación en prestigiosas instituciones como el Conservatorio Estatal Tchaykovsky de Moscú y la Universität für Musik und darstellende Kunst Graz en Austria.
                            <br><br>
                            Desde hace dos décadas, Verónika ejerce como profesora de piano en el Centro Superior de Enseñanza Musical «Progreso Musical» de Madrid.
                        </p>
                    </div>
                </div>

                <!-- Participación en concursos -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <div class="flex items-center gap-4 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 text-secondary-color">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <h6 class="text-xl font-bold text-white font-['Oswald']">
                            Concursos Internacionales
                        </h6>
                    </div>
                    <div class="h-48 overflow-y-auto custom-scrollbar">
                        <p class="text-white/90 leading-relaxed text-justify">
                            Los éxitos de sus estudiantes en competiciones internacionales son un testimonio de la excelencia de su enseñanza: Victoria Wang obtuvo el Primer Premio en el Concurso Internacional de Piano de Maestros Intérpretes Schubert en Beijing (2015), mientras que Mijail Saprichev ganó el Segundo Premio en el Concurso Internacional de Piano Santa Cecilia en Segovia (2016) y el Primer Premio en el Concurso Internacional de Piano Gran Clavier en Alcalá (2019).
                        </p>
                    </div>
                </div>

                <!-- Actividad de concierto y libros -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <div class="mb-8">
                        <div class="flex items-center gap-4 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-secondary-color">
                                <path fill-rule="evenodd" d="M19.902 4.098a3.75 3.75 0 0 0-5.304 0l-4.5 4.5a3.75 3.75 0 0 0 1.035 6.037.75.75 0 0 1-.646 1.353 5.25 5.25 0 0 1-1.449-8.45l4.5-4.5a5.25 5.25 0 1 1 7.424 7.424l-1.757 1.757a.75.75 0 1 1-1.06-1.06l1.757-1.757a3.75 3.75 0 0 0 0-5.304Zm-7.804 9.804a3.75 3.75 0 0 0 5.304 0l4.5-4.5a3.75 3.75 0 0 0-1.035-6.037.75.75 0 0 1 .646-1.353 5.25 5.25 0 0 1 1.449 8.45l-4.5 4.5a5.25 5.25 0 1 1-7.424-7.424l1.757-1.757a.75.75 0 1 1 1.06 1.06l-1.757 1.757a3.75 3.75 0 0 0 0 5.304Z" clip-rule="evenodd" />
                            </svg>
                            <h6 class="text-lg font-bold text-white">Actividad de Concierto</h6>
                        </div>
                        <p class="text-white/90 text-sm leading-relaxed mb-6">
                            Miembro de la Filarmónica de Maestros Intérpretes de Moscú durante más de una década. Reconocida con Diplomas de Honor del Ministerio de Cultura de Moscú y Rusia por su contribución artística.
                        </p>
                    </div>
                    
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-secondary-color">
                                <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                            </svg>
                            <h6 class="text-lg font-bold text-white">Libros Editados</h6>
                        </div>
                        <p class="text-white/90 text-sm leading-relaxed">
                            Autora de «Clases de Piano y Lenguaje Musical en Imágenes» y «El Arte de Tocar el Piano: Sugerencias Prácticas», referencias esenciales en la educación pianística.
                        </p>
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

    <!-- Certificados popup - Corregido -->
    <section class="hidden fixed overflow-auto justify-center items-center min-w-full min-h-full z-50 top-0 p-4 bg-black/70" id="popupCertificados">
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

    <!-- Especialidades -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6 lg:px-12">
            <!-- Título -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h5 class="text-4xl lg:text-5xl font-bold text-gray-800 font-['Oswald'] mb-4">
                    Especialidades
                </h5>
                <div class="w-24 h-1 bg-secondary-color mx-auto rounded-full mb-6"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Formación integral en múltiples áreas musicales
                </p>
            </div>

            <!-- Grid de Especialidades -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Piano Clásico -->
                <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105 overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-secondary-color to-purple-600"></div>
                    <div class="p-8 text-center">
                        <div class="w-20 h-20 bg-gradient-to-r from-secondary-color to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM4 4h16v3H4V4zm0 5h3v10H4V9zm5 0h3v10H9V9zm5 0h3v10h-3V9zm5 0h2v10h-2V9z"/>
                            </svg>
                        </div>
                        <h6 class="text-2xl font-bold text-gray-800 font-['Oswald'] mb-4">Piano Clásico</h6>
                        <p class="text-gray-600 leading-relaxed">Técnica clásica refinada, interpretación de obras maestras del repertorio pianístico mundial.</p>
                    </div>
                </div>

                <!-- Piano Popular -->
                <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105 overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-500 to-cyan-500"></div>
                    <div class="p-8 text-center">
                        <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/>
                            </svg>
                        </div>
                        <h6 class="text-2xl font-bold text-gray-800 font-['Oswald'] mb-4">Piano Popular</h6>
                        <p class="text-gray-600 leading-relaxed">Estilos modernos, jazz, pop, baladas y música contemporánea con técnicas avanzadas.</p>
                    </div>
                </div>

                <!-- Teoría Musical -->
                <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105 overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-green-500 to-emerald-500"></div>
                    <div class="p-8 text-center">
                        <div class="w-20 h-20 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <h6 class="text-2xl font-bold text-gray-800 font-['Oswald'] mb-4">Teoría Musical</h6>
                        <p class="text-gray-600 leading-relaxed">Fundamentos sólidos, análisis armónico, composición y comprensión profunda del lenguaje musical.</p>
                    </div>
                </div>

                <!-- Técnica Avanzada -->
                <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105 overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-orange-500 to-red-500"></div>
                    <div class="p-8 text-center">
                        <div class="w-20 h-20 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0L19.2 12l-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/>
                            </svg>
                        </div>
                        <h6 class="text-2xl font-bold text-gray-800 font-['Oswald'] mb-4">Técnica Avanzada</h6>
                        <p class="text-gray-600 leading-relaxed">Desarrollo de virtuosismo, escalas, arpegios, estudios técnicos y preparación para recitales.</p>
                    </div>
                </div>

                <!-- Preparación de Recitales -->
                <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105 overflow-hidden" data-aos="fade-up" data-aos-delay="500">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-purple-500 to-pink-500"></div>
                    <div class="p-8 text-center">
                        <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <h6 class="text-2xl font-bold text-gray-800 font-['Oswald'] mb-4">Preparación de Recitales</h6>
                        <p class="text-gray-600 leading-relaxed">Coaching escénico, control de nervios, interpretación y preparación integral para presentaciones públicas.</p>
                    </div>
                </div>

                <!-- Música de Cámara -->
                <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105 overflow-hidden" data-aos="fade-up" data-aos-delay="600">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-indigo-500 to-blue-600"></div>
                    <div class="p-8 text-center">
                        <div class="w-20 h-20 bg-gradient-to-r from-indigo-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 1l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 1zm0 2.69L9.5 9.4l-5.21.76 3.77 3.68-.89 5.21L12 16.9l4.83 2.54-.89-5.21L19.71 10.16 14.5 9.4 12 3.69z"/>
                            </svg>
                        </div>
                        <h6 class="text-2xl font-bold text-gray-800 font-['Oswald'] mb-4">Música de Cámara</h6>
                        <p class="text-gray-600 leading-relaxed">Ensambles, dúos, acompañamiento de instrumentos y voces, colaboración musical profesional.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Metodología -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Elementos decorativos -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-10 w-32 h-32 bg-gray-200 rounded-full animate-pulse"></div>
            <div class="absolute bottom-20 right-20 w-24 h-24 bg-gray-300 rounded-full animate-bounce"></div>
            <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-gray-200 rounded-full animate-ping"></div>
        </div>

        <div class="max-w-6xl mx-auto px-6 lg:px-12 relative z-10">
            <!-- Título -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h5 class="text-4xl lg:text-5xl font-bold text-gray-900 font-['Oswald'] mb-4">
                    Metodología de Enseñanza
                </h5>
                <div class="w-24 h-1 bg-secondary-color mx-auto rounded-full mb-6"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Un enfoque personalizado que combina técnica clásica con métodos modernos
                </p>
            </div>

            <!-- Grid de Metodologías -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Enfoque Técnico -->
                <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl p-8 border border-gray-200 shadow-xl hover:shadow-2xl transition-all duration-500" data-aos="fade-right" data-aos-delay="100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-secondary-color to-purple-600 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z"/>
                            </svg>
                        </div>
                        <h6 class="text-2xl font-bold text-gray-900 font-['Oswald']">Enfoque Técnico</h6>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-secondary-color mr-3 text-xl">•</span>
                            <span>Desarrollo progresivo de la técnica pianística</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary-color mr-3 text-xl">•</span>
                            <span>Ejercicios específicos para cada nivel</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary-color mr-3 text-xl">•</span>
                            <span>Corrección postural y ergonomía</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary-color mr-3 text-xl">•</span>
                            <span>Fortalecimiento de dedos y coordinación</span>
                        </li>
                    </ul>
                </div>

                <!-- Enfoque Interpretativo -->
                <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl p-8 border border-gray-200 shadow-xl hover:shadow-2xl transition-all duration-500" data-aos="fade-left" data-aos-delay="200">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/>
                            </svg>
                        </div>
                        <h6 class="text-2xl font-bold text-gray-900 font-['Oswald']">Enfoque Interpretativo</h6>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-secondary-color mr-3 text-xl">•</span>
                            <span>Análisis musical y comprensión estilística</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary-color mr-3 text-xl">•</span>
                            <span>Desarrollo de la expresividad personal</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary-color mr-3 text-xl">•</span>
                            <span>Historia y contexto de las obras</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary-color mr-3 text-xl">•</span>
                            <span>Comunicación emocional a través de la música</span>
                        </li>
                    </ul>
                </div>

                <!-- Metodología Personalizada -->
                <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl p-8 border border-gray-200 shadow-xl hover:shadow-2xl transition-all duration-500" data-aos="fade-right" data-aos-delay="300">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A1.5 1.5 0 0 0 18.54 8H16c-.8 0-1.54.37-2.01 1.01l-2.54 7.63A1.49 1.49 0 0 0 12.76 18H16v4h4zM12.5 11.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5S11 9.17 11 10s.67 1.5 1.5 1.5zM5.5 6c1.11 0 2-.89 2-2s-.89-2-2-2-2 .89-2 2 .89 2 2 2zm2.5 16v-6h2.5l-2.54-7.63A1.5 1.5 0 0 0 6.54 8H4c-.8 0-1.54.37-2.01 1.01L-.55 16.37A1.49 1.49 0 0 0 .76 18H4v4h4z"/>
                            </svg>
                        </div>
                        <h6 class="text-2xl font-bold text-gray-900 font-['Oswald']">Metodología Personalizada</h6>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-secondary-color mr-3 text-xl">•</span>
                            <span>Evaluación individual de habilidades</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary-color mr-3 text-xl">•</span>
                            <span>Adaptación del repertorio a cada estudiante</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary-color mr-3 text-xl">•</span>
                            <span>Ritmo de aprendizaje personalizado</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary-color mr-3 text-xl">•</span>
                            <span>Objetivos específicos y alcanzables</span>
                        </li>
                    </ul>
                </div>

                <!-- Tecnología y Modernidad -->
                <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl p-8 border border-gray-200 shadow-xl hover:shadow-2xl transition-all duration-500" data-aos="fade-left" data-aos-delay="400">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z"/>
                            </svg>
                        </div>
                        <h6 class="text-2xl font-bold text-gray-900 font-['Oswald']">Tecnología y Modernidad</h6>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-secondary-color mr-3 text-xl">•</span>
                            <span>Herramientas digitales de aprendizaje</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary-color mr-3 text-xl">•</span>
                            <span>Grabaciones para análisis y mejora</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary-color mr-3 text-xl">•</span>
                            <span>Recursos multimedia interactivos</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary-color mr-3 text-xl">•</span>
                            <span>Seguimiento del progreso digital</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Llamada a la acción -->
            <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="500">
                <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl p-8 border border-gray-200 shadow-xl max-w-4xl mx-auto">
                    <h6 class="text-3xl font-bold text-gray-900 font-['Oswald'] mb-4">
                        ¿Listo para transformar tu experiencia musical?
                    </h6>
                    <p class="text-xl text-gray-600 mb-6">
                        Únete a más de 200 estudiantes que han descubierto su potencial pianístico con nuestra metodología única
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="index.php#contacto" class="bg-gradient-to-r from-secondary-color to-purple-600 text-white px-8 py-4 rounded-xl font-bold hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                            Comenzar Ahora
                        </a>
                        <a href="index.php#videos" class="bg-gray-800 text-white px-8 py-4 rounded-xl font-bold border border-gray-300 hover:bg-gray-700 transition-all duration-300">
                            Ver Clases Demo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pie de Pagina -->
    <?php include("footer.php") ?>

    <script src="src/js/main.js?v=20250810"></script>
    <script src="./src/css/aos-master/dist/aos.js"></script>

</body>

</html>