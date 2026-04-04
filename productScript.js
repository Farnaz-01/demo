

const quantityInput = document.getElementById("quantity");
const totalInput = document.getElementById("total");
const unitPrice = 1000;


quantityInput.addEventListener("input", function() {
    let qty = quantityInput.value;

   
    if (qty < 0) {
        quantityInput.value = 0;
        qty = 0;
        alert("Error!! Quantity cannot be negative. Set to 0.");
    }

    
    let totalValue = unitPrice * qty;
   totalInput.value = totalValue;   // Display total

    
    if (totalValue > 1000) {
        alert("Congrats!! You've spent more than 1000.");
    }

    console.log(totalInput);
     //console.log(totalInput.value);
});




