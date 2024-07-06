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
