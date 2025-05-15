<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Zyplin Komik</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f0f0f0;
      color: #333;
    }
    header {
      background-color: #00b894;
      color: white;
      padding: 20px;
      text-align: center;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    nav {
      background-color: #00cec9;
      padding: 10px 20px;
      display: flex;
      justify-content: center;
      gap: 20px;
    }
    nav a {
      color: white;
      text-decoration: none;
      font-weight: 600;
    }
    .slider-container {
      width: 100%;
      overflow: hidden;
      position: relative;
      max-height: 500px;
    }
    .slider {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }
    .slider img {
      width: 100vw;
      height: auto;
      object-fit: cover;
      flex-shrink: 0;
    }
    .hero-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      padding: 15px 25px;
      border-radius: 10px;
      font-size: 2em;
      white-space: nowrap;
    }
    .slider-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0, 0, 0, 0.5);
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
      font-size: 1.5em;
      z-index: 10;
    }
    .prev { left: 10px; }
    .next { right: 10px; }
    .dots {
      text-align: center;
      margin-top: 10px;
    }
    .dot {
      display: inline-block;
      width: 12px;
      height: 12px;
      margin: 0 5px;
      background-color: #bbb;
      border-radius: 50%;
      cursor: pointer;
    }
    .dot.active { background-color: #00cec9; }
    .content {
      max-width: 1100px;
      margin: auto;
      padding: 40px 20px;
      position: relative;
    }
    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
    }
    .card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.3s;
      position: relative;
    }
    .card:hover { transform: translateY(-5px); }
    .card img {
      width: 100%;
      height: 300px;
      object-fit: cover;
    }
    .card h3 {
      padding: 10px;
      font-size: 1.2em;
    }
    .card i:hover {
      transform: scale(1.3);
    }
    .audio-toggle {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background: #fff;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
      cursor: pointer;
      z-index: 999;
    }
    footer {
      text-align: center;
      background-color: #00b894;
      color: white;
      padding: 15px;
      margin-top: 40px;
    }
    .author-section {
      text-align: center;
      margin-top: 60px;
      padding-bottom: 20px;
    }
    .author-section img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      margin-bottom: 10px;
    }
    .author-section h3 {
      font-size: 1.1em;
      color: #333;
    }
    .author-section p {
      font-size: 0.9em;
      color: #555;
    }
    .social-icons {
      margin-top: 10px;
    }
    .social-icons a {
      margin: 0 10px;
      text-decoration: none;
    }
    .social-icons i {
      font-size: 1.5em;
    }
  </style>
</head>
<body>

<header>
  <h1>Zyplin Komik <i class="fas fa-heart"></i></h1>
</header>

<nav>
  <a href="#"><i class="fas fa-home"></i> Beranda</a>
  <a href="#"><i class="fas fa-fire"></i> Populer</a>
  <a href="#"><i class="fas fa-th"></i> Genre</a>
  <a href="#"><i class="fas fa-info-circle"></i> Tentang</a>
</nav>

<div class="slider-container">
  <button class="slider-button prev" onclick="moveSlide(-1)">&#10094;</button>
  <div class="slider" id="slider">
    <img src="images/utama.jpg" alt="Slide 1">
    <img src="images/utama3.jpg" alt="Slide 2">
    <img src="images/utama4.jpg" alt="Slide 3">
  </div>
  <button class="slider-button next" onclick="moveSlide(1)">&#10095;</button>
  <div class="hero-text">Temukan Komik Seru Setiap Hari!</div>
</div>

<div class="dots">
  <span class="dot" onclick="goToSlide(0)"></span>
  <span class="dot" onclick="goToSlide(1)"></span>
  <span class="dot" onclick="goToSlide(2)"></span>
</div>

<section class="content">
  <h2><i class="fas fa-star"></i> Komik Populer <i class="fas fa-book-reader" style="color: #fd79a8;"></i></h2>
  <div class="gallery">
    <div class="card">
      <div style="position: absolute; top: 10px; right: 10px;">
        <i class="fas fa-fire" style="color: #e17055; font-size: 1.2em; transition: transform 0.3s;" title="Solo Leveling 🔥"></i>
      </div>
      <img src="images/solev.jpg" alt="Solo Leveling">
      <h3><i class="fas fa-dragon" style="color:#6c5ce7;"></i> Solo Leveling</h3>
    </div>

    <div class="card">
      <div style="position: absolute; top: 10px; right: 10px;">
        <i class="fas fa-bolt" style="color: #fdcb6e; font-size: 1.2em; transition: transform 0.3s;" title="Lookism ⚡"></i>
      </div>
      <img src="images/lookism.jpg" alt="Lookism">
      <h3><i class="fas fa-user-ninja" style="color:#e17055;"></i> Lookism</h3>
    </div>

    <div class="card">
      <div style="position: absolute; top: 10px; right: 10px;">
        <i class="fas fa-brain" style="color: #00cec9; font-size: 1.2em; transition: transform 0.3s;" title="Omniscient Reader 🧠"></i>
      </div>
      <img src="images/omnis.jpg" alt="Omniscient Reader">
      <h3><i class="fas fa-eye" style="color:#00cec9;"></i> Omniscient Reader</h3>
    </div>

    <div class="card">
      <div style="position: absolute; top: 10px; right: 10px;">
        <i class="fas fa-crosshairs" style="color: #d63031; font-size: 1.2em; transition: transform 0.3s;" title="Killer Peter 🎯"></i>
      </div>
      <img src="images/peter.jpg" alt="Killer Peter">
      <h3><i class="fas fa-skull" style="color:#d63031;"></i> Killer Peter</h3>
    </div>
  </div>

  <div style="margin-top: 40px; text-align: center">
    <h2><i class="fas fa-play-circle"></i> Cuplikan Komik <i class="fas fa-film" style="color: #0984e3;"></i></h2>
    <p style="margin-top: 10px; font-size: 1em; color: #555;">
      <i class="fas fa-video"></i> Tonton cuplikan singkat berisi momen seru dari beberapa komik populer yang sedang trending di Zyplin Komik.
    </p>
    <video width="80%" controls autoplay muted loading="lazy" style="border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.2); margin-top: 20px;">
      <source src="video/vidsol.mp4" type="video/mp4">
      Browser Anda tidak mendukung pemutaran video.
    </video>
  </div>
</section>

<div class="audio-toggle" onclick="toggleAudio()">
  <i id="audioIcon" class="fas fa-volume-up"></i>
</div>

<audio id="backgroundAudio" autoplay loop>
  <source src="audio/billie.mp3" type="audio/mpeg">
  Browser Anda tidak mendukung audio.
</audio>

<div class="author-section">
  <img src="images/author.jpg" alt="Author">
  <h3><i class="fas fa-user-astronaut" style="color:#6c5ce7;"></i> Website dibuat oleh <strong style="color:#00b894">Ibrahim Ofick</strong></h3>
  <p><i class="fas fa-code"></i> Powered with ❤️ using HTML, CSS, and Font Awesome</p>
  <div class="social-icons">
    <a href="https://github.com/zyplin" target="_blank"><i class="fab fa-github"></i></a>
    <a href="https://www.instagram.com/ibrahim_opik02/" target="_blank"><i class="fab fa-instagram" style="color:#d63384;"></i></a>
    <a href="mailto:kepocuy5@gmail.com"><i class="fas fa-envelope" style="color:#0984e3;"></i></a>
  </div>
</div>

<footer>
  <p>&copy; 2025 Zyplin Komik. All rights reserved.</p>
</footer>

<script>
  let currentSlide = 0;
  const slider = document.getElementById('slider');
  const dots = document.querySelectorAll('.dot');
  const totalSlides = slider.children.length;
  const backgroundAudio = document.getElementById('backgroundAudio');
  const audioIcon = document.getElementById('audioIcon');

  function updateDots() {
    dots.forEach(dot => dot.classList.remove('active'));
    if (dots[currentSlide]) dots[currentSlide].classList.add('active');
  }

  function moveSlide(direction) {
    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
    slider.style.transform = `translateX(-${currentSlide * 100}vw)`;
    updateDots();
  }

  function goToSlide(index) {
    currentSlide = index;
    slider.style.transform = `translateX(-${currentSlide * 100}vw)`;
    updateDots();
  }

  function autoPlay() {
    moveSlide(1);
  }

  setInterval(autoPlay, 5000);
  updateDots();

  function toggleAudio() {
    if (backgroundAudio.paused) {
      backgroundAudio.play();
      audioIcon.classList.remove('fa-volume-mute');
      audioIcon.classList.add('fa-volume-up');
    } else {
      backgroundAudio.pause();
      audioIcon.classList.remove('fa-volume-up');
      audioIcon.classList.add('fa-volume-mute');
    }
  }
</script>

</body>
</html>
