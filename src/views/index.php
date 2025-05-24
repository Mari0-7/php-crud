<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
  </head>
  <link rel="stylesheet" href="/assets/styles/home.css" />
  <script src="/assets/scripts/home.js" defer></script>
  <body>
    <!-- Header Section -->
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
        <div class="mobile-menu">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
      </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
      <h1>TRAVEL</h1>
      <p>
        Explore the world's most breathtaking destinations. From tropical
        beaches to ancient cities, scenic countryside to bustling metropolises -
        adventure awaits at every corner.
      </p>
      <a href="#about" class="btn">EXPLORE NOW</a>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
      <h2 class="section-title fade-in">About Travel</h2>
      <p class="fade-in">
        We are passionate about creating unforgettable travel experiences for
        adventurers from around the world. Our expert guides will take you to
        the most beautiful and captivating destinations while ensuring your
        safety, comfort, and enrichment throughout the journey.
      </p>

      <div class="features">
        <div class="feature fade-in">
          <div class="feature-icon">
            <svg
              width="50"
              height="50"
              viewBox="0 0 24 24"
              fill="none"
              stroke="#2c78b8"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
              ></path>
            </svg>
          </div>
          <h3>Expert Guidance</h3>
          <p>
            Our certified travel guides have years of experience leading
            adventures across diverse regions, cultures, and environments around
            the globe.
          </p>
        </div>

        <div class="feature fade-in">
          <div class="feature-icon">
            <svg
              width="50"
              height="50"
              viewBox="0 0 24 24"
              fill="none"
              stroke="#2c78b8"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
              <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
            </svg>
          </div>
          <h3>Quality Accommodations</h3>
          <p>
            We carefully select the best hotels, resorts, and unique lodgings to
            ensure your comfort and authentic experiences wherever you go.
          </p>
        </div>

        <div class="feature fade-in">
          <div class="feature-icon">
            <svg
              width="50"
              height="50"
              viewBox="0 0 24 24"
              fill="none"
              stroke="#2c78b8"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <circle cx="12" cy="12" r="10"></circle>
              <path d="M12 6v6l4 2"></path>
            </svg>
          </div>
          <h3>Custom Itineraries</h3>
          <p>
            We craft personalized adventures that match your interests, desired
            pace, and travel style - whether relaxation, adventure, culture, or
            a mix of everything.
          </p>
        </div>

        <div class="feature fade-in">
          <div class="feature-icon">
            <svg
              width="50"
              height="50"
              viewBox="0 0 24 24"
              fill="none"
              stroke="#2c78b8"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
          </div>
          <h3>Safety First</h3>
          <p>
            Your wellbeing is our priority. We implement rigorous safety
            protocols and are prepared for any situation regardless of
            destination.
          </p>
        </div>
      </div>
    </section>

    <!-- Destinations Section -->
    <section id="destinations" class="mountains">
      <h2 class="section-title fade-in">Popular Destinations</h2>

      <div class="mountains-gallery">
        <div class="mountain-card fade-in">
          <div class="mountain-img">
            <img src="/assets/img/tropical.jpeg" alt="Tropical Beach" />
          </div>
          <div class="mountain-info">
            <h3>Tropical Paradise</h3>
            <p>
              Experience the ultimate relaxation on pristine beaches with
              crystal-clear waters. Perfect for swimming, snorkeling, and
              soaking up the sun.
            </p>
          </div>
        </div>

        <div class="mountain-card fade-in">
          <div class="mountain-img">
            <img src="/assets/img/Urban.jpg" alt="Urban Adventure" />
          </div>
          <div class="mountain-info">
            <h3>Urban Adventures</h3>
            <p>
              Dive into the vibrant energy of the world's most fascinating
              cities. Explore iconic landmarks, immerse in local culture, and
              savor diverse cuisines.
            </p>
          </div>
        </div>

        <div class="mountain-card fade-in">
          <div class="mountain-img">
            <img src="/assets/img/download.jpeg" alt="Mountain Hiking" />
          </div>
          <div class="mountain-info">
            <h3>Mountain Escapes</h3>
            <p>
              Discover breathtaking alpine scenery with pristine lakes, lush
              forests, and towering peaks. Ideal for hiking, photography, and
              wilderness adventures.
            </p>
          </div>
        </div>

        <div class="mountain-card fade-in">
          <div class="mountain-img">
            <img src="/assets/img/rural.jpg" alt="Rural Retreat" />
          </div>
          <div class="mountain-info">
            <h3>Rural Retreats</h3>
            <p>
              Escape to tranquil countryside settings with rolling hills,
              charming villages, and authentic local experiences away from the
              crowds.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Choose Us Section -->
    <section id="contact" class="choose-us">
      <div class="choose-content">
        <h2 class="fade-in">Why Choose Us?</h2>
        <p class="fade-in">
          With over 15 years of experience organizing travel adventures
          worldwide, we understand what makes a journey truly memorable. Our
          attention to detail, commitment to sustainability, and passion for
          authentic experiences sets us apart.
        </p>
        <p class="fade-in">
          We don't just take you to destinations; we help you connect with them
          in meaningful ways. Our small group sizes ensure personalized
          attention and maximize your immersion in local cultures.
        </p>

        <div class="contact-info fade-in">
          <h3>Get Started</h3>
          <ul class="contact-details">
            <li>Address: 34 Traveler's Avenue, Journeyville, CA</li>
            <li>Phone: +0 1234 7899 02</li>
            <li>Email: hello@Tourist.com</li>
          </ul>
        </div>
      </div>

      <div class="contact-form fade-in">
        <form id="contactForm">
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              placeholder="Name"
              required
            />
          </div>
          <div class="form-group">
            <input
              type="email"
              class="form-control"
              placeholder="E-Mail"
              required
            />
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject" />
          </div>
          <div class="form-group">
            <textarea
              class="form-control"
              placeholder="Message"
              required
            ></textarea>
          </div>
          <button type="submit" class="submit-btn">SEND</button>
        </form>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <p class="copyright">Copyright © 2025 Tourist. All Rights Reserved</p>
    </footer>
  </body>
</html>