// Start door
const container = document.getElementById('container');
const image = document.getElementById('image');
const text = document.getElementById('text');

let interacted = false;
let typingInterval;

const message1 ="Step into the gateway and uncover Pharaonic wonders." ;


function typeText(message, callback) {
  text.innerHTML = ""; 
  let i = 0;
  typingInterval = setInterval(() => {
    text.innerHTML += message[i]; 
    i++;
    if (i >= message.length) {
      clearInterval(typingInterval);
      if (callback) callback();
    }
  }, 80);
}


window.onload = () => {
  typeText(message1);
};


container.addEventListener('click', () => {
  if (interacted) return;
  interacted = true;

  clearInterval(typingInterval);
  text.innerHTML = "";

  
  image.style.transform = 'scale(1.5)';
  image.style.opacity = '1.3';

  setTimeout(() => {
    window.location.href = "nav.html";
  }, 1500);
});

// End door
