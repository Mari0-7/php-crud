<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up | Explore Horizons</title>
  <link rel="stylesheet" href="/assets/style3.css" />
  <script src="/assets/transition.js" defer></script>
  <script src="/assets/signup.js" defer></script>
</head>
<body>
  <?php if (isset($_SESSION['signup_error'])): ?>
    <script>
        alert("<?= addslashes($_SESSION['signup_error']) ?>");
    </script>
    <?php unset($_SESSION['signup_error']); ?>
<?php endif; ?>
  <div class="overlay"></div>
  <div class="container">
    <div class="left-panel">
      <h1>JOIN<br>THE JOURNEY</h1>
      <p>Create an account to start exploring a world of travel opportunities and unforgettable memories.</p>
    </div>
    <div class="form-panel" >
      <form action="/signup" method="POST" onsubmit="return signUp()">
      <input type="text" placeholder="Full Name" id="name" name="name" required />
      <input type="email" placeholder="Enter your email" id="signup-email" name="email" required />
      
      <div class="password-wrapper">
        <input type="password" placeholder="Password" id="signup-password" name="pass" required />
        <span class="toggle-password" onclick="togglePassword('signup-password', this)">👁️</span>
      </div>
      <div class="password-wrapper">
        <input type="password" placeholder="Confirm Password" id="confirm-password" name="cpass" required />
        <span class="toggle-password" onclick="togglePassword('confirm-password', this)">👁️</span>
      </div>
      <button type="submit">SIGN UP</button>
      </form>
      <div class="or">or</div>
      <a href="https://google.com">
      <div class="google-signin" onclick="signInWithGoogle()">
          <img src="https://cdn-icons-png.flaticon.com/512/300/300221.png" alt="Google logo" />
          Sign in with Google
        </div>
      </a>
      <div class="signup-link">
        Already have an account? <a href="javascript:void(0);" onclick="goTo('/login')" >Sign In</a>
      </div>
    </div>
  </div>
</body>
</html>
