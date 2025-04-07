const searchIcon = document.querySelector(".search-icon")
const searchForm = document.querySelector(".search-form")

searchIcon.addEventListener("click", () => {
  searchForm.classList.add('active');
  cartItemsContainer.classList.remove("active");
});

const cartIcon = document.querySelector(".cart-icon")
const cartItemsContainer= document.querySelector(".cart-items-container")

cartIcon.addEventListener("click", () => {
  cartItemsContainer.classList.add("active");
  searchForm.classList.remove('active');
});

const showPassword = document.querySelector("#show-password");
const passwordField = document.querySelector("#password");

showPassword.addEventListener("click", function(){
  this.classList.toggle("fa-eye");
  const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
  passwordField.setAttribute("type", type);
})

function check(form){
  if (form.user.value == "user" && form.password.value == "userusing") {
      window.location.href = "../User/user.html";
      return false;
    } else {
      // Hiển thị popup khi mật khẩu sai
      document.getElementById("error-popup").style.display = "flex";
      return false;
    }
}
function closePopup() {
    // Đóng popup khi nhấn nút "Đóng"
    document.getElementById("error-popup").style.display = "none";
}