const searchIcon = document.querySelector(".search-icon")
const searchForm = document.querySelector(".search-form")

searchIcon.addEventListener("click", () => {
  searchForm.classList.toggle("active");
  cartItemsContainer.classList.remove("active");
  userForm.classList.remove("active");
  navbar.classList.remove("active");
});

const cartIcon = document.querySelector(".cart-icon")
const cartItemsContainer= document.querySelector(".cart-items-container")

cartIcon.addEventListener("click", () => {
  cartItemsContainer.classList.toggle("active");
  searchForm.classList.remove("active");
  userForm.classList.remove("active");
  navbar.classList.remove("active");
});
const userIcon = document.querySelector(".user-icon")
const userForm = document.querySelector(".user-form")

userIcon.addEventListener("click", () => {
  userForm.classList.toggle("active");
  searchForm.classList.remove("active");
  cartItemsContainer.classList.remove("active");
  navbar.classList.remove("active");
});
const menuIcon = document.querySelector(".menu-icon")
const navbar = document.querySelector(".navbar")
  menuIcon.addEventListener("click", () => {
  navbar.classList.toggle("active");
  searchForm.classList.remove("active");
  cartItemsContainer.classList.remove("active");
  userForm.classList.remove("active");
});
window.onscroll = ()=>{
  cartItemsContainer.classList.remove("active");
  searchForm.classList.remove("active");
  navbar.classList.remove("active");
  userForm.classList.remove("active");
}
document.getElementById("toggleImage").addEventListener("click", function() {
  var content = document.getElementById("toggleContent");
  // Kiểm tra hiển thị nội dung và chuyển đổi trạng thái
  if (content.style.display === "none") {
      content.style.display = "block";
  } else {
      content.style.display = "none";
  }
});
const formIcon = document.querySelector(".product-image")
const formForm = document.querySelector(".about-us")

formIcon.addEventListener("click", () => {
  formForm.classList.add('active');
  cartItemsContainer.classList.remove("active");
  userForm.classList.remove('active');
  navbar.classList.remove('active');
});

document.addEventListener("DOMContentLoaded", function () {
    // Select the form element
    const form = document.querySelector(".payment--form");

    // Add an event listener for form submission
    form.addEventListener("submit", function (event) {
        // Prevent form submission
        event.preventDefault();

        // Collect input fields
        const receiver = document.getElementById("payment--receiver");
        const phone = document.getElementById("payment--phone");
        const address = document.getElementById("payment--adr");

        // Initialize validation flag
        let isValid = true;

        // Reset previous error styles/messages
        const resetError = (input) => {
            input.style.borderColor = ""; // Reset border color
        };
        resetError(receiver);
        resetError(phone);
        resetError(address);

        // Validate "Họ tên" field
        if (!receiver.value.trim()) {
            receiver.style.borderColor = "red"; // Highlight error
            alert("Vui lòng nhập họ tên người nhận.");
            receiver.focus();
            isValid = false;
        } 
        // Validate "Điện thoại" field
        else if (!phone.value.trim() || !phone.validity.valid) {
            phone.style.borderColor = "red"; // Highlight error
            alert("Vui lòng nhập số điện thoại hợp lệ.");
            phone.focus();
            isValid = false;
        } 
        // Validate "Địa chỉ" field
        else if (!address.value.trim()) {
            address.style.borderColor = "red"; // Highlight error
            alert("Vui lòng nhập địa chỉ nhận hàng.");
            address.focus();
            isValid = false;
        }

        // If all fields are valid, allow form submission
        if (isValid) {
            alert("Đặt hàng thành công! Cảm ơn bạn đã mua hàng.");
            form.submit(); // Submit the form
        }
    });
});
