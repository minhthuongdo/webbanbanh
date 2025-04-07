document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");
  const passwordField = document.querySelector("input[type='password']:nth-of-type(1)");
  const confirmPasswordField = document.getElementById("confirm-password");
  const successPopup = document.getElementById("successPopup");
  const closePopup = document.getElementById("closePopup");

  form.addEventListener("submit", function (e) {
    e.preventDefault(); // Ngăn chặn gửi form mặc định

    // Kiểm tra nếu mật khẩu và nhập lại mật khẩu khớp
    if (passwordField.value.trim() !== confirmPasswordField.value.trim()) {
      alert("Mật khẩu và Nhập lại mật khẩu không khớp. Vui lòng thử lại.");
      confirmPasswordField.focus(); // Đặt con trỏ vào trường Nhập lại mật khẩu
      return;
    }

    // Hiển thị popup đăng ký thành công
    successPopup.style.display = "flex";
  });

  // Đóng popup và chuyển hướng sau khi người dùng nhấn Đóng
  closePopup.addEventListener("click", function () {
    successPopup.style.display = "none";
    window.location.href = "../User/user.html"; // Chuyển hướng đến trang người dùng
  });
});
