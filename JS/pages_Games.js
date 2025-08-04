  // starte puzzle

const questions = [
    { q: "Who built the pyramids?", options: ["Aliens", "Pharaohs", "Greeks", "Romans"], answer: 1 },
    { q: "What is the Sphinx?", options: ["A temple", "A pyramid", "A statue", "A god"], answer: 2 },
    { q: "Where is the Valley of the Kings?", options: ["Cairo", "Giza", "Luxor", "Aswan"], answer: 2 },
    { q: "What is papyrus?", options: ["A drink", "A scroll", "A god", "A temple"], answer: 1 },
    { q: "Who was Tutankhamun?", options: ["A general", "A god", "A pharaoh", "A builder"], answer: 2 },
    { q: "Which river flows through Egypt?", options: ["Amazon", "Nile", "Mississippi", "Yangtze"], answer: 1 },
    { q: "What did Egyptians use to write?", options: ["Pens", "Paint", "Chisels", "Hieroglyphs"], answer: 3 },
    { q: "Who is the sun god?", options: ["Ra", "Osiris", "Anubis", "Isis"], answer: 0 },
    { q: "Which god had a jackal head?", options: ["Ra", "Horus", "Anubis", "Set"], answer: 2 },
    { q: "What color was often used for royalty?", options: ["Blue", "Red", "Gold", "Green"], answer: 2 },
    { q: "What protected tombs?", options: ["Guards", "Animals", "Spells", "Locks"], answer: 2 },
    { q: "What was used in mummification?", options: ["Salt", "Ice", "Fire", "Water"], answer: 0 },
    { q: "Where did pharaohs live?", options: ["Huts", "Palaces", "Pyramids", "Temples"], answer: 1 },
    { q: "Which metal was precious?", options: ["Iron", "Copper", "Gold", "Bronze"], answer: 2 },
    { q: "Who is the god of the afterlife?", options: ["Ra", "Osiris", "Thoth", "Horus"], answer: 1 },
    { q: "What is a scarab?", options: ["A bird", "A beetle", "A god", "A weapon"], answer: 1 },
    { q: "Who was Nefertiti?", options: ["A queen", "A goddess", "A writer", "A slave"], answer: 0 },
    { q: "What did pyramids house?", options: ["Soldiers", "Servants", "Books", "Tombs"], answer: 3 },
    { q: "How were the dead judged?", options: ["Quiz", "Heart weighed", "Trial", "Fight"], answer: 1 },
    { q: "What was a symbol of power?", options: ["Scepter", "Sandals", "Hat", "Scroll"], answer: 0 }
  ];

  let currentQuestion = 0;
  let score = 0;
  let answered = false;

  function startQuiz() {
    document.getElementById("intro").style.display = "none";
    document.getElementById("startBtn").style.display = "none";
    document.getElementById("quiz").style.display = "block";
    document.getElementById("quizContainer").classList.add("active");
    showQuestion();
  }

  function showQuestion() {
    answered = false;
    const q = questions[currentQuestion];
    document.getElementById("question").textContent = q.q;
    const optionsDiv = document.getElementById("options");
    optionsDiv.innerHTML = "";
    q.options.forEach((opt, index) => {
      const btn = document.createElement("button");
      btn.textContent = opt;
      btn.onclick = () => checkAnswer(index, btn);
      optionsDiv.appendChild(btn);
    });
  }

  function checkAnswer(selected, btn) {
    if (answered) return;
    answered = true;
    const q = questions[currentQuestion];
    const buttons = document.querySelectorAll(".Puzzle-options button");
    buttons.forEach((b, i) => {
      if (i === q.answer) b.classList.add("correct");
      else if (i === selected) b.classList.add("wrong");
      b.disabled = true;
    });
    if (selected === q.answer) {
      score++;
      document.getElementById("nextBtn").style.display = "block";
    } else {
      endGame(false);
    }
  }

  function nextQuestion() {
    currentQuestion++;
    document.getElementById("nextBtn").style.display = "none";
    if (currentQuestion < questions.length) {
      showQuestion();
    } else {
      endGame(true);
    }
  }

  function endGame(won) {
    document.getElementById("quiz").style.display = "none";
    document.getElementById("resultSection").style.display = "block";
    if (won) {
      document.getElementById("result").textContent = "Congratulations!";
      document.getElementById("feedback").textContent = `You answered ${score} out of ${questions.length} correctly.`;
    } else {
      document.getElementById("result").textContent = "Better luck next time.";
      document.getElementById("feedback").textContent = `You answered ${score} out of ${questions.length} correctly.`;
    }
  }

  function restartGame() {
    currentQuestion = 0;
    score = 0;
    document.getElementById("resultSection").style.display = "none";
    document.getElementById("quiz").style.display = "block";
    showQuestion();
  }

  function goHome() {
    window.location.href= "../Games.html";
  }

  // End puzzle


  // start name

const jobs = [
  "High Priest of Amun", "Royal Architect", "Pharaoh's Scribe", "Sun God Worshipper",
  "Nile Guardian", "Pyramid Engineer", "Royal Chef", "Scarab Keeper",
  "Astrologer of the Temple", "Master of Mummification"
];

const facts = [
  "Did you know? Ramses II ruled for over 60 years.",
  "Cleopatra spoke several languages fluently.",
  "The Great Pyramid was the tallest structure for 3,800 years.",
  "Pharaohs were considered gods on earth.",
  "Tutankhamun’s tomb was discovered in 1922.",
  "The Eye of Horus was a symbol of protection.",
  "Hieroglyphs are made up of over 700 characters.",
  "Cats were sacred animals in ancient Egypt.",
  "The Nile was the lifeblood of Egypt.",
  "Many pharaohs married their siblings to keep bloodlines pure."
];

const symbols = {
  A: '𓄿', B: '𓃀', C: '𓍿', D: '𓂧', E: '𓇋', F: '𓆑', G: '𓎼', H: '𓉔',
  I: '𓇋', J: '𓆓', K: '𓎡', L: '𓃭', M: '𓅓', N: '𓈖', O: '𓂝', P: '𓊪',
  Q: '𓏘', R: '𓂋', S: '𓋴', T: '𓏏', U: '𓅱', V: '𓆑', W: '𓅱', X: '𓐍',
  Y: '𓇌', Z: '𓊃'
};

function toHieroglyph(name) {
  return name.toUpperCase().split('').map(char => symbols[char] || char).join(' ');
}

function expandBox() {
  const box = document.getElementById("box");
  const nameEn = document.getElementById("nameEn").value.trim();

  if (!nameEn) {
    alert("Please enter your name in English.");
    return;
  }

  
  box.classList.add("expanded");


  setTimeout(() => generate(nameEn), 500);
}

function generate(nameEn) {
  const hiero = toHieroglyph(nameEn);
  const job = jobs[Math.floor(Math.random() * jobs.length)];
  const fact = facts[Math.floor(Math.random() * facts.length)];

  document.getElementById("hieroName").textContent = `𓂀 Your Pharaoh Name: ${hiero}`;
  document.getElementById("job").textContent = `𓉔 Your Role: ${job}`;
  document.getElementById("fact").textContent = `𓏠 ${fact}`;

  document.getElementById("result").style.display = "block";
}

  // end name

  //start search

  // Show icons when mouse is near

  const icons = document.querySelectorAll('.icon');
  icons.forEach(icon => {
    icon.addEventListener('mouseenter', () => {
      icon.classList.add('visible');
    });
    icon.addEventListener('mouseleave', () => {
      icon.classList.remove('visible');
    });
  });

  function openPopup(videoSrc, title) {
    const popup = document.getElementById('popup');
    const video = document.getElementById('popupVideo');
    const videoTitle = document.getElementById('videoTitle');

    // Set video source and title

    video.src = videoSrc;
    videoTitle.innerText = title;

    popup.style.display = 'flex';
  }

  function closePopup() {
    const popup = document.getElementById('popup');
    const video = document.getElementById('popupVideo');
    video.pause();
    video.currentTime = 0;
    popup.style.display = 'none';
  }

  function goFullscreen() {
    const video = document.getElementById('popupVideo');
    if (video.requestFullscreen) {
      video.requestFullscreen();
    } else if (video.webkitRequestFullscreen) {
      video.webkitRequestFullscreen();
    } else if (video.msRequestFullscreen) {
      video.msRequestFullscreen();
    }
  }

  //end search

  // start Stories 

  new Swiper('.mySwiper', {
    slidesPerView: 1,
    centeredSlides: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    loop: true,
    allowTouchMove: false 
  });

  // end stories 