// Start Book 

const swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 40,
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
        loop: true,
        slideToClickedSlide: true,
        slidesPerGroup: 1,




        autoplay: {
        delay: 1000,
        disableOnInteraction: false, 
        },

        speed: 1000,


        effect: 'slide', 
    });

    function openPopup(id) {
        document.getElementById(id).style.display = 'flex';
    }

    function closePopup(id) {
        document.getElementById(id).style.display = 'none';
    }


    // Function to toggle FAQ answers
    function toggleAnswer(index) {
        let answers = document.querySelectorAll('.faq-answer');
        answers[index].style.display = answers[index].style.display === 'block' ? 'none' : 'block';
    }

    // Function to handle support form submission
    function submitSupport() {
        alert("Your message has been sent successfully!");
        return false; 
    }

    // End Book 



