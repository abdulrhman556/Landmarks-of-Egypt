// Start Ancient

const cards = document.querySelectorAll(".card");

cards.forEach((card) => {
card.addEventListener("click", () => {
    alert("You clicked on " + card.querySelector("h2").innerText);
});
});

// Start Pages Ancient

const numberOfVisitorsInput = document.getElementById('number-of-visitors');
const totalPriceInput = document.getElementById('total-price');
const pricePerPerson = 30;

numberOfVisitorsInput.addEventListener('input', function () {
    const numberOfVisitors = parseInt(numberOfVisitorsInput.value, 10);
    const totalPrice = pricePerPerson * numberOfVisitors;
    totalPriceInput.value = totalPrice;
});

const counters = document.querySelectorAll(".counter");
const speed = 40;

counters.forEach((counter) => {
const updateCount = () => {
    const target = +counter.getAttribute("data-target");
    const count = +counter.innerText;

    const increment = Math.ceil(target / speed);

    if (count < target) {
    counter.innerText = count + increment;
    setTimeout(updateCount, 30);
    } else {
    counter.innerText = target + " +";
    }
};

updateCount();
});


const reveals = document.querySelectorAll(".reveal");

window.addEventListener("scroll", () => {
for (let i = 0; i < reveals.length; i++) {
    const windowHeight = window.innerHeight;
    const revealTop = reveals[i].getBoundingClientRect().top;
    const revealPoint = 150;

    if (revealTop < windowHeight - revealPoint) {
    reveals[i].classList.add("active");
}
}
});

window.addEventListener("load", () => {
    for (let i = 0; i < reveals.length; i++) {
    setTimeout(() => {
            reveals[i].classList.add("active");
       }, i * 200);
    }
});

// End Pages Ancient

// End Ancient
