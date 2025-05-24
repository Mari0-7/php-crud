<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/styles/aboutCss.css">
</head>
<body>
<header>
      <nav class="navbar">
        <div class="logo">
          <div class="logo-icon"></div>
          Tourist
        </div>
        <div class="nav-links">
          <a href="/" class="nav-link">Home</a>
          <a href="/destinations" class="nav-link">Destinations</a>
          <a href="/about" class="nav-link">About us</a>
        </div>
        <div class="nav-icons">
          <?php if (isset($_SESSION['user_id'])): ?>
            <div
            class="nav-icon"
            onclick="window.location.href='/profile'">
            👤
          </div>
        <?php else: ?>
            <a href="/login" class="nav-link">Login</a>
            <a href="/signup" class="nav-link">Signup</a>
        <?php endif; ?>
          
        </div>
        <button class="mobile-menu-btn"></button>
      </nav>
    </header>
    
  <!-- Hero Section -->
  <section class="hero">
    <h1>we all love traveling</h1>
  </section>

  <!-- Mission Section -->
  <section class="section">
    <h2>Our Mission</h2>
    <div class="mission-cards">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1470770903676-69b98201ea1c?auto=format&fit=crop&w=500&q=60" alt="To travel">
        <h3>#1 To travel...</h3>
        <p>We believe travel is the thing that sets us free. So we need to travel. Everyone!</p>
      </div>
      <div class="card">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=500&q=60" alt="To experience">
        <h3>#2 To experience...</h3>
        <p>Experience is the thing that we get from going to the craziest places ever.</p>
      </div>
      <div class="card">
        <img src="https://images.unsplash.com/photo-1508921912186-1d1a45ebb3c1?auto=format&fit=crop&w=500&q=60" alt="To teach">
        <h3>#3 To Teach</h3>
        <p>We teach how to travel to get the ultimate experience so you can enjoy life.</p>
      </div>
    </div>
  </section>

  <!-- Quote Section -->
  <section class="quote-section">
    <blockquote>
      Launching a travel blog completely revolutionized my outlook on life. It ignited a deep sense of wanderlust within me and empowered me to embrace new experiences with open arms.
      Through sharing my adventures online, I’ve connected with fellow adventurers and cultivated a community that continually inspires me to explore the world with curiosity and gratitude.
    </blockquote>
    <div class="author">&mdash; Jane Miller</div>
  </section>

  <!-- About Description Section -->
  <section class="section about-description">
    <div class="about-text">
      <h3>Welcome to <strong>Radiant Orbit</strong>, a space where wanderlust meets storytelling.</h3>
      <p>
        Here, we embark on a journey of discovery, traversing the globe one adventure at a time. Whether it’s immersing ourselves in natural cultures, seeking exotic cuisines, or uncovering hidden gems off the beaten path, our aim is to inspire and ignite the travel bug within you.
      </p>
    </div>
    <div class="about-img">
      <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=600&q=60" alt="Wildlife Travel">
    </div>
  </section>
  <footer>
        <p class="copyright">Copyright © 2025 Tourist. All Rights Reserved</p>
    </footer>

</body>
</html>
