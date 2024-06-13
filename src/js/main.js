document.addEventListener("DOMContentLoaded", function () {
  AOS.init();

  const images = [
    "../../images/slider/imagen1.jpg",
    "../../images/slider/imagen2.jpg",
    "../../images/slider/imagen3.jpg",
    "../../images/slider/imagen4.jpg",
  ];
  let currentIndex = 0;

  function changeImage() {
    const activeImage = document.querySelector("#imageContainer img.active");
    const nextImage = document.querySelector(
      "#imageContainer img:not(.active)"
    );

    currentIndex = (currentIndex + 1) % images.length;
    nextImage.src = images[currentIndex];

    activeImage.classList.remove("active");
    nextImage.classList.add("active");
  }

  setInterval(changeImage, 3000);
});
