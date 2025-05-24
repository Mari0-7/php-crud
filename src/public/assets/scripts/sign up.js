/**
     * Displays a message in the message box.
     * @param {string} message - The message to display.
     * @param {string} type - The type of message ('info', 'error', 'success').
     */
function showMessage(message, type = "info") {
  const messageBox = document.getElementById("messageBox");
  messageBox.textContent = message;
  messageBox.className = `message-box ${type}`;
  messageBox.style.display = "block";
  setTimeout(() => {
    messageBox.style.display = "none";
  }, 3000);
}

/**
 * Handles the signup form submission.
 * Validates the input fields and displays appropriate messages.
 * @param {Event} event - The form submission event.
 */
function handleSignUp(event) {
  event.preventDefault(); // Prevent form from reloading the page

  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("signup-email").value.trim();
  const password = document
    .getElementById("signup-password")
    .value.trim();
  const confirmPassword = document
    .getElementById("confirm-password")
    .value.trim();

  // Validate Full Name
  if (!name) {
    showMessage("Please enter your full name.", "error");
    return;
  }

  // Validate Email
  if (!email) {
    showMessage("Please enter your email.", "error");
    return;
  }

  if (!validateEmail(email)) {
    showMessage("Please enter a valid email address.", "error");
    return;
  }

  // Validate Password
  if (!password) {
    showMessage("Please enter your password.", "error");
    return;
  }

  if (password.length < 6) {
    showMessage("Password must be at least 6 characters.", "error");
    return;
  }

  // Validate Confirm Password
  if (password !== confirmPassword) {
    showMessage("Passwords do not match.", "error");
    return;
  }

  // Simulate successful signup (You can replace this with a real API call)
  showMessage("Account created successfully!", "success");

  // Optionally redirect after signup
  setTimeout(() => {
    window.location.href = './home.html';
  }, 1000);
}

/**
 * Validates an email address using a regular expression.
 * @param {string} email - The email address to validate.
 * @returns {boolean} - True if the email is valid, false otherwise.
 */
function validateEmail(email) {
  const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return re.test(email.toLowerCase());
}

/**
 * Toggles the visibility of a password input field.
 * @param {string} inputId - The ID of the password input field.
 * @param {HTMLElement} icon - The icon element to update.
 */
function togglePassword(inputId, icon) {
  const input = document.getElementById(inputId);
  if (input.type === "password") {
    input.type = "text";
    icon.textContent = "🙈"; // Change icon when showing
  } else {
    input.type = "password";
    icon.textContent = "👁️"; // Change icon back
  }
}

/**
 * Simulates a Google sign-up action.
 * Displays a message indicating that the feature is coming soon.
 */
function signUpWithGoogle() {
  showMessage("Google sign-up coming soon!", "info");
}

/**
 * Redirects the user to a specified page.
 * @param {string} page - The URL of the page to redirect to.
 */
function goTo(page) {
  window.location.href = page;
}