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
    <link href="./src/output_v2112025.css?v=20250810" rel="stylesheet" />
    <link href="./src/css/main.css?v=20250810" rel="stylesheet" />
    <script src="src/js/main.js?v=20250810" defer></script>
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

    <!-- Portada Hero Modernizada -->
    <section class="relative h-[85vh] overflow-hidden bg-black">
        <!-- Imagen de fondo con overlay -->
        <div class="absolute inset-0">
            <img src="./images/portada.jpeg" alt="Melodías Unidas - Nuestra Historia" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>
        </div>

        <!-- Contenido superpuesto -->
        <div class="relative z-10 h-full flex items-center justify-center px-6">
            <div class="text-center text-white max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold font-['Oswald'] mb-6 animate__animated animate__fadeInUp">
                    Nuestra <span class="text-secondary-color">Historia</span>
                </h1>
                <p class="text-lg md:text-xl lg:text-2xl mb-8 opacity-90 animate__animated animate__fadeInUp animate__delay-1s">
                    Un viaje musical que une corazones en todo el mundo
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center animate__animated animate__fadeInUp animate__delay-2s">
                    <a href="#intro" class="inline-flex items-center gap-3 bg-gradient-to-r from-primary-color to-primary-color/80 hover:from-primary-color/80 hover:to-primary-color text-white font-bold px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <span>Conoce nuestra historia</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                    </a>
                    <a href="#oferta" class="inline-flex items-center gap-3 bg-gradient-to-r from-secondary-color to-yellow-400 hover:from-yellow-400 hover:to-secondary-color text-black font-bold px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <span>Ver oferta educativa</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Indicador de scroll -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-white opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </section>

    <!-- Intro Modernizada -->
    <section id="intro" class="py-20 lg:py-32 bg-gradient-to-br from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <!-- Header -->
            <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-3xl lg:text-4xl xl:text-5xl font-bold font-['Oswald'] text-gray-900 mb-4">
                    ¡Bienvenid@ a un mundo de <span class="text-primary-color">música</span> y <span class="text-secondary-color">buenas vibras!</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-primary-color to-secondary-color mx-auto"></div>
            </div>

            <!-- Contenido principal -->
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Texto -->
                <div class="space-y-6" data-aos="fade-right" data-aos-duration="800">
                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 leading-relaxed text-lg">
                            En <span class="font-bold text-primary-color">Melodías Unidas</span> somos un equipo que respira música y está preparado para acompañarte en este increíble viaje. Desde el primer día te recibimos con los brazos abiertos y con todas las ganas de que disfrutes aprendiendo.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            Aquí no solo se trata de clases, <span class="font-semibold text-secondary-color">¡se trata de formar parte de algo más grande!</span> Estaremos a tu lado en cada paso, ayudándote, apoyándote y celebrando tus avances.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-lg font-semibold">
                            ¡Ven a compartir esta aventura musical con nosotros!
                        </p>
                    </div>

                    <!-- Stats o características destacadas -->
                    <div class="grid grid-cols-2 gap-6 mt-8">
                        <div class="text-center p-4 bg-white rounded-xl shadow-md border border-gray-100">
                            <div class="text-2xl font-bold text-primary-color">12+</div>
                            <div class="text-sm text-gray-600">Años de experiencia</div>
                        </div>
                        <div class="text-center p-4 bg-white rounded-xl shadow-md border border-gray-100">
                            <div class="text-2xl font-bold text-secondary-color">500+</div>
                            <div class="text-sm text-gray-600">Estudiantes felices</div>
                        </div>
                    </div>
                </div>

                <!-- Video -->
                <div class="relative" data-aos="fade-left" data-aos-duration="800">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl group">
                        <!-- Decoración de fondo -->
                        <div class="absolute -inset-4 bg-gradient-to-r from-primary-color/20 to-secondary-color/20 rounded-2xl transform rotate-3 group-hover:rotate-6 transition-transform duration-500"></div>
                        <div class="absolute -inset-2 bg-gradient-to-r from-secondary-color/20 to-primary-color/20 rounded-2xl transform -rotate-3 group-hover:-rotate-6 transition-transform duration-500"></div>

                        <!-- Video principal -->
                        <video class="relative z-10 w-full h-auto rounded-2xl shadow-xl border-4 border-white" muted autoplay loop>
                            <source src="./videos/nosotros.webm" type="video/webm">
                            <source src="./videos/nosotros.mp4" type="video/mp4">
                            Tu navegador no soporta el video.
                        </video>

                        <!-- Overlay con play button (opcional) -->
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl flex items-center justify-center z-20">
                            <div class="w-16 h-16 bg-white/90 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-primary-color ml-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Oferta educativa Modernizada -->
    <section id="oferta" class="py-20 lg:py-32 bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white relative overflow-hidden">
        <!-- Elementos decorativos de fondo -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-32 h-32 bg-primary-color rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-40 h-40 bg-secondary-color rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-purple-500 rounded-full blur-2xl"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12">
            <!-- Header -->
            <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-3xl lg:text-4xl xl:text-5xl font-bold font-['Oswald'] mb-4">
                    Nuestra <span class="text-secondary-color">Oferta Educativa</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-primary-color to-secondary-color mx-auto mb-6"></div>
                <p class="text-lg lg:text-xl text-gray-300 max-w-3xl mx-auto">
                    Dos caminos únicos para que elijas cómo vivir tu experiencia musical
                </p>
            </div>

            <!-- Grid de ofertas -->
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12">
                <!-- Formación Oficial -->
                <div class="group" data-aos="fade-right" data-aos-duration="800">
                    <div class="bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-md rounded-2xl p-8 lg:p-10 border border-white/10 hover:border-primary-color/30 transition-all duration-500 h-full shadow-xl hover:shadow-2xl hover:transform hover:scale-105">
                        <!-- Header de la card -->
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-r from-primary-color to-blue-500 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl lg:text-3xl font-bold font-['Oswald'] text-secondary-color mb-2">
                                    Formación Oficial
                                </h3>
                                <p class="text-gray-300 text-sm">Títulos reconocidos y validación profesional</p>
                            </div>
                        </div>

                        <!-- Contenido -->
                        <div class="space-y-6">
                            <p class="text-gray-300 leading-relaxed">
                                Si tu sueño es entrar en el conservatorio o conseguir un título oficial, nuestra formación oficial te llevará directo a la meta. Te preparamos para pruebas de acceso y títulos de prestigio como <span class="font-bold text-white">ABRSM</span> y <span class="font-bold text-white">Rock School</span>. ¡Todo lo que necesitas para validar tu progreso y convertirte en un crack musical!
                            </p>

                            <!-- Beneficios -->
                            <div class="bg-black/20 rounded-xl p-6 border border-white/5">
                                <h4 class="font-bold text-white mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-secondary-color mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" />
                                    </svg>
                                    Beneficios:
                                </h4>
                                <p class="text-gray-300 text-sm leading-relaxed">
                                    Además de mejorar tu técnica, aprenderás a ser constante y disciplinado, con exámenes que te guían hacia tus objetivos. ¡Cada paso es una victoria que demuestra tu evolución!
                                </p>
                            </div>

                            <!-- Features -->
                            <div class="grid grid-cols-2 gap-3">
                                <div class="flex items-center text-sm text-gray-300">
                                    <svg class="w-4 h-4 text-primary-color mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                    </svg>
                                    Títulos ABRSM
                                </div>
                                <div class="flex items-center text-sm text-gray-300">
                                    <svg class="w-4 h-4 text-primary-color mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                    </svg>
                                    Rock School
                                </div>
                                <div class="flex items-center text-sm text-gray-300">
                                    <svg class="w-4 h-4 text-primary-color mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                    </svg>
                                    Conservatorio
                                </div>
                                <div class="flex items-center text-sm text-gray-300">
                                    <svg class="w-4 h-4 text-primary-color mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                    </svg>
                                    Preparación oficial
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formación No Oficial -->
                <div class="group" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-md rounded-2xl p-8 lg:p-10 border border-white/10 hover:border-secondary-color/30 transition-all duration-500 h-full shadow-xl hover:shadow-2xl hover:transform hover:scale-105">
                        <!-- Header de la card -->
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-r from-secondary-color to-yellow-400 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl lg:text-3xl font-bold font-['Oswald'] text-secondary-color mb-2">
                                    Formación No Oficial
                                </h3>
                                <p class="text-gray-300 text-sm">Disfruta y aprende a tu ritmo</p>
                            </div>
                        </div>

                        <!-- Contenido -->
                        <div class="space-y-6">
                            <p class="text-gray-300 leading-relaxed">
                                Si lo que buscas es aprender música por puro placer, sin prisas ni exámenes, nuestras clases no oficiales son lo tuyo. Aquí aprendes a tu ritmo, sin estrés, y haces de la música una parte divertida de tu día a día. ¡Vas a disfrutar del proceso mientras desarrollas tu creatividad y bienestar emocional!
                            </p>

                            <!-- Filosofía -->
                            <div class="bg-black/20 rounded-xl p-6 border border-white/5">
                                <h4 class="font-bold text-white mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-secondary-color mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                    </svg>
                                    Nuestra Filosofía:
                                </h4>
                                <p class="text-gray-300 text-sm leading-relaxed">
                                    Al final, lo importante es que elijas lo que mejor se adapta a ti. Tanto si prefieres una formación oficial como algo más relajado, en Melodías Unidas tenemos lo que necesitas, con un equipo docente que lleva más de 12 años en esto. ¡Tú eliges cómo disfrutar de la música!
                                </p>
                            </div>

                            <!-- Features -->
                            <div class="grid grid-cols-2 gap-3">
                                <div class="flex items-center text-sm text-gray-300">
                                    <svg class="w-4 h-4 text-secondary-color mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                    </svg>
                                    A tu ritmo
                                </div>
                                <div class="flex items-center text-sm text-gray-300">
                                    <svg class="w-4 h-4 text-secondary-color mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                    </svg>
                                    Sin estrés
                                </div>
                                <div class="flex items-center text-sm text-gray-300">
                                    <svg class="w-4 h-4 text-secondary-color mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                    </svg>
                                    Creatividad
                                </div>
                                <div class="flex items-center text-sm text-gray-300">
                                    <svg class="w-4 h-4 text-secondary-color mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                    </svg>
                                    Bienestar
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to action -->
            <div class="text-center mt-16" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="inline-flex flex-col sm:flex-row gap-4">
                    <a href="index.php#contacto" class="inline-flex items-center gap-3 bg-gradient-to-r from-primary-color to-primary-color/80 hover:from-primary-color/80 hover:to-primary-color text-white font-bold px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <span>Formación Oficial</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="index.php#contacto" class="inline-flex items-center gap-3 bg-gradient-to-r from-secondary-color to-yellow-400 hover:from-yellow-400 hover:to-secondary-color text-black font-bold px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <span>Formación Libre</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Razones para elegir Melodías Unidas -->
    <section class="py-16 px-6 lg:py-24 lg:px-12 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16">
                <h3 class="text-3xl lg:text-4xl xl:text-5xl font-bold font-['Oswald'] text-gray-900 mb-4">
                    ¿Por qué elegir Melodías Unidas?
                </h3>
                <div class="w-24 h-1 bg-gradient-to-r from-primary-color to-secondary-color mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Descubre lo que nos hace únicos y por qué miles de estudiantes confían en nosotros para su formación musical
                </p>
            </div>

            <!-- Grid de características -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-primary-color/20" data-aos="fade-up" data-aos-duration="600">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-primary-color to-primary-color/80 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold font-['Oswald'] text-gray-900">Talento y Experiencia</h4>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        Nuestro equipo docente cuenta con años de experiencia y formación profesional, listos para guiarte en tu viaje musical con metodologías probadas.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-primary-color/20" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-secondary-color to-yellow-400 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold font-['Oswald'] text-gray-900">Personalización Total</h4>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        Tu música, tu ritmo. Adaptamos cada clase a tu estilo y preferencias, desde lo clásico hasta lo moderno. Tú decides cómo aprender.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-primary-color/20" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-400 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold font-['Oswald'] text-gray-900">Resultados Comprobados</h4>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        Cientos de estudiantes han alcanzado sus metas: desde ingresar al conservatorio hasta disfrutar la música como parte esencial de su vida.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-primary-color/20" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-400 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold font-['Oswald'] text-gray-900">Metodología Integral</h4>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        Enseñamos música desde todos los ángulos: teoría, práctica, composición e interpretación. Un enfoque completo para tu crecimiento musical.
                    </p>
                </div>

                <!-- Card 5 -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-primary-color/20" data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-400 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold font-['Oswald'] text-gray-900">Bienestar Musical</h4>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        Priorizamos tu bienestar emocional y desarrollo personal a través de la música, enseñándote a relajarte y disfrutar cada momento musical.
                    </p>
                </div>

                <!-- Card 6 -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-primary-color/20" data-aos="fade-up" data-aos-duration="600" data-aos-delay="500">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-red-500 to-red-400 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold font-['Oswald'] text-gray-900">Pasión por Enseñar</h4>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        La música es nuestra pasión y eso se refleja en cada clase. Creamos una experiencia única, emocionante y completamente personal para ti.
                    </p>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-16">
                <div class="bg-gradient-to-r from-primary-color to-primary-color/90 rounded-2xl p-8 text-white">
                    <h4 class="text-2xl lg:text-3xl font-bold font-['Oswald'] mb-4">
                        ¿Listo para comenzar tu aventura musical?
                    </h4>
                    <p class="text-lg mb-6 opacity-90">
                        Únete a nuestra comunidad y descubre todo tu potencial musical
                    </p>
                    <a href="index.php#contacto" class="inline-block bg-secondary-color hover:bg-yellow-400 text-black font-bold py-4 px-8 rounded-full text-lg transition-all duration-300 hover:scale-105 shadow-lg">
                        ¡Comienza Ahora!
                    </a>
                </div>
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

    <!-- Scripts -->
    <script>
        // Inicializar AOS (Animate On Scroll)
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Smooth scroll para los enlaces internos
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Video autoplay con fallback
        document.addEventListener('DOMContentLoaded', function() {
            const video = document.querySelector('video[autoplay]');
            if (video) {
                video.play().catch(function(error) {
                    console.log('Autoplay prevented:', error);
                });
            }
        });
    </script>

</body>

</html>