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

// Hàm hiển thị ảnh được chọn trước khi thay đổi
function previewImage(event) {
    const reader = new FileReader();
    const imageField = document.getElementById('profile-image-preview');

    reader.onload = function () {
        if (reader.readyState === 2) {
            imageField.src = reader.result; // Cập nhật hình ảnh preview
        }
    };

    reader.readAsDataURL(event.target.files[0]); // Đọc file hình ảnh
}

function openPopup(popupId) {
    const popup = document.getElementById(popupId);
    if (popup) {
        popup.style.display = "flex"; // Hiển thị popup
    }
}

function closePopup(popupId) {
    const popup = document.getElementById(popupId);
    if (popup) {
        popup.style.display = "none"; // Ẩn popup
    }
}

// Đóng popup khi click ra ngoài nội dung
window.onclick = function (event) {
    const popups = document.querySelectorAll(".popup");
    popups.forEach((popup) => {
        if (event.target === popup) {
            popup.style.display = "none";
        }
    });
};

// Hàm hiển thị chi tiết đơn hàng
function showOrderDetails(orderTime, orderId, orderItems, orderTotal, orderStatus) {
    // Gán thông tin vào popup
    document.getElementById('order-time').textContent = orderTime;
    document.getElementById('order-id').textContent = orderId;
    document.getElementById('order-items').textContent = orderItems;
    document.getElementById('order-total').textContent = orderTotal;
    document.getElementById('order-status').textContent = orderStatus;
  
    // Hiển thị popup chi tiết
    document.getElementById('popup-order-details').style.display = 'block';
}
   