<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login | Explore Horizons</title>
  <link rel="stylesheet" href="/assets/style3.css" />
  <script src="/assets/transition.js" defer></script>
  <script src="/assets/login.js" defer></script>
</head>
<body>
  <?php if (isset($_SESSION['login_error'])): ?>
    <script>
        alert("<?= addslashes($_SESSION['login_error']) ?>");
    </script>
    <?php unset($_SESSION['login_error']); ?>
<?php endif; ?>
<div class="overlay"></div>
<div class="container">
  <div class="left-panel">
    <h1>EXPLORE<br>HORIZONS</h1>
    <?= $_SESSION['user_id'] ?>
      <p>Where Your Dream Destinations Become Reality.<br>Embark on a journey where every corner of the world is within your reach.</p>
    </div>
    <div class="form-panel">
      <form action="/login" method="POST" onsubmit="return signIn()">

        <input type="email" name="email" placeholder="Enter your email" id="email" required />
        
        <div class="password-wrapper">
          <input type="password" name="password" placeholder="Password" id="password" required />
          <span class="toggle-password" onclick="togglePassword('password', this)">👁️</span>
        </div>
        
        <a href="#" class="forgetPass">Forgot password?</a>
        <button type="submit">SIGN IN</button>
      </form>
      <div class="or">or</div>
      <a href="https://google.com">
      <div class="google-signin" onclick="signInWithGoogle()">
          <img src="https://cdn-icons-png.flaticon.com/512/300/300221.png" alt="Google logo" />
          Sign in with Google
        </div>
      </a>
      <div class="signup-link">
        Are you new? <a href="javascript:void(0);" onclick="goTo('/signup')">Create an Account</a>
      </div>
    </div>
  </div>
</body>
</html>
