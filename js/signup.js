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

// Xử lý sự kiện đăng ký thành công
document.querySelector("form").addEventListener("submit", function(event) {
  event.preventDefault(); // Ngăn form gửi đi để kiểm tra kết quả đăng ký

  // Hiển thị popup đăng ký thành công
  const popup = document.getElementById("successPopup");
  popup.style.display = "flex";

  // Đóng popup và chuyển hướng sau khi người dùng nhấn Đóng
  document.getElementById("closePopup").addEventListener("click", () => {
    popup.style.display = "none";
    window.location.href = "../User/profile.html"; // Chuyển hướng đến trang index
  });
});
