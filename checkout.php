<?php include "header.php" ?>
<style>
  header {
    background: #000;
  }
</style>

<!-- Checkout Page Start -->
<section class="checkout-page">
  <div class="container">
    <div class="checkout-header">
      <h1>Checkout</h1>
      <p>Complete your purchase to get started with BeautySuite Pro</p>
    </div>
    
    <div class="checkout-content">
      <div class="checkout-form-section">
        <!-- Billing Information -->
        <div class="billing-section">
          <h2>Billing Information</h2>
          <form class="billing-form">
            <div class="form-row">
              <div class="form-group full-width">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" placeholder="First & Last Name" required>
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-group full-width">
                <label for="address1">Address 1</label>
                <input type="text" id="address1" name="address1" placeholder="421, Dubai Main St." required>
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-group full-width">
                <label for="address2">Address 2</label>
                <input type="text" id="address2" name="address2" placeholder="Apartment, suite, etc. (optional)">
              </div>
            </div>
            
            <div class="form-row three-col">
              <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder="City" required>
              </div>
              <div class="form-group">
                <label for="state">State</label>
                <select id="state" name="state" required>
                  <option value="">Select state</option>
                  <option value="AL">Alabama</option>
                  <option value="CA">California</option>
                  <option value="FL">Florida</option>
                  <option value="NY">New York</option>
                  <option value="TX">Texas</option>
                </select>
              </div>
              <div class="form-group">
                <label for="zipCode">Zip Code</label>
                <input type="text" id="zipCode" name="zipCode" placeholder="Zip code" required>
              </div>
            </div>
          </form>
        </div>

        <!-- Payment Method -->
        <div class="payment-section">
          <h2>Payment Method</h2>
          <div class="payment-methods">
            <div class="payment-option active" data-method="card">
              <div class="payment-icon">
                <i class="icofont-credit-card"></i>
              </div>
              <span>Credit Card</span>
            </div>
            <div class="payment-option" data-method="paypal">
              <div class="payment-icon">
                <i class="icofont-paypal"></i>
              </div>
              <span>PayPal</span>
            </div>
          </div>

          <!-- Credit Card Form -->
          <div class="payment-form card-form active">
            <div class="form-row">
              <div class="form-group full-width">
                <label for="cardName">Name on Card</label>
                <input type="text" id="cardName" name="cardName" placeholder="First & Last Name">
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-group full-width">
                <label for="cardNumber">Card Number</label>
                <input type="text" id="cardNumber" name="cardNumber" placeholder="0000 0000 0000 0000">
              </div>
            </div>
            
            <div class="form-row two-col">
              <div class="form-group">
                <label for="expiry">Expiry</label>
                <div class="expiry-inputs">
                  <select id="expiryMonth" name="expiryMonth">
                    <option value="">MM</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                  <select id="expiryYear" name="expiryYear">
                    <option value="">YYYY</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV" maxlength="4">
              </div>
            </div>
          </div>

          <!-- PayPal Form -->
          <div class="payment-form paypal-form">
            <div class="paypal-info">
              <p>You will be redirected to PayPal to complete your payment securely.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Order Summary -->
      <div class="order-summary-section">
        <div class="order-summary-card">
          <h2>Order Summary</h2>
          
          <div class="plan-details">
            <div class="plan-icon">
              <i class="icofont-star"></i>
            </div>
            <div class="plan-info">
              <h3 id="selectedPlan">Premium Plan</h3>
              <p>Complete salon management solution</p>
            </div>
          </div>

          <div class="pricing-breakdown">
            <div class="pricing-row">
              <span>Subtotal</span>
              <span id="subtotal">$45.00</span>
            </div>
            <div class="pricing-row">
              <span>Tax</span>
              <span id="tax">$4.50</span>
            </div>
            <div class="pricing-row total">
              <span>Total</span>
              <span id="total">$49.50</span>
            </div>
          </div>

          <button class="place-order-btn" type="submit">
            <span>Place Order</span>
            <i class="icofont-arrow-right"></i>
          </button>

          <div class="security-info">
            <i class="icofont-lock"></i>
            <span>Your payment information is secure and encrypted</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Checkout Page End -->

<?php include "footer.php" ?>

<script>
// Payment method switching
document.querySelectorAll('.payment-option').forEach(option => {
  option.addEventListener('click', function() {
    // Remove active class from all options
    document.querySelectorAll('.payment-option').forEach(opt => opt.classList.remove('active'));
    document.querySelectorAll('.payment-form').forEach(form => form.classList.remove('active'));
    
    // Add active class to clicked option
    this.classList.add('active');
    
    // Show corresponding form
    const method = this.dataset.method;
    document.querySelector(`.${method}-form`).classList.add('active');
  });
});

// Get plan details from URL parameters
const urlParams = new URLSearchParams(window.location.search);
const plan = urlParams.get('plan') || 'premium';
const billing = urlParams.get('billing') || 'monthly';

// Update order summary based on selected plan
const planPrices = {
  free: { monthly: 15, yearly: 99 },
  premium: { monthly: 45, yearly: 399 },
  standard: { monthly: 30, yearly: 299 }
};

const planNames = {
  free: 'Free Plan',
  premium: 'Premium Plan',
  standard: 'Standard Plan'
};

if (planPrices[plan] && planPrices[plan][billing]) {
  const price = planPrices[plan][billing];
  const tax = Math.round(price * 0.1 * 100) / 100;
  const total = price + tax;
  
  document.getElementById('selectedPlan').textContent = planNames[plan];
  document.getElementById('subtotal').textContent = `$${price}.00`;
  document.getElementById('tax').textContent = `$${tax.toFixed(2)}`;
  document.getElementById('total').textContent = `$${total.toFixed(2)}`;
}

// Card number formatting
document.getElementById('cardNumber').addEventListener('input', function(e) {
  let value = e.target.value.replace(/\s/g, '').replace(/[^0-9]/gi, '');
  let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
  e.target.value = formattedValue;
});

// CVV validation
document.getElementById('cvv').addEventListener('input', function(e) {
  e.target.value = e.target.value.replace(/[^0-9]/g, '');
});
</script>