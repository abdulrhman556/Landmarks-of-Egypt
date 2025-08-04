// Start Login && Register.

function Login_socialLogin(provider) {
alert(
    "Loging in with " +
        provider.charAt(0).toUpperCase() +
        provider.slice(1) +
        "... (Feature coming soon!)"
    );
}

function Login_showForm(formId) {
    document.querySelectorAll(".Login-container1").forEach((form) => {
        form.style.display = "none";
    });

    document.getElementById(formId).style.display = "block";
}

function Login_toggleForm() {
    Login_showForm("Login-login-box");
}

// End Login && Register.

// Start Nav
document.body.addEventListener('click', () => {

    for (let i = 0; i < 20; i++) {

        let dust = document.createElement('div');
        dust.classList.add('dust');
        dust.style.left = `${Math.random() * 100}vw`;
        dust.style.top = `${Math.random() * 100}vh`;
        document.body.appendChild(dust);
        setTimeout(() => {
            dust.remove();
        }, 1000);
    }
});

const overlay = document.getElementById('overlay');
const cursor = document.getElementById('cursorLight');
document.addEventListener('mousemove', (e) => {
    cursor.style.left = e.pageX + 'px';
    cursor.style.top = e.pageY + 'px';
    
    overlay.style.opacity = 0;
    setTimeout(() => {
        overlay.style.display = 'none';
    }, 5000);
});

setTimeout(() => {
    overlay.style.opacity = 0;
    setTimeout(() => {
        overlay.style.display = 'none';
    }, 8000);
}, 800);

// End Nav
// Start Games 

const swiper = new Swiper('.mySwiper', {
  slidesPerView: 1,
  centeredSlides: true,
  loop: true,
  navigation: {
    nextEl: '.Games-swiper-button-next',
    prevEl: '.Games-swiper-button-prev',
  },
  allowTouchMove: false, // امسحي دي لو عايزة تخليه قابل للسحب باللمس
});

// End Games 
