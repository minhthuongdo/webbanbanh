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

function handleSearch(event) {
  event.preventDefault(); // Ngăn chặn form gửi đi

  const searchQuery = document.getElementById("search-box").value.trim().toLowerCase(); // Lấy giá trị nhập vào và chuyển thành chữ thường

  // Kiểm tra từ khóa và chuyển hướng tương ứng
  if (searchQuery === "cupcake") {
      window.location.href = "../B09/Sp/Cupcake_index.html"; // Chuyển hướng đến cupcake.html
  } else if (searchQuery === "cookie") {
      window.location.href = "../B09/Sp/Cookies_index.html"; // Chuyển hướng đến cookie.html
  } else if (searchQuery === "bánh kem") {
      window.location.href = "../B09/Sp/Bento_index.html"; // Chuyển hướng đến bento.html
  } else if (searchQuery === "bánh su kem") {
      window.location.href = "../B09/Sp/SuKem_index.html"; // Chuyển hướng đến sukem.html
  } else if (searchQuery === "donut") {
      window.location.href = "../B09/Sp/Donut_index.html"; // Chuyển hướng đến donut.html
  } else {
      // Danh sách các URL ngẫu nhiên
    const randomPages = [
      "../B09/Sp/Cupcake_index.html",
      "../B09/Sp/Cookies_index.html",
      "../B09/Sp/Bento_index.html",
      "../B09/Sp/SuKem_index.html",
      "../B09/Sp/Donut_index.html",
      "../Sp/page_2_index.html",
      "../Sp/page_3_index.html"
  ];

  // Chọn ngẫu nhiên một URL từ danh sách
  const randomIndex = Math.floor(Math.random() * randomPages.length);
  const randomPage = randomPages[randomIndex];
  
  // Chuyển hướng đến URL được chọn
  window.location.href = randomPage;
}}


function toggleDropdown(event) {
  event.preventDefault(); // Ngăn chặn hành động mặc định của liên kết
  const dropdown = event.target.closest('.dropdown');
  dropdown.classList.toggle("active");
}

