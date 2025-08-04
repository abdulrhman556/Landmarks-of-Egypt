// Start Myths

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 20,
    loop: true,
    navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
},
});

document.getElementById("story-type").addEventListener("change", function () {
let selectedCategory = this.value;
let slides = document.querySelectorAll(".swiper-slide");

slides.forEach((slide) => {
if (selectedCategory === "all") {

        slide.style.display = "flex";

} else {
        slide.style.display =
        slide.getAttribute("data-category") === selectedCategory
        ? "flex"
        : "none";
    }
});
});

// End Myths