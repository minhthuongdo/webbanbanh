<!DOCTYPE php>
<php lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
        src="https://kit.fontawesome.com/435cea2233.js" 
        crossorigin="anonymous"
    ></script>
    <link rel="shortcut icon" type="Imageslogo" href="../Images/donut_4.jpg">
    <title>Thông tin bánh</title>
    <link rel="stylesheet" href="../css/form1.css">
</head>
<body>
    <header class="header">
        <div class="logo">
          <img src="../Images/panner.jpg" alt="Logo" class="ImagesLogo">
        </div>
        <nav class="navbar">
          <a href="..//User/User.php">TRANG CHỦ</a>
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
          <a href="#About">GIỚI THIỆU</a>
        </nav>
        <div class="icons">
            <div class="search-icon" ><i class="fa-solid fa-magnifying-glass"></i></div>
            <div class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span id="cart-count">0</span> <!-- Số lượng sản phẩm trong giỏ -->
            </div>
            <a href="../User/profile.php" class="user-icon"><i class="fa-solid fa-user"></i></a>
            <div class="menu-icon"><i class="fas fa-bars"></i></div>
        </div> 
     
        
        <div class="search-form">
            <form onsubmit="return handleSearch(event)">
                <input 
                    type="search" 
                    name="search" 
                    id="search-box" 
                    placeholder="Search here..." 
                    required
                />
                <button class="search-button" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <div class="user-form">
            <a class="chs" href="../User/login.php">Đăng nhập</a><a class="chs" href="../User/signup.php">Đăng ký</a>
        </div>
    </header>
    <section class="form" id="about-us">
        <div class="container">
            <div class="img" id="banhxukem">
                <img src="../Images/donut_4.jpg" alt=""/>
                </div>
                <div class="content">
                   <h1 class="title"><span>Donut </span>Chocolate Sprinkle</h1>
                  <p> Thành phần
                   bột mì, trứng, bơ, đường, sữa, socola, sprinkle</p>
                  <p>Cách bảo quản
                  Bảo quản ở nhiệt độ thấp, khoảng 15-20°C để socola và các thành phần giữ được độ tươi ngon.
                  Bánh có thể được bảo quản trong tủ lạnh khoảng 2-3 ngày.
                  Nên sử dụng bánh trong thời gian sớm nhất để đảm bảo chất lượng tốt nhất.</p>
                    <div class="price">30.000</div>
                <!--thanh tang giam so luong banh-->
                    <div class="quantity-selector">
                        <button onclick="decrement()">-</button>
                        <input type="number" id="quantity" value="1" min="1" />
                        <button onclick="increment()">+</button>
                    </div>

                <a class="btn" href="javascript:void(0);" onclick="handleAddToCart(9)">Thêm vào giỏ hàng</a>
                </div>
        </div>
    </section>
    <!--footer begins-->
    <footer class="footer">
        <div class="social-media">
            <a href="" class="fab fa-facebook-f"></a>
            <a href="" class="fab fa-twitter"></a>
            <a href="" class="fab fa-instagram"></a>
            <a href="" class="fab fa-linkedin"></a>
            <a href="" class="fab fa-pinterest-p"></a>
            <p>Khung giờ hoạt động: 9:00 - 22:30</p>
            <p>Các ngày trong tuần</p>
            <p>2024 by The Cake&Cake Group</p>
            </div>
    </footer>
    <script src="../js/form1.js"></script>
    <script src="../js/user.js"></script>
    <script src="../js/cart.js"></script>
</body>
</php>
