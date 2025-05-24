// Constants for pricing
const adultInput = document.getElementById("adult-count");
const childInput = document.getElementById("child-count");
const totalPriceDisplay = document.getElementById("total-price");
const cardNumberInput = document.getElementById("card-number");

const ADULT_PRICE = 1299;
const CHILD_PRICE = 799;

/**
 * Updates the total price based on the number of adults and children.
 */
function updateTotalPrice() {
  const adults = parseInt(adultInput.value) || 0;
  const children = parseInt(childInput.value) || 0;
  const total = adults * ADULT_PRICE + children * CHILD_PRICE;
  totalPriceDisplay.textContent = total.toLocaleString();
}

// Event listeners for updating the total price
adultInput.addEventListener("input", updateTotalPrice);
childInput.addEventListener("input", updateTotalPrice);

/**
 * Handles the form submission.
 * Displays a confirmation message and resets the form.
 * @param {Event} e - The form submission event.
 */
document
  .getElementById("checkout-form")
  .addEventListener("submit", function (e) {
    e.preventDefault();

    // Redirect to home page after a short delay
    setTimeout(() => {
      window.location.href = "./home.html"; 
    }, 100); // Adjust delay as needed

    const name = document.getElementById("full-name").value;
    const email = document.getElementById("email").value.trim();
    const total = totalPriceDisplay.textContent;

    alert(
      `Thanks ${name}, your booking is confirmed!\nTotal: $${total}\nConfirmation sent to: ${email}`
    );

    this.reset();
    updateTotalPrice(); // Reset the price
  });

/**
 * Formats the CVV input to allow only digits and limit to 3 characters.
 */
document.getElementById("cvv").addEventListener("input", function () {
  this.value = this.value.replace(/\D/g, "").slice(0, 3); // Allow only digits and limit to 3
});

/**
 * Formats the card number input to group digits in blocks of 4.
 */
cardNumberInput.addEventListener("input", function () {
  let value = this.value.replace(/\D/g, "").substring(0, 16); // Max 16 digits
  let formatted = value.match(/.{1,4}/g)?.join(" ") || "";
  this.value = formatted;
});