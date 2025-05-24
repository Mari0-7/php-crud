<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/styles/profileCss.css" />
    <title>Profile</title>
  </head>
  <body>
    <nav class="navbar">
      <div class="logo">
        <div class="logo-icon"></div>
        Tourist
      </div>
      <div class="nav-links">
        <a href="./" class="nav-link">Home</a>
        <a href="./destinations" class="nav-link">Destinations</a>
        <a href="./about" class="nav-link">About us</a>
      </div>
      <!-- <div class="search-container">
        <input
          type="text"
          class="search-input"
          placeholder="What are you looking for?"
        />
        <div class="search-icon">🔍</div>
      </div> -->
      <!-- <div class="nav-icons">
            <div class="nav-icon" onclick="window.location.href='./profile.html'">👤</div>
        </div> -->
      <!-- <button class="mobile-menu-btn">☰</button> -->
    </nav>
    <div class="profile-container">
      <div class="profile-header">
        <?php
            $pfp = $user['profile_picture'];
            $photoPath = __DIR__ .'/../../public' .$pfp;
            if(!file_exists($photoPath) || $user['profile_picture'] ===  null){
                $pfp = '/assets/profile.png';
            }
            ?>
            <img src="<?= htmlspecialchars($pfp) ?>" alt="profileImg" class="avatar">
            <h1 class="username"><?= htmlspecialchars($user['full_name'] ?? 'User') ?></h1>
            <p class="handle">@<?= htmlspecialchars(explode('@',$user['email'])[0] ?? 'user') ?></p>
      </div>

      <div class="profile-content">
        <div class="sidebar">
          <div class="section">
            <h3 class="section-title">Activity Feed</h3>
            <div class="activity-feed">
              <div class="activity-item" onclick="alert('Upcoming Update')">Trips</div>
              <div class="activity-item" onclick="alert('Upcoming Update')">Photos</div>
              <div class="activity-item" onclick="alert('Upcoming Update')">Reviews</div>
            </div>
          </div>

          <div class="section">
            <h3 class="section-title">Intro</h3>
            <div class="intro-item">-Moharram Bek, Alex</div>
            <div class="intro-item">-Joined in Nov 2018</div>
          </div>
          <a href="/settings" class="btn btn-outline"
            >Edit profile</a
          >
        </div>

        <div class="main-content">
          <div class="section">
            <h3 class="section-title">Upcoming Trips</h3>
            
            
    <footer>
      <p class="copyright">
        Copyright © 2025 Tourist. All Rights Reserved
      </p>
    </footer>
    <div class="menu-overlay"></div>
    <script src="/scripts/scriptProfile.js">
      defer
    </script>
  </body>
</html>
