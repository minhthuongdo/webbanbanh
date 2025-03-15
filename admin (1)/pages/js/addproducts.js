const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})

// Mở popup
function showPopup() {
    const popup = document.getElementById('popup-success');
    popup.classList.remove('hidden');
    popup.classList.add('visible');
  }
  
  // Đóng popup
  function closePopup() {
    const popup = document.getElementById('popup-success');
    popup.classList.remove('visible');
    popup.classList.add('hidden');
  }
  
  // Gắn sự kiện cho form
  document.querySelector('.add-product-form').addEventListener('submit', function (event) {
    event.preventDefault(); // Ngăn trình duyệt load lại trang
    showPopup();
  });
  