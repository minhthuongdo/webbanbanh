//thanh tang giam so luong banh
//thanh tang giam so luong
function increment() {
    let quantityInput = document.getElementById("quantity");
    quantityInput.value = parseInt(quantityInput.value) + 1;
  }
  
  function decrement() {
    let quantityInput = document.getElementById("quantity");
    if (quantityInput.value > 1) {
        quantityInput.value = parseInt(quantityInput.value) - 1;
    }
  }