<!-- settings.html -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings</title>
    <link rel="stylesheet" href="/assets/styles/settings.css" />
    <script src="/assets/scripts/settings.js" defer></script>
  </head>
  <body>
    <a
      href="./profile"
      class="back-arrow"
      title="Back to Profile"
      style="
        position: absolute;
        top: 24px;
        left: 24px;
        text-decoration: none;
        font-size: 2rem;
        line-height: 1;
      "
      >&#8592;</a
    >
    <div class="container">
      <h1>Settings</h1>
      <p class="subtext">
        Here you can edit your profile, change your preferences, export your
        data, and manage billing details.
      </p>

      <nav class="tabs">
        <a href="" class="active">Profile</a>
        <a href="./credit">Billing</a>
        <a href="./logout-confirm">Logout</a>
      </nav>

      <div class="profile-section">
        
        <form class="profile-form" action="/settings" method="POST" enctype="multipart/form-data" onsubmit="return validateEditForm()">
          <div class="photo-upload" style="display: flex; flex-direction:column; justify-content: center; align-items: start; margin-bottom: 20px;">
            <div class="profile-pic" style="margin-left: 5px;">
              <?php
            $pfp = $user['profile_picture'];
            $photoPath = __DIR__ .'/../../public' .$pfp;
            if(!file_exists($photoPath) || $user['profile_picture'] ===  null){
                $pfp = '/assets/profile.png';
            }
            ?>
              <img src="<?= htmlspecialchars($pfp) ?>" alt="User Photo" id="user-photo" />
            </div>
            <label class="upload-btn">
              <input type="file" name="profile_photo" id="photoInput" accept="image/*" hidden />
              Upload Photo
            </label>
            <p class="photo-hint">At least 256 x 256px PNG or JPG file.</p>
          </div>
          <div class="form-row">
            <div class="form-group">
              <?php
                $name = htmlspecialchars($user['full_name'] ?? '');
                ?>
              <label>Display Name</label>
              <input type="text" name="newName" id="new_name" value="<?= $name ?>" />
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" id="new_password" placeholder="*******" name="newPassword" />
            </div>
            <div class="form-group">
              <label>Confirm Password</label>
              <input type="password" id="confirm_password" placeholder="*******" name="confirmPassword" />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <?php
                $username = htmlspecialchars($user['email'] ?? '');
                $usernamePlaceholder = explode('@', $username)[0] ?? 'Username';
                ?>
              <label>Username</label>
              <input type="text" placeholder="<?= $usernamePlaceholder?>" disabled/>
            </div>
            <div class="form-group">
              <?php
                $email = htmlspecialchars($user['email'] ?? '');
                ?>
              <label>Email Address</label>
              <input type="email" value="<?= $email ?>" disabled>
            </div>
            <div class="form-group" style="display: flex; justify-content: start; align-items: end;">
              <label class="upload-btn">
                <input type="submit" id="photoInput" hidden />
                Save Changes
              </label>
            </div>
          </div>
        </form>
        <form action="/delete" method="POST" style="display:inline;">
          <div class="form-group" style="display: flex; justify-content: start; align-items: end;">
            <label class="upload-btn" style="background-color: red; color: white;" onclick="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
              <input type="submit" id="photoInput" hidden/>
              Delete Account
            </label>
          </div>    
                </form>
      </div>
          
    </div>
    <script>
        function validateEditForm() {
            const name = document.getElementById('new_name').value.trim();
            const password = document.getElementById('new_password').value;
            const confirm = document.getElementById('confirm_password').value;
            const photo = document.getElementById('photoInput').files.length;

            if (!name && !password && !confirm && !photo) {
                alert("Please enter a new name, new password, or a new photo.");
                return false;
            }
            if (password || confirm) {
                if (password.length < 8) {
                    alert("Password must be at least 8 characters.");
                    return false;
                }
                if (password !== confirm) {
                    alert("Passwords do not match.");
                    return false;
                }
            }
            return true;
        }
    </script>
  </body>
</html>
