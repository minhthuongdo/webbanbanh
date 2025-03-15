const searchIcon = document.querySelector(".search-icon");
const searchForm = document.querySelector(".search-form");
const userIcon = document.querySelector(".user-icon");
const userForm = document.querySelector(".user-form");
const cartIcon = document.querySelector(".cart-icon");
const cartModal = document.querySelector(".cart-modal");
const navbar = document.querySelector(".navbar");
const menuIcon = document.querySelector(".menu-icon");

searchIcon.addEventListener("click", () => {
  // Toggle search form visibility
  searchForm.classList.toggle("active");

  // Close other components
  if (searchForm.classList.contains("active")) {
    userForm.classList.remove("active");
    cartModal.classList.remove("active");
    navbar.classList.remove("active");
  }
});

userIcon.addEventListener("click", () => {
  // Toggle user form visibility
  userForm.classList.toggle("active");

  // Close other components
  if (userForm.classList.contains("active")) {
    searchForm.classList.remove("active");
    cartModal.classList.remove("active");
    navbar.classList.remove("active");
  }
});

cartIcon.addEventListener("click", () => {
  // Toggle cart modal visibility
  cartModal.classList.toggle("active");

  // Close other components
  if (cartModal.classList.contains("active")) {
    searchForm.classList.remove("active");
    userForm.classList.remove("active");
    navbar.classList.remove("active");
  }
});

menuIcon.addEventListener("click", () => {
  // Toggle navbar visibility
  navbar.classList.toggle("active");

  // Close other components
  if (navbar.classList.contains("active")) {
    searchForm.classList.remove("active");
    userForm.classList.remove("active");
    cartModal.classList.remove("active");
  }
});

// Close all components when scrolling up or down
let lastScrollTop = 0;
window.addEventListener("scroll", () => {
  const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;
  if (currentScrollTop !== lastScrollTop) {
    searchForm.classList.remove("active");
    userForm.classList.remove("active");
    cartModal.classList.remove("active");
    navbar.classList.remove("active");
  }
  lastScrollTop = currentScrollTop;
});


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
      window.location.href = "../Sp/Cupcake.html"; // Chuyển hướng đến cupcake.html
  } else if (searchQuery === "cookie") {
      window.location.href = "../Sp/Cookies.html"; // Chuyển hướng đến cookie.html
  } else if (searchQuery === "bánh kem") {
      window.location.href = "../Sp/Bento.html"; // Chuyển hướng đến bento.html
  } else if (searchQuery === "bánh su kem") {
      window.location.href = "../Sp/SuKem.html"; // Chuyển hướng đến sukem.html
  } else if (searchQuery === "donut") {
      window.location.href = "../Sp/Donut.html"; // Chuyển hướng đến donut.html
  } else {
      // Danh sách các URL ngẫu nhiên
    const randomPages = [
      "../Sp/Cupcake.html",
      "../Sp/Cookies.html",
      "../Sp/Bento.html",
      "../Sp/SuKem.html",
      "../Sp/Donut.html",
      "../Sp/page_2.html",
      "../Sp/page_3.html"
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

