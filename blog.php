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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="main.css" />
</head>
<?php
$pagina = "nosotros";
?>

<body class="relative">
    <!-- Encabezado -->
    <?php include("header.php") ?>

    <!-- Portada -->
    <section class="flex bg-black/30 h-[30vh] sm:h-[40vh] lg:h-[60vh]">
        <!-- <img src="./images/portada.jpeg" alt="portadanosotros" class="w-full object-cover"> -->
        <video src="./videos/videoblog2.mp4" autoplay muted loop class="w-full object-cover"></video>
    </section>

    <section>

        <div class=" h-24 " data-aos="fade-up" data-aos-duration="1000">

            <div class="absolute top-5 right-4">
                <button id="open-modal" class="bg-primary-color rounded-full px-4 py-1 flex justify-center items-center text-white font-['Oswald'] ">iniciar sesion </button>

            </div>

        </div>



        <div id="modal-component-container" class="hidden fixed inset-0">
            <div class="modal-flex-container
      flex
      items-end
      justify-center
      min-h-screen
      pt-4
      px-4
      pb-20
      text-center
      sm:block sm:p-0">
                <div class="modal-bg-container fixed inset-0 bg-gray-700 bg-opacity-75">

                </div>
                <div class="modal-space-container
         hidden
         sm:inline-block
         sm:align-middle
         sm:h-screen
        "></div>
                <div id="modal-container" class="
        modal-container 
        inline-block 
        align-bottom 
        bg-white 
        rounded-lg 
        text-left 
        overflow-hidden 
        shadow-xl
        transform
        transition-all
        sm:my-8
        sm:align-middle
        sm:max-w-lg
        w-full
        ">
        <form action="connect.php" method="post">
                    <div class="modal-wrapper bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="modal-wrapper-flex sm:flex sm:items-start">

                            <div class=" modal-icon 
                    mx-auto 
                    flex-shrink-0 flex 
                    items-center 
                    justify-center 
                    h-12 
                    w-12
                    rounded-full
                    bg-blue-100
                    sm:mx-0 sm:h-10 sm:w-10
                     ">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#3480f9">
                                    <path d="M120-160v-112q0-34 17.5-62.5T184-378q62-31 126-46.5T440-440q20 0 40 1.5t40 4.5q-4 58 21 109.5t73 84.5v80H120ZM760-40l-60-60v-186q-44-13-72-49.5T600-420q0-58 41-99t99-41q58 0 99 41t41 99q0 45-25.5 80T790-290l50 50-60 60 60 60-80 80ZM440-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm300 80q17 0 28.5-11.5T780-440q0-17-11.5-28.5T740-480q-17 0-28.5 11.5T700-440q0 17 11.5 28.5T740-400Z" />
                                </svg>
                            </div>

                            <div class="
                    modal-content
                    text-center
                    mt-3
                    sm:mt-0 sm:ml-4 sm:text-left
                    ">
                                <h3 class="text-xl font-medium text-gray-700">Iniciar Sesión</h3>
                                <div class="modal-text mt-2">
                                    <p class="text-gray-500 text-sm">

                                    <div action="" class="space-y-6 text-gray-700 ">

                                        <div class="relative ">
                                            <div class="absolute top-1 left-1 bg-white-medium rounded-md p-2 flex items-center justify-center text-blue-300 ">
                                                <i class="fa-solid fa-envelope-open"></i>
                                            </div>
                                            <input type="email" placeholder="Usuario" class="w-80 border-solid border-2 border-blue-300/50 bg-white-ligth py-2 px-12 
                    rounded-md ring-blue-500/50 focus:bg-red focus:outline-none focus:ring-1  focus:drop-shadow-xl" name="email"/>
                                        </div>

                                        <div class="relative">
                                            <div class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-blue-300">
                                                <i class="fa-solid fa-lock"></i>
                                            </div>
                                            <input type="text" placeholder="Contraseña" class="w-80 border-solid border-2 border-blue-300/50 bg-white-light py-2 px-12 
                    rounded-md focus:bg-black-dark focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-xl" name="password"/>
                                        </div>

                                    </div>

                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-actions
             bg-gray-50
              px-4 
              py-3 
              sm:px-6 sm:flex sm:flex-row-reverse">
                        <button type="submit" class="
                w-full 
                inline-flex 
                justify-center
                rounded-md
                border border-transparent
                shadow-md
                px-4
                py-2
                bg-blue-500 
                font-medium
                text-white
                hover:bg-blue-600

                focus:outline-none
                focus:ring-2
                focus:ring-offset-2
                focus:ring-blue-200
                sm:mt-0 sm:ml-3 sm:w-auto

                ">iniciar sesion</button>

                        <button id="close-modal"
                            class="
                   w-full 
                inline-flex 
                justify-center
                rounded-md
                border border-gray-300
                shadow-md
                px-4
                py-2
                mt-3
                bg-white
                font-medium
                text-gray-700
                hover:bg-gray-100
                focus:outline-none
                focus:ring-2
                focus:ring-offset-2
                focus:ring-gray-200
                sm:mt-0 sm:ml-3 sm:w-auto
                ">cancelar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            const closeButton = document.querySelector("#close-modal");
            const openButton = document.querySelector("#open-modal");
            const modalContainer = document.querySelector("#modal-component-container");
            const modal = document.querySelector("#modal-container");

            openButton.addEventListener("click", () => {
                openModal();
            });

            closeButton.addEventListener("click", () => {
                closeModal();
            });

            function openModal() {
                showAndHide(modalContainer,
                    ["block", ],
                    ["hidden"]
                );
                showAndHide(modal, ["modal-scaleIn"], ["modal-scaleOut"]);

            }

            function closeModal() {
                showAndHide(modalContainer, ["bg-fadeOut"], ["bg-fadeIn"]);
                showAndHide(modal, ["modal-scaleOut"], ["modal-scaleIn"]);

                setTimeout(() => {
                    showAndHide(modalContainer, ["hidden"], ["block"]);

                }, 500);

            }

            function showAndHide(element, classesToAdd, classessToRemove) {

                element.classList.remove(...classessToRemove);
                element.classList.add(...classesToAdd);
            }
        </script>

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