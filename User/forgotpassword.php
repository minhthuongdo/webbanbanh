<!DOCTYPE php>
<php lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/435cea2233.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/forgotpassword.css"/>
    <title>Bread House</title>
</head>
<body>
    <header class="header">
        <div href="" class="logo">
            <img src="../Images/Logo.jpg" alt="Logo" class="ImagesLogo">
        </div>

        <nav class="navbar">
          <a href="">TRANG CHỦ</a>
          <a href="">SẢN PHẨM</a>
          <a href="">BÁN CHẠY</a>
          <a href="">LIÊN HỆ</a>
          <a href="">GIỚI THIỆU</a>
        </nav>
        
        <div class="icons">
            <div class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
            <div class="cart-icon"><i class="fa-solid fa-cart-plus"></i></div>
            <div class="user-icon"><i class="fa-solid fa-user"></i></div>
            <div class="menu-icon"><i class="fa-solid fa-bars"></i></div>
        </div>

        <div class="search-form">
            <input type="search" name="search" id="search-box" placeholder="Tìm kiếm..."/>
            <label for="search-box" class="fa-solid fa-magnifying-glass"></label>
        </div>
    </header>
    
    <div class="wrapper">
        <form>
            <h1>Đặt lại mật khẩu</h1>
            <div class="input-box">
                <span class="details">Mật khẩu mới:</span>
                <input type="password" id="newPassword" required>
                <i id="toggle-newPassword" class="fa-solid fa-eye-slash toggle-password"></i>
            </div>

            <div class="input-box">
                <span class="details">Nhập lại mật khẩu:</span>
                <input type="password" id="confirmPassword" required>
                <i id="toggle-confirmPassword" class="fa-solid fa-eye-slash toggle-password"></i>
            </div>

            <button type="submit" class="btn">Đổi mật khẩu</button>
        </form>
    </div>
    
    <!-- Popup thông báo kết quả -->
    <div id="passwordPopup" class="popup hidden">
        <div class="popup-content">
            <span id="popupMessage"span>
            <button onclick="closePopup()">Đóng</button>
        </div>
    </div>

    <script src="../js/forgotpassword.js"></script>
</body>
</php>
