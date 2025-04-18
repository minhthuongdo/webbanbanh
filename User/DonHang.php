<!DOCTYPE php>
<php lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script 
    src="https://kit.fontawesome.com/435cea2233.js" 
    crossorigin="anonymous"
  ></script>
  <link rel="stylesheet" href="../css/style.css"/>
  <title>Cake & Cake</title>
  <link rel="shortcut icon" type="Imageslogo" href="../Images/logo.jpg">
  <link rel="stylesheet" href="../css/style.css">
  <!-- BOOSTRAP -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Đơn hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #fff4e6;
            margin-top: 100px;
        }
        .invoice-container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }
        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-header h1 {
            font-size: 18px;
            margin: 0;
        }
        .invoice-body {
            font-size: 14px;
        }
        .product-list {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr; /* Tên sản phẩm: 2 phần, Số lượng và Giá: 1 phần mỗi cột */
            border-bottom: 1px solid #ddd;
            font-weight: bold;
            padding: 10px 0;
        }
        .product-item {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr; /* Cột tương ứng cho dữ liệu */
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        .invoice-footer {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }
        .button {
            display: block;
            width: 100%;
            text-align: center;
            padding: 10px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }
        .button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
          <img src="../Images/panner.jpg" alt="Logo" class="ImagesLogo">
        </div>
        <nav class="navbar">
          <a href="../User/User.php">TRANG CHỦ</a>
          <div class="dropdown">
            <button class="dropbtn" onclick="toggleDropdown(event)">SẢN PHẨM</button>
            <div class="dropdown-content">
              <a href="../Sp/Cookies.php">Cookie</a>
              <a href="../Sp/Donut.php">Donut</a>
              <a href="../Sp/Cupcake.php">Cupcake</a>
              <a href="../Sp/Bento.php">Bánh kem</a>
              <a href="../Sp/SuKem.php">Su kem</a>
            </div>
          </div>
          <a href="../Sp/bestseller.php">BÁN CHẠY</a>
          <a href="#contact">LIÊN HỆ</a>
          <a href="#About">  GIỚI THIỆU </a>
        </nav>
        
   </header>
    <div class="invoice-container">
        <div class="invoice-header">
            <h1>Đơn hàng</h1>
            <p>Mã đơn hàng: <span id="invoice-id">MD002</span></p>
        </div>
        <div class="invoice-body">
            <!-- Header row for the table -->
            <div class="product-list">
                <div>Tên Sản Phẩm</div>
                <div>Số Lượng</div>
                <div>Giá Thành</div>
            </div>
            <!-- Data rows -->
            <div class="product-item">
                <div>Bánh Kem Xoài</div>
                <div>1</div>
                <div>250,000đ</div>
            </div>
            <div class="product-item">
                <div>Bánh Kem Bắp</div>
                <div>1</div>
                <div>270,000đ</div>
            </div>
            <div class="product-item"  >
                <div>Phí vận chuyển</div>
                <div></div>
                <div class="price" style=" margin-left: 10px">30,000đ</div>
            </div>
            <!-- Total row -->
            <div class="product-item" style="font-weight: bold;">
                <div>Tổng</div>
                <div></div>
                <div>550,000đ</div>
            </div>
        </div>
        <div class="invoice-footer" >
            <button class="button" onclick="printInvoice()">In Hóa Đơn</button>
            <br></br>
            <button class="button" onclick="window.location.href='../User/Thanhtoan.php';">Đặt Hàng</button>

        </div>
    </div>

    <script>
        function printInvoice() {
            const invoiceContent = `
                Đơn Hàng:
                - Mã Đơn Hàng: MD002
                - Sản Phẩm:
                    + Bánh Kem Xoài: 1 cái - 250,000đ
                    + Bánh Kem Bắp: 1 cái - 270,000đ
                    + Phí vận chuyển: 
                Tổng Cộng: 550,000đ
            `;
            alert(invoiceContent);
        }
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
      window.location.href = "../B09/Sp/Cupcake.php"; // Chuyển hướng đến cupcake.php
  } else if (searchQuery === "cookie") {
      window.location.href = "../B09/Sp/Cookies.php"; // Chuyển hướng đến cookie.php
  } else if (searchQuery === "bánh kem") {
      window.location.href = "../B09/Sp/Bento.php"; // Chuyển hướng đến bento.php
  } else if (searchQuery === "bánh su kem") {
      window.location.href = "../B09/Sp/SuKem.php"; // Chuyển hướng đến sukem.php
  } else if (searchQuery === "donut") {
      window.location.href = "../B09/Sp/Donut.php"; // Chuyển hướng đến donut.php
  } else {
      // Danh sách các URL ngẫu nhiên
    const randomPages = [
      "../B09/Sp/Cupcake.php",
      "../B09/Sp/Cookies.php",
      "../B09/Sp/Bento.php",
      "../B09/Sp/SuKem.php",
      "../B09/Sp/Donut.php",
      "../B09/Sp/page_2.php",
      "../B09/Sp/page_3.php"
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


    </script>
</body>
</php>
