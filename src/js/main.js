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
      document.getElementById("btn-up").classList.remove("hidden");
      document.getElementById("btn-contact").classList.remove("hidden");
    } else {
      if (scrollTop == 0) {
        header.classList.remove("bg-primary-color");
        header.classList.add("lg:bg-transparent");
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

  document.getElementById("btn-show-menu-mb").addEventListener("click", () => {
    document.getElementById("nav-menu-mobile").classList.toggle("hidden");
  });
  // if (!localStorage.getItem("reloaded")) {
  //   // Marcar que se ha recargado la página
  //   localStorage.setItem("reloaded", "true");

  //   // Recargar la página sin usar la caché
  //   location.reload();
  // } else {
  //   // Limpiar la bandera después de la recarga para permitir futuras recargas
  //   localStorage.removeItem("reloaded");
  // }
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
