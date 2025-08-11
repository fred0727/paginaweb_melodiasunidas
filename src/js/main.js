let lastScrollTop = 0;
const header = document.getElementById("header");
window.addEventListener("scroll", function () {
  let scrollTop = document.documentElement.scrollTop;

  const width = window.innerWidth;
  if (width < 1024) {
    if (scrollTop > lastScrollTop) {
      // Scroll down
      header.classList.add("fixed");
      document.getElementById("btn-up").classList.remove("hidden");
      document.getElementById("btn-contact").classList.remove("hidden");
    } else {
      if (scrollTop == 0) {
        header.classList.remove("fixed");
        document.getElementById("btn-up").classList.add("hidden");
        document.getElementById("btn-contact").classList.add("hidden");
      }
      // Scroll up
    }
  } else {
    let lastScrollTop = 0;
    if (scrollTop > lastScrollTop) {
      // Scroll down
      header.classList.remove("lg:bg-transparent");
      header.classList.add("bg-primary-color");
      header.classList.add("shadow-md");
      document.getElementById("btn-up").classList.remove("hidden");
      document.getElementById("btn-contact").classList.remove("hidden");
    } else {
      if (scrollTop == 0) {
        header.classList.remove("bg-primary-color");
        header.classList.add("lg:bg-transparent");
        header.classList.remove("shadow-md");
        document.getElementById("btn-up").classList.add("hidden");
        document.getElementById("btn-contact").classList.add("hidden");
      }
      // Scroll up
    }
  }

  lastScrollTop = scrollTop;

  document.getElementById("scrollLeft").addEventListener("click", function () {
    document.getElementById("section-div-videos").scrollBy({
      left: -275, // Ajusta este valor según lo necesario
      behavior: "smooth",
    });
  });

  document.getElementById("scrollRight").addEventListener("click", function () {
    document.getElementById("section-div-videos").scrollBy({
      left: 275, // Ajusta este valor según lo necesario
      behavior: "smooth",
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  AOS.init();
  // Iniciar el slider en el primer texto centrado
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelector(".slider-container-slider").style.transform =
      "translateX(0)";
  });
});

// Funcionalidad del menú móvil - Envuelto en DOMContentLoaded para garantizar que los elementos estén disponibles
document.addEventListener('DOMContentLoaded', function() {
  // Mostrar/ocultar menú móvil
  const btnShowMenu = document.getElementById("btn-show-menu-mb");
  const btnCloseMenu = document.getElementById("btn-close-menu-mb");
  const navMenuMobile = document.getElementById("nav-menu-mobile");

  if (btnShowMenu && navMenuMobile) {
    btnShowMenu.addEventListener("click", (e) => {
      e.preventDefault();
      console.log("Botón hamburguesa clickeado"); // Para debug
      navMenuMobile.classList.remove("hidden");
      navMenuMobile.classList.add("flex");
      document.body.classList.add("overflow-hidden");
    });
  }

  if (btnCloseMenu && navMenuMobile) {
    btnCloseMenu.addEventListener("click", (e) => {
      e.preventDefault();
      console.log("Botón cerrar clickeado"); // Para debug
      navMenuMobile.classList.add("hidden");
      navMenuMobile.classList.remove("flex");
      document.body.classList.remove("overflow-hidden");
    });
  }

  if (navMenuMobile) {
    // Cerrar menú haciendo clic en el overlay
    navMenuMobile.addEventListener("click", (e) => {
      if (e.target === e.currentTarget || e.target.classList.contains('bg-black/50')) {
        navMenuMobile.classList.add("hidden");
        navMenuMobile.classList.remove("flex");
        document.body.classList.remove("overflow-hidden");
      }
    });

    // Cerrar menú al hacer clic en cualquier enlace
    const menuLinks = navMenuMobile.querySelectorAll("a");
    menuLinks.forEach(link => {
      link.addEventListener("click", () => {
        navMenuMobile.classList.add("hidden");
        navMenuMobile.classList.remove("flex");
        document.body.classList.remove("overflow-hidden");
      });
    });
  }

  // Funcionalidad mejorada del video de audiciones
  const videoThumbnail = document.getElementById('video-thumbnail');
  const videoElement = document.getElementById('video-audicion');
  const playOverlay = document.getElementById('play-overlay');

  if (videoThumbnail && videoElement && playOverlay) {
    const showVideo = () => {
      videoThumbnail.classList.add('hidden');
      playOverlay.classList.add('hidden');
      videoElement.classList.remove('hidden');
      videoElement.play();
    };

    videoThumbnail.addEventListener('click', showVideo);
    playOverlay.addEventListener('click', showVideo);
  }
  const thumbnail = document.getElementById("video-thumbnail");
  const video = document.getElementById("video-audicion");

  thumbnail.addEventListener("click", () => {
    thumbnail.style.display = "none";
    video.style.display = "block";
    video.play();
  });
});

function changeProfe(id) {
  console.log(id);
  const sliders = document.querySelectorAll(".slider-container-slide");

  // Añadir la clase "hidden" a todas las diapositivas
  sliders.forEach((element) => {
    element.classList.add("hidden");
  });

  // Eliminar la clase "hidden" de la diapositiva específica
  const selectedSlide = document.getElementById("profe-" + id);
  if (selectedSlide) {
    selectedSlide.classList.remove("hidden");
  } else {
    console.error("No se encontró la diapositiva con ID: " + id);
  }
}

function viewCertificado(id) {
  let nomimage = id;
  document.getElementById("popupCertificados").classList.toggle("hidden");
  document.getElementById("image-" + id).classList.toggle("hidden");
  document.getElementById("btn-close-popup").addEventListener("click", () => {
    document.getElementById("image-" + nomimage).classList.add("hidden");
    document.getElementById("popupCertificados").classList.add("hidden");
  });
}

document
  .getElementById("contactForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevenir el envío del formulario

    // Obtener los datos del formulario
    const formData = new FormData(this);

    // Enviar los datos mediante fetch
    fetch("sendmail.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json()) // O .json() si el servidor devuelve JSON
      .then((data) => {
        console.log("Respuesta del servidor:", data);
        if (data.status == "success") {
          Swal.fire({
            title: "Gracias!",
            text: data.message,
            icon: "success",
            timer: 3500,
          });
          event.target.reset();
        } else {
          Swal.fire({
            title: "Error",
            text: data.message,
            icon: "warning",
            timer: 3500,
          });
        }
      })
      .catch((error) => {
        console.error("Error al enviar el formulario:", error);
      });
  });

function changeProfe(profe) {
  console.log(profe);
  if (profe == "juancarlos") {
    document.getElementById("profe-juancarlos").classList.remove("hidden");
    document.getElementById("profe-santiago").classList.add("hidden");
    document.getElementById("profe-joseantonio").classList.add("hidden");
    document.getElementById("profe1").classList.remove("grayscale");
    document.getElementById("profe2").classList.add("grayscale");
    document.getElementById("profe3").classList.add("grayscale");
  } else {
    if (profe == "santiago") {
      document.getElementById("profe-santiago").classList.remove("hidden");
      document.getElementById("profe-juancarlos").classList.add("hidden");
      document.getElementById("profe-joseantonio").classList.add("hidden");
      document.getElementById("profe2").classList.remove("grayscale");
      document.getElementById("profe1").classList.add("grayscale");
      document.getElementById("profe3").classList.add("grayscale");
    } else {
      document.getElementById("profe-joseantonio").classList.remove("hidden");
      document.getElementById("profe-santiago").classList.add("hidden");
      document.getElementById("profe-juancarlos").classList.add("hidden");
      document.getElementById("profe3").classList.remove("grayscale");
      document.getElementById("profe2").classList.add("grayscale");
      document.getElementById("profe1").classList.add("grayscale");
    }
  }
}

function changeAdmin(admin) {
  console.log(admin);
  if (admin == "manuel") {
    document.getElementById("admin-manuel").classList.remove("hidden");
    document.getElementById("admin-ana").classList.add("hidden");
    document.getElementById("admin-lucia").classList.add("hidden");
    document.getElementById("admin-marina").classList.add("hidden");
    document.getElementById("admin1").classList.remove("grayscale");
    document.getElementById("admin2").classList.add("grayscale");
    document.getElementById("admin3").classList.add("grayscale");
    document.getElementById("admin4").classList.add("grayscale");
  } else {
    if (admin == "ana") {
      document.getElementById("admin-ana").classList.remove("hidden");
      document.getElementById("admin-manuel").classList.add("hidden");
      document.getElementById("admin-lucia").classList.add("hidden");
      document.getElementById("admin-marina").classList.add("hidden");
      document.getElementById("admin2").classList.remove("grayscale");
      document.getElementById("admin1").classList.add("grayscale");
      document.getElementById("admin3").classList.add("grayscale");
      document.getElementById("admin4").classList.add("grayscale");
    } else {
      if (admin == "lucia") {
        document.getElementById("admin-lucia").classList.remove("hidden");
        document.getElementById("admin-ana").classList.add("hidden");
        document.getElementById("admin-manuel").classList.add("hidden");
        document.getElementById("admin-marina").classList.add("hidden");
        document.getElementById("admin3").classList.remove("grayscale");
        document.getElementById("admin1").classList.add("grayscale");
        document.getElementById("admin2").classList.add("grayscale");
        document.getElementById("admin4").classList.add("grayscale");
      } else {
        document.getElementById("admin-marina").classList.remove("hidden");
        document.getElementById("admin-ana").classList.add("hidden");
        document.getElementById("admin-manuel").classList.add("hidden");
        document.getElementById("admin-lucia").classList.add("hidden");
        document.getElementById("admin4").classList.remove("grayscale");
        document.getElementById("admin1").classList.add("grayscale");
        document.getElementById("admin2").classList.add("grayscale");
        document.getElementById("admin3").classList.add("grayscale");
      }
    }
  }
}

function viewText(circlenumber) {
  console.log(circlenumber);
  circles = document.querySelectorAll(".message-circle");

  circles.forEach((circle) => {
    if (circle.classList.contains("hidden")) {
      // Si el círculo ya está oculto, no hacemos nada
    } else {
      // Ocultamos el círculo y le agregamos la clase de opacidad
      circle.classList.add("hidden");
      circle.classList.remove("opacity-100");
      circle.classList.add("opacity-0");
    }
  });

  // Mostramos el círculo correspondiente
  document.getElementById("circle-" + circlenumber).classList.remove("hidden");
  document
    .getElementById("circle-" + circlenumber)
    .classList.remove("opacity-0");
  document
    .getElementById("circle-" + circlenumber)
    .classList.add("opacity-100");
}

function closeText() {
  circles = document.querySelectorAll(".message-circle");

  circles.forEach((circle) => {
    if (circle.classList.contains("hidden")) {
      // Si el círculo ya está oculto, no hacemos nada
    } else {
      // Ocultamos el círculo y le agregamos la clase de opacidad
      circle.classList.add("hidden");
      circle.classList.add("opacity-0");
    }
  });
}


function viewvideo(id, video) {
  document.getElementById(id).style.display = 'none';

  document.getElementById(video).classList.remove('hidden');
  // Carga y reproduce el video
  document.getElementById(video).play();
}