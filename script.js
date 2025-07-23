// Group images by category
const categories = {
    "Students in Classroom": [
        { src: "Image/3.png", caption: "Students attending a lecture" },
        { src: "Image/6.png", caption: "Interactive teaching session" },
        { src: "Image/"}
    ],
    "Food Drive": [
        { src: "Image/4.jpg", caption: "Food distribution" },
        { src: "Image/7.jpg", caption: "Volunteers organizing food" },
        { src: "Image/8.jpg", caption: "Happy recipients" },
    ],
    "Extracurricular Activities": [
        { src: "Image/5.png", caption: "Sports activity" },
        { src: "Image/9.png", caption: "Art competition" },
    ],
};

let currentCategory = [];
let currentIndex = 0;

function openLightbox(category, index) {
    currentCategory = categories[category];
    currentIndex = index;

    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");
    const lightboxCaption = document.getElementById("lightbox-caption");

    lightbox.style.display = "block";
    lightboxImg.src = currentCategory[currentIndex].src;
    lightboxCaption.textContent = currentCategory[currentIndex].caption;
}

function closeLightbox() {
    document.getElementById("lightbox").style.display = "none";
}

function changeImage(direction) {   
    currentIndex += direction;

    if (currentIndex < 0) {
        currentIndex = currentCategory.length - 1;
    } else if (currentIndex >= currentCategory.length) {
        currentIndex = 0;
    }

    const lightboxImg = document.getElementById("lightbox-img");
    const lightboxCaption = document.getElementById("lightbox-caption");

    lightboxImg.src = currentCategory[currentIndex].src;
    lightboxCaption.textContent = currentCategory[currentIndex].caption;
}
