document.addEventListener("DOMContentLoaded", () => {
  // Khai báo các phần tử cần sử dụng
  const searchIcon = document.querySelector(".search-icon");
  const searchForm = document.querySelector(".search-form");
  const cartIcon = document.querySelector(".cart-icon");
  const cartItemsContainer = document.querySelector(".cart-items-container");
  const passwordPopup = document.getElementById("passwordPopup");
  const popupMessage = document.getElementById("popupMessage");

  // Tính năng mở search form và đóng giỏ hàng
  searchIcon.addEventListener("click", () => {
      searchForm.classList.toggle("active");
      cartItemsContainer?.classList.remove("active");
  });

  // Tính năng mở giỏ hàng và đóng search form
  cartIcon.addEventListener("click", () => {
      cartItemsContainer?.classList.toggle("active");
      searchForm.classList.remove("active");
  });

  // Tính năng hiển thị mật khẩu
  document.querySelectorAll(".toggle-password").forEach((toggleIcon) => {
      toggleIcon.addEventListener("click", () => {
          const input = document.getElementById(toggleIcon.id.replace("toggle-", ""));
          const type = input.getAttribute("type") === "password" ? "text" : "password";
          input.setAttribute("type", type);
          toggleIcon.classList.toggle("fa-eye-slash");
          toggleIcon.classList.toggle("fa-eye");
      });
  });

  // Xử lý sự kiện đổi mật khẩu
  document.querySelector(".btn").addEventListener("click", (event) => {
      event.preventDefault(); // Ngăn form gửi

      const newPassword = document.getElementById("newPassword").value;
      const confirmPassword = document.getElementById("confirmPassword").value;

      if (newPassword === confirmPassword) {
          popupMessage.textContent = "Đổi mật khẩu thành công";
          showPopup();
          setTimeout(() => window.location.href = "../index.html", 2000); // Chuyển trang sau 2 giây
      } else {
          popupMessage.textContent = "Mật khẩu nhập lại không trùng khớp";
          showPopup();
      }
  });

  // Hàm hiển thị popup
  function showPopup() {
      passwordPopup.classList.add("popup-show");
  }

  // Đóng popup
  window.closePopup = function() {
      passwordPopup.classList.remove("popup-show");
  };
});
