// Sélectionnez les éléments HTML nécessaires
const carousel = document.querySelector(".carousel");
const images = carousel.querySelectorAll("img");
const prevButton = carousel.querySelector(".prev-button");
const nextButton = carousel.querySelector(".next-button");

// Définissez les variables nécessaires
let currentImageIndex = 0;
let isTransitioning = false;

// Définissez la fonction pour afficher l'image suivante
function showNextImage() {
  if (isTransitioning) {
    return;
  }
  isTransitioning = true;
  const currentImage = images[currentImageIndex];
  currentImage.classList.remove("active");
  currentImageIndex++;
  if (currentImageIndex >= images.length) {
    currentImageIndex = 0;
  }
  const nextImage = images[currentImageIndex];
  nextImage.classList.add("active");
  setTimeout(() => {
    currentImage.style.opacity = 0;
    nextImage.style.opacity = 1;
    isTransitioning = false;
  }, 1000);
}

// Définissez la fonction pour afficher l'image précédente
function showPrevImage() {
  if (isTransitioning) {
    return;
  }
  isTransitioning = true;
  const currentImage = images[currentImageIndex];
  currentImage.classList.remove("active");
  currentImageIndex--;
  if (currentImageIndex < 0) {
    currentImageIndex = images.length - 1;
  }
  const prevImage = images[currentImageIndex];
  prevImage.classList.add("active");
  setTimeout(() => {
    currentImage.style.opacity = 0;
    prevImage.style.opacity = 1;
    isTransitioning = false;
  }, 1000);
}

// Ajoutez les gestionnaires d'événements aux boutons de navigation
prevButton.addEventListener("click", showPrevImage);
nextButton.addEventListener("click", showNextImage);

// Affichez la première image
images[0].classList.add("active");