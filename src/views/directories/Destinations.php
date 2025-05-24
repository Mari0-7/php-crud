<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fomu - Plan easy, Pay less and Experience more</title>
  </head>
  <link rel="stylesheet" href="/assets/styles/Destinations.css" />
  <script src="/assets/scripts/destinations.js" defer></script>
  <body>
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
      </div>
      <button class="mobile-menu-btn"></button>
    </nav>
    <div class="container">
      <!-- Hero Section -->
      <section class="hero">
        <div class="hero-content">
          <h1>Plan easy, Pay less and Experience more</h1>
          <p>
            Discover new horizons by transforming destination, ensuring your
            holiday is wrapped in comfort and convenience.
          </p>
        </div>

        <div class="search-box-wrapper">
          <h2>Experience the world at a fair price!</h2>
        </div>
      </section>

      <div class="hero-images">
        <div class="hero-img">
          <img src="/assets/img/Paris.avif" alt="Beautiful beach" />
        </div>
        <div class="hero-img">
          <img src="/assets/img/desert.webp" alt="Desert landscape with airplane" />
        </div>
      </div>

      <!-- Popular Destinations -->
      <section class="popular-destinations">
        <h2 class="section-title">Popular Destinations</h2>
        <p class="section-subtitle">Unleash your Wanderlust with Fomu</p>

        <div class="destinations">
          <div class="destination-card">
            <div class="destination-img">
              <img src="/assets/img/santoriny.jpeg" alt="Greece" />
              <div class="rating"><i>⭐</i> 4.8</div>
            </div>
            <div class="destination-info">
              <h3 class="destination-name">Santority Island</h3>
              <p class="destination-location">📍 Greece</p>
              <p class="destination-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
              </p>
              <a href="./trip-details" class="see-more">See more</a>
            </div>
          </div>

          <div class="destination-card">
            <div class="destination-img">
              <img src="/assets/img/bali.jpg" alt="Bali" />
              <div class="rating"><i>⭐</i> 4.7</div>
            </div>
            <div class="destination-info">
              <h3 class="destination-name">Bali</h3>
              <p class="destination-location">📍 Maldives</p>
              <p class="destination-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
              </p>
              <a href="./trip-details" class="see-more">See more</a>
            </div>
          </div>

          <div class="destination-card">
            <div class="destination-img">
              <img src="/assets/img/garden city.jpg" alt="Garden City" />
              <div class="rating"><i>⭐</i> 4.9</div>
            </div>
            <div class="destination-info">
              <h3 class="destination-name">Garden City</h3>
              <p class="destination-location">📍 Singapore</p>
              <p class="destination-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
              </p>
              <a href="./trip-details" class="see-more">See more</a>
            </div>
          </div>

          <div class="destination-card">
            <div class="destination-img">
              <img src="/assets/img/pyramids.jpg" alt="Pyramids of Giza" />
              <div class="rating"><i>⭐</i> 4.7</div>
            </div>
            <div class="destination-info">
              <h3 class="destination-name">Pyramids of Giza</h3>
              <p class="destination-location">📍 Egypt</p>
              <p class="destination-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
              </p>
              <a href="./trip-details" class="see-more">See more</a>
            </div>
          </div>

          <div class="destination-card">
            <div class="destination-img">
              <img src="/assets/img/dubai.webp" alt="Dubai" />
              <div class="rating"><i>⭐</i> 4.9</div>
            </div>
            <div class="destination-info">
              <h3 class="destination-name">Dubai</h3>
              <p class="destination-location">📍 UAE</p>
              <p class="destination-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
              </p>
              <a href="./trip-details" class="see-more">See more</a>
            </div>
          </div>

          <div class="destination-card">
            <div class="destination-img">
              <img src="/assets/img/cape town.jpg" alt="Cape Town" />
              <div class="rating"><i>⭐</i> 3.9</div>
            </div>
            <div class="destination-info">
              <h3 class="destination-name">Cape Town</h3>
              <p class="destination-location">📍 South Africa</p>
              <p class="destination-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
              </p>
              <a href="./trip-details" class="see-more">See more</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Testimonials -->
      <section class="testimonials">
        <h2 class="section-title">Love From Our Travelers</h2>
        <p class="section-subtitle">Satisfied customers are our biggest fans</p>

        <div class="testimonials-container">
          <div class="testimonial-avatars">
            <div class="avatar" data-index="0">
              <img src="/assets/img/profile.png" alt="Traveler 1" />
            </div>
            <div class="avatar" data-index="1">
              <img src="/assets/img/profile.png" alt="Traveler 2" />
            </div>
            <div class="avatar active" data-index="2">
              <img src="/assets/img/profile.png" alt="Yusuf Ahmed" />
            </div>
            <div class="avatar" data-index="3">
              <img src="/assets/img/profile.png" alt="Traveler 4" />
            </div>
            <div class="avatar" data-index="4">
              <img src="/assets/img/profile.png" alt="Traveler 5" />
            </div>
          </div>

          <div class="testimonial-content active" id="testimonial-0">
            <div class="testimonial-rating">
              <i>⭐</i><i>⭐</i><i>⭐</i><i>⭐</i><i>⭐</i>
            </div>
            <h3 class="testimonial-name">Yusuf Ahmed</h3>
            <p class="testimonial-title">Egyptian Traveler</p>
            <p class="testimonial-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation.
            </p>
          </div>

          <div class="testimonial-content" id="testimonial-1">
            <div class="testimonial-rating">
              <i>⭐</i><i>⭐</i><i>⭐</i><i>⭐</i><i>⭐</i>
            </div>
            <h3 class="testimonial-name">Sarah Johnson</h3>
            <p class="testimonial-title">American Explorer</p>
            <p class="testimonial-text">
              The experience with Fomu was beyond amazing! Every detail was
              taken care of, and the destinations were even more beautiful than
              the pictures. I'll definitely book all my future trips through
              them.
            </p>
          </div>

          <div class="testimonial-content" id="testimonial-2">
            <div class="testimonial-rating">
              <i>⭐</i><i>⭐</i><i>⭐</i><i>⭐</i><i>⭐</i>
            </div>
            <h3 class="testimonial-name">Akira Tanaka</h3>
            <p class="testimonial-title">Japanese Adventurer</p>
            <p class="testimonial-text">
              Fomu made my dream vacation to Kenya absolutely perfect. Their
              local guides were knowledgeable, and the accommodations were
              first-class. The safari experience will stay with me forever!
            </p>
          </div>

          <div class="testimonial-content" id="testimonial-3">
            <div class="testimonial-rating">
              <i>⭐</i><i>⭐</i><i>⭐</i><i>⭐</i><i>⭐</i>
            </div>
            <h3 class="testimonial-name">Elena Petrova</h3>
            <p class="testimonial-title">Russian Globetrotter</p>
            <p class="testimonial-text">
              I've traveled with many agencies before, but none compare to Fomu.
              Their attention to detail and personalized service made all the
              difference. The Dubai package was exceptional value for money.
            </p>
          </div>

          <div class="testimonial-content" id="testimonial-4">
            <div class="testimonial-rating">
              <i>⭐</i><i>⭐</i><i>⭐</i><i>⭐</i><i>⭐</i>
            </div>
            <h3 class="testimonial-name">Miguel Rodriguez</h3>
            <p class="testimonial-title">Spanish Wanderer</p>
            <p class="testimonial-text">
              Cape Town was a revelation! Thanks to Fomu's excellent planning, I
              experienced the best of South African culture, cuisine, and
              landscapes. Their app made the journey smooth and stress-free.
            </p>
          </div>
        </div>
      </section>
    </div>

    <footer>
      <p class="copyright">Copyright © 2025 Tourist. All Rights Reserved</p>
    </footer>
  </body>
</html>
