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
    <link href="./src/output_v6.css" rel="stylesheet" />
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
    <section class="flex bg-black/80 h-[30vh] sm:h-[60vh]">
        <img src="./images/portada.jpeg" alt="portadanosotros" class="w-full object-cover">
    </section>

    <!-- Contenido Principal -->
    <section class="flex flex-col pt-14 px-4 sm:px-8 lg:px-24 xl:px-48 bg-gradient-to-br from-gray-50 to-white min-h-screen">
        <div class="max-w-4xl mx-auto space-y-12 py-8">
            
            <!-- Header con diseño moderno -->
            <div class="text-center" data-aos="fade-up">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-blue-100 rounded-3xl mb-6">
                    <span class="text-3xl">🎫</span>
                </div>
                <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">¿Compraste en Cuponatic?</h1>
                <p class="text-lg text-gray-600 leading-relaxed max-w-3xl mx-auto">
                    Si adquiriste el acceso a nuestro contenido a través de Cuponatic, completa este formulario para activar tu acceso completo y vitalicio al campus virtual de <span class="font-semibold text-blue-600">Melodías Unidas</span>. Solo necesitas registrar tu número de cupón y datos de contacto. Te enviaremos el acceso inmediatamente, después de tu registro.
                </p>
            </div>

            <!-- Formulario con diseño premium -->
            <div class="relative" data-aos="fade-up" data-aos-delay="200">
                <!-- Fondo decorativo sutil -->
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-800 rounded-3xl transform rotate-1 opacity-5"></div>
                
                <!-- Contenido del formulario -->
                <div class="relative bg-white rounded-3xl p-8 sm:p-12 shadow-2xl border border-gray-100">
                    <form action="registrar_cupon.php" method="POST" class="space-y-8">
                        
                        <!-- Tipo de cupón -->
                        <div class="space-y-2">
                            <label for="tipocupon" class="text-sm font-semibold text-gray-800">Cupón a canjear</label>
                            <div class="relative">
                                <select name="tipocupon" id="tipocupon" required
                                    class="w-full px-4 py-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 bg-gray-50">
                                    <option value="cursos" selected>🎥 Cursos Digitales</option>
                                </select>
                            </div>
                        </div>

                        <!-- Número de cupón -->
                        <div class="space-y-2">
                            <label for="cupon" class="text-sm font-semibold text-gray-800">Número de Cupón *</label>
                            <input type="text" id="cupon" name="cupon" required placeholder="Ej. 123456789"
                                class="w-full px-4 py-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 hover:border-gray-400" />
                        </div>

                        <!-- Grid para nombre y apellido -->
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="nombre" class="text-sm font-semibold text-gray-800">Nombres *</label>
                                <input type="text" id="nombre" name="nombre" required placeholder="Ingresa tu nombre"
                                    class="w-full px-4 py-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 hover:border-gray-400" />
                            </div>
                            <div class="space-y-2">
                                <label for="apellido" class="text-sm font-semibold text-gray-800">Apellidos *</label>
                                <input type="text" id="apellido" name="apellido" required placeholder="Ingresa tus apellidos"
                                    class="w-full px-4 py-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 hover:border-gray-400" />
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="space-y-2">
                            <label for="email" class="text-sm font-semibold text-gray-800">Correo electrónico *</label>
                            <input type="email" id="email" name="email" required placeholder="nombre@correo.com"
                                class="w-full px-4 py-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 hover:border-gray-400" />
                        </div>

                        <!-- Teléfono -->
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-gray-800">Número de WhatsApp o contacto *</label>
                            <div class="flex gap-4">
                                <div class="w-32">
                                    <input type="text" id="codigo" name="codigo" required placeholder="Código país"
                                        class="w-full px-4 py-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 hover:border-gray-400" />
                                    <p class="text-xs text-gray-500 mt-1">Ej. +57</p>
                                </div>
                                <div class="flex-1">
                                    <input type="text" id="numero" name="numero" required placeholder="Número de teléfono"
                                        class="w-full px-4 py-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 hover:border-gray-400" />
                                    <p class="text-xs text-gray-500 mt-1">Ej. 123 456 789</p>
                                </div>
                            </div>
                        </div>

                        <!-- Botón de envío -->
                        <div class="pt-4">
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white font-bold py-4 px-8 rounded-xl hover:from-blue-700 hover:to-blue-800 transform hover:-translate-y-1 hover:shadow-xl transition-all duration-300 text-lg">
                                <span class="mr-2">🚀</span>
                                Registrar mi cupón
                            </button>
                        </div>

                        <!-- Nota importante -->
                        <div class="bg-red-50 rounded-2xl p-4 border-l-4 border-red-400">
                            <p class="text-sm text-red-700 font-medium">
                                <span class="font-bold">Importante:</span> Todos los campos marcados con (*) son requeridos.
                            </p>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Información adicional -->
            <div class="hidden bg-amber-50 rounded-2xl p-6 border-l-4 border-amber-400" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-amber-100 rounded-xl flex items-center justify-center flex-shrink-0">
                        <span class="text-lg">💬</span>
                    </div>
                    <div>
                        <h3 class="font-bold text-amber-800 mb-2">¿Necesitas ayuda?</h3>
                        <p class="text-amber-700 text-sm leading-relaxed">
                            Si ya registraste tu cupón y no recibiste el acceso en tu bandeja de correo, o si tienes alguna duda, 
                            <a href="https://api.whatsapp.com/send/?phone=+34604369473&text=Hola%2C%20necesito%20ayuda%20con%20mi%20cup%C3%B3n" class="underline font-semibold hover:text-amber-600">escríbenos directamente por WhatsApp</a>.
                        </p>
                    </div>
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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-in-out'
        });
    </script>


</body>

</html>