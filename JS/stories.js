function nextScene(id) {
    document.querySelectorAll('.screen').forEach(s => s.classList.remove('active'));
    document.getElementById(id).classList.add('active');
  }

  function goHome() {
    window.location.href = "../Games.html";
  }

  

  function showCongrats() {
    const name = document.getElementById('nameInput').value.trim();
    if (!name) return alert('Please enter your name');

    const jobs = [
      "High Priest", "Royal Scribe", "Temple Architect", "Pyramid Builder", "Tomb Keeper",
      "Falcon Trainer", "Oracle Interpreter", "Sun Chariot Rider", "Scarab Collector", "Nile Guardian"
    ];
    const randomJob = jobs[Math.floor(Math.random() * jobs.length)];

    document.getElementById('player-name').innerHTML = `<h2>Congratulations<br>${name} - ${randomJob}</h2>`;
    nextScene('congrats');
  }

  function downloadImage() {
    const target = document.querySelector('#congrats div');
    html2canvas(target).then(canvas => {
      const link = document.createElement('a');
      link.href = canvas.toDataURL('image/png');
      link.download = 'congratulations.png';
      link.click();
    });
  }