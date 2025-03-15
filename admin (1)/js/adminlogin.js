const showPassword = document.querySelector("#show-password");
const passwordField = document.querySelector("#password");

showPassword.addEventListener("click", function(){
  this.classList.toggle("fa-eye");
  const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
  passwordField.setAttribute("type", type);
})

function check(form){
    if (form.admin.value == "admin" && form.password.value == "breadhouse") {
        window.location.href = "admin.html";
        return false;
      } else {
        alert("Nhập sai tên đăng nhập hoặc mật khẩu!")
        return false;
      }
}