<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Payment Details</title>
  </head>
  <link rel="stylesheet" href="/assets/styles/credit.css" />
  <script src="/assets/scripts/credit.js" defer></script>
  <body>
    <?php if (isset($_SESSION['credit_error'])): ?>
    <script>
        alert("<?= addslashes($_SESSION['credit_error']) ?>");
    </script>
    <?php unset($_SESSION['credit_error']); ?>
<?php endif; ?>
    <div class="container">
      <div class="nav-steps">
        <div class="active">Payment Details</div>
      </div>

      <div class="main-content">
        <div class="user-cards-container" style="display: flex; flex-direction:column; justify-content: space between; align-items: center; gap: 5dvh;">
        <div class="card-preview" id="card">
          <div class="chip"></div>
          <div class="number" id="card-number">#### #### #### ####</div>
          <div class="bottom">
            <div id="card-name">FULL NAME</div>
            <div id="card-expiry">MM/YY</div>
          </div>
        </div>
          <?php if (!empty($userCredits)): ?>
              <?php foreach ($userCredits as $credit): ?>
                <div class="card-preview">
                  <div class="chip"></div>
                  <div class="number">
                    <?= htmlspecialchars(substr($credit['card_number'], 0, 4) . ' **** **** ' . substr($credit['card_number'], -4)) ?>
                  </div>
                  <div class="bottom">
                    <div><?= htmlspecialchars(strtoupper($credit['card_name'])) ?></div>
                    <div><?= htmlspecialchars($credit['card_date']) ?></div>
                  </div>
                  <form action="/delete-card" method="POST" style="margin-top:10px;">
                <input type="hidden" name="card_id" value="<?= htmlspecialchars($credit['id']) ?>">
                <button type="submit" onclick="return confirm('Are you sure you want to delete this card?');" style="background:red;color:white;border:none;padding:5px 10px;border-radius:4px;cursor:pointer;">
                    Delete
                </button>
            </form>
                </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
        <div class="form-area">
          <h2>Payment Details</h2>
          <form id="paymentForm" action="/credit" method="POST">
            <div class="form-group">
              <label for="name">Name on Card</label>
              <input
                type="text"
                id="name"
                name="card_name"
                placeholder="Jack Sparrow"
                required
              />
            </div>
            <div class="form-group">
              <label for="number">Card Number</label>
              <input
                type="text"
                id="number"
                name="card_number"
                placeholder="1456 1298 6574 1287"
                maxlength="19"
                required
              />
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="expiry">Valid Through</label>
                <input
                  type="text"
                  id="expiry"
                  name="card_date"
                  placeholder="02/22"
                  maxlength="5"
                  required
                />
              </div>
              <div class="form-group">
                <label for="cvv">CVV</label>
                <input
                  type="password"
                  id="cvv"
                  name="cvv"
                  placeholder="123"
                  maxlength="4"
                  required
                />
              </div>
            </div>
            <button class="pay-btn" type="submit">SAVE</button>
            <a href="./settings" class="back-link">&larr; Go Back</a>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
