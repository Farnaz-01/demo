<!DOCTYPE html>
<html>
<head>
  <title>Product Management Page</title>
</head>
<body>
  <h2>Product Management</h2>

  <!-- Fixed Unit Price -->
  <p>Unit Price: 1000</p>

  <!-- Quantity Input -->
  <label>Enter Quantity:</label>
  <input type="number" id="quantity" value="0" min="0">

  <!-- Total Price Display -->
  <p>Total Price: <input type="text" id="total" value="0" readonly></p>

  <script>
    // Fixed unit price
    var unitPrice = 1000;

    // Track if coupon alert has already been shown
    var couponShown = false;

    // Get input and display boxes
    var quantityBox = document.getElementById("quantity");
    var totalBox = document.getElementById("total");

    // Function to update total
    function updateTotal() {
      var quantity = parseInt(quantityBox.value);

      // Stop negative numbers
      if (quantity < 0 || isNaN(quantity)) {
        quantity = 0;
        quantityBox.value = 0;
        alert("Quantity cannot be negative!");
      }

      // Calculate total
      var total = unitPrice * quantity;
      totalBox.value = total;

      // Gift coupon alert (only once)
      if (total > 1000 && !couponShown) {
        alert("Congratulations! You are eligible for a gift coupon.");
        couponShown = true;
      }
    }

    // Run updateTotal whenever quantity changes
    quantityBox.addEventListener("input", updateTotal);
  </script>
</body>
</html>