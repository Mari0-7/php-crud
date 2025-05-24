<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trip Details</title>
    <link rel="stylesheet" href="/assets/styles/trip_details.css" />
    <script src="/assets/scripts/trip_details.js" defer></script>
  </head>
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
    <div class="breadcrumb">
      <a href="./">Home</a>
      <span class="separator">›</span>
      <a href="./destinations">Destinations</a>
      <span class="separator">›</span>
      <span>Santorini Island</span>
    </div>

    <div class="container">
      <div class="trip-container">
        <div class="image-gallery">
          <div class="gallery-container">
            <div
              class="gallery-item"
              style="background-image: url('/assets/img/santoriny.jpeg')"
            ></div>
            <div
              class="gallery-item"
              style="background-image: url('/assets/img/background.jpg')"
            ></div>
            <div
              class="gallery-item"
              style="background-image: url('/assets/img/santoriny.jpeg')"
            ></div>
            <div
              class="gallery-item"
              style="background-image: url('/assets/img/background.jpg')"
            ></div>
          </div>
          <div class="gallery-nav">
            <div class="gallery-dot active" data-index="0"></div>
            <div class="gallery-dot" data-index="1"></div>
            <div class="gallery-dot" data-index="2"></div>
            <div class="gallery-dot" data-index="3"></div>
          </div>
          <div class="gallery-arrow gallery-prev">❮</div>
          <div class="gallery-arrow gallery-next">❯</div>
        </div>

        <div class="trip-details">
          <h1 class="trip-title">Santorini Island Adventure</h1>
          <div class="trip-status">
            <span>✓</span>
            <span>Available for booking</span>
          </div>
          <div class="trip-code">Product code: TR-123456</div>
          <p class="trip-description">
            Experience the breathtaking beauty of Santorini with our exclusive
            7-day tour package. Discover white-washed buildings with blue domes,
            incredible sunsets, crystal-clear waters, and unforgettable Greek
            hospitality.
          </p>
          <div class="trip-pricing">
            <span class="current-price">$1,290.00</span>
            <span class="original-price">$1,500.00</span>
          </div>
          <div class="trip-actions">
            <button
              class="btn btn-primary"
              onclick="window.location.href='/checkout'"
            >
              BOOK NOW
            </button>
          </div>

          <div class="features">
            <div class="feature">✓ 7 days / 6 nights</div>
            <div class="feature">✓ 4-star accommodations</div>
            <div class="feature">✓ Breakfast included</div>
            <div class="feature">✓ Private sunset cruise</div>
          </div>
        </div>
      </div>

      <div class="trip-details-section">
        <h2 class="section-title">About This Trip</h2>
        <div class="trip-description-full">
          <p>
            Embark on an unforgettable journey to the stunning island of
            Santorini, widely regarded as one of the most beautiful destinations
            in the world. This carefully crafted 7-day package has been designed
            to provide you with the perfect balance of guided exploration and
            personal discovery time.
          </p>
          <br />
          <p>
            Your adventure begins as you arrive at Santorini International
            Airport, where our dedicated representative will greet you and
            facilitate your transfer to your elegant accommodations in the heart
            of Fira, the island's vibrant capital. The hotel's prime location
            offers easy access to local attractions, dining, and shopping while
            providing comfortable amenities for your stay.
          </p>
          <br />
          <p>
            Throughout your stay, you'll explore the island's iconic blue-domed
            churches, charming villages, and stunning caldera views. Our expert
            local guides will take you to Oia for its world-famous sunset, the
            ancient ruins of Akrotiri (the "Pompeii of the Aegean"), and several
            hidden gems that only locals know about.
          </p>
          <br />
          <p>
            One of the highlights of your trip will be a private sunset
            catamaran cruise around the caldera, complete with a freshly
            prepared Greek dinner and unlimited drinks. You'll have
            opportunities to swim in the crystal-clear waters of the Aegean Sea,
            snorkel around the volcanic islands, and soak in natural hot
            springs.
          </p>
          <br />
          <p>
            Your package also includes a wine tasting experience at three of
            Santorini's best wineries, where you'll sample the island's
            distinctive varieties produced from grapes grown in volcanic soil. A
            cooking class with a local chef will teach you how to prepare
            traditional Greek dishes using fresh, local ingredients.
          </p>
          <br />
          <p>
            With free time built into your itinerary, you'll have the chance to
            explore at your own pace, whether that means relaxing on the unique
            red and black sand beaches, shopping for local crafts and artwork,
            or simply enjoying the laid-back island atmosphere from a cliffside
            café.
          </p>
        </div>

        <h2 class="section-title">Trip Highlights</h2>
        <div class="trip-highlights">
          <div class="highlight-card">
            <div class="highlight-icon">🏛️</div>
            <h3 class="highlight-title">Akrotiri Archaeological Site</h3>
            <p class="highlight-text">
              Explore the preserved ruins of this ancient Minoan settlement
              buried under volcanic ash for over 3,600 years.
            </p>
          </div>
          <div class="highlight-card">
            <div class="highlight-icon">🌅</div>
            <h3 class="highlight-title">Oia Sunset Experience</h3>
            <p class="highlight-text">
              Witness one of the world's most spectacular sunsets from the
              picture-perfect village of Oia.
            </p>
          </div>
          <div class="highlight-card">
            <div class="highlight-icon">🚢</div>
            <h3 class="highlight-title">Private Catamaran Cruise</h3>
            <p class="highlight-text">
              Sail around the caldera on a luxury catamaran with swimming stops
              and a freshly prepared dinner.
            </p>
          </div>
          <div class="highlight-card">
            <div class="highlight-icon">🍷</div>
            <h3 class="highlight-title">Wine Tasting Tour</h3>
            <p class="highlight-text">
              Sample Santorini's unique wines produced from the assyrtiko grape
              grown in volcanic soil.
            </p>
          </div>
          <div class="highlight-card">
            <div class="highlight-icon">🏖️</div>
            <h3 class="highlight-title">Red Beach Visit</h3>
            <p class="highlight-text">
              Relax on this stunning beach known for its unique red volcanic
              sand and dramatic cliffs.
            </p>
          </div>
          <div class="highlight-card">
            <div class="highlight-icon">🍽️</div>
            <h3 class="highlight-title">Greek Cooking Class</h3>
            <p class="highlight-text">
              Learn to prepare traditional Greek dishes with a local chef using
              fresh island ingredients.
            </p>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <p class="copyright">Copyright © 2025 Tourist. All Rights Reserved</p>
    </footer>
  </body>
</html>
