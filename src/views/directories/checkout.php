<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tour Checkout</title>
    <link rel="stylesheet" href="/assets/styles/checkout.css" />
    <script src="/assets/scripts/checkout_js.js" defer></script>
  </head>
  <body>
    <!-- Main container for the checkout page -->
    <div class="checkout-container">
      <!-- Page title -->
      <h2 class="title">Checkout</h2>

      <!-- Traveler Information Section -->
      <section class="section">
        <h3>Traveler Information</h3>
        <form id="checkout-form">
          <!-- Full Name Input -->
          <div class="form-group">
            <input type="text" id="full-name" required placeholder=" " />
            <label for="full-name">Full Name</label>
          </div>
          <!-- Email Input -->
          <div class="form-group">
            <input type="email" id="email" required placeholder=" " />
            <label for="email">Email Address</label>
          </div>
          <!-- Phone Number Input -->
          <div class="form-group">
            <input type="tel" id="phone" required placeholder=" " />
            <label for="phone">Phone Number</label>
          </div>

          <!-- Passenger Count Section -->
          <div class="passenger-count">
            <h3>Passengers</h3>
            <div class="form-row">
              <!-- Adult Count Input -->
              <div class="form-group">
                <input
                  type="number"
                  id="adult-count"
                  value="1"
                  min="1"
                  required
                  placeholder=" "
                />
                <label for="adult-count">Adults</label>
              </div>
              <!-- Child Count Input -->
              <div class="form-group">
                <input
                  type="number"
                  id="child-count"
                  value="0"
                  min="0"
                  required
                  placeholder=" "
                />
                <label for="child-count">Children</label>
              </div>
            </div>
          </div>

          <!-- Tour Summary Section -->
          <div class="summary-box">
            <h3>Your Tour</h3>
            <p><strong>Destination:</strong> Bali, Indonesia</p>
            <p><strong>Duration:</strong> 7 Days / 6 Nights</p>
            <p><strong>Date:</strong> June 15, 2025</p>
            <p>
              <strong>Total Price:</strong> $<span id="total-price">1299</span>
            </p>
          </div>

          <!-- Payment Details Section -->
          <h3>Payment Details</h3>
          <div class="payment-section">
            <!-- Card Logos -->
            <div class="card-logos">
              <img
                src="/assets/img/Mastercard-logo.png"
                alt="Mastercard"
              />
              <img
                src="/assets/img/visa.svg"
                alt="Visa"
              />
              <img
                src="/assets/img/meeza-logo.png"
                alt="Meza"
              />
            </div>

            <!-- Cardholder Name Input -->
            <div class="form-group">
              <input
                type="text"
                id="cardholder-name"
                required
                placeholder=" "
              />
              <label for="cardholder-name">Cardholder Name</label>
            </div>

            <!-- Card Number Input -->
            <div class="form-group">
              <input
                type="text"
                id="card-number"
                required
                placeholder=" "
                maxlength="19"
              />
              <label for="card-number">Card Number</label>
            </div>

            <!-- Expiry Date and CVV Inputs -->
            <div class="form-row">
              <!-- Expiry Date Input -->
              <div class="form-group">
                <input
                  type="text"
                  id="expiry-date"
                  required
                  placeholder=""
                  maxlength="5"
                />
                <label for="expiry-date">Expiry</label>
              </div>
              <!-- CVV Input -->
              <div
                class="form-group cvv-group"
                title="3-digit code on the back of your card"
              >
                <input
                  type="text"
                  id="cvv"
                  required
                  placeholder=" "
                  maxlength="3"
                  pattern="\d{3}"
                />
                <label for="cvv">CVV</label>
                <img
                  src="/assets/img/card.png"
                  alt="CVV Info"
                  class="cvv-icon"
                />
              </div>
            </div>
          </div>

          <!-- Submit Button -->
          <button type="submit" onclick="alert('Payment confirmed'); window.location.href = '/'">Confirm & Pay</button>
        </form>
      </section>
    </div>
  </body>
</html>
