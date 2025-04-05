<!DOCTYPE php>
<php lang="vi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script 
          src="https://kit.fontawesome.com/435cea2233.js" 
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="../css/loginsignup.css"/>
        <title>Bread House</title>
        <link rel="shortcut icon" type="Imageslogo" href="../Images/logo.jpg">
    </head>
    <body>
        <header class="header">
            <div href="" class="logo">
                <img src="../Images/Logo.jpg" alt="Logo" class="ImagesLogo">
            </div>

            <nav class="navbar">
                <a href="../index.php">TRANG CHỦ</a>
                <a href="#Menu">SẢN PHẨM</a>
                <a href="#Bestseller">BÁN CHẠY</a>
                <a href="#contact">LIÊN HỆ</a>
                <a href="#About">GIỚI THIỆU</a>
            </nav>
            
        </header>
            <div class="wrapper">
                <form action="" onsubmit="return check(this)">
                    <h1>Đăng nhập</h1>
                    <div class="input-box">
                        <span class="details">Tên người dùng: </span>
                        <input type="text" id="user" name="user" required>
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <div class="input-box">
                        <span class="details">Mật khẩu: </span>
                        <input type="password" id="password" name="password" required>
                        <i class="fa-solid fa-eye-slash" id="show-password"></i>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">Ghi nhớ tôi</label>
                        <a href="../User/forgotpassword.php">Quên mật khẩu</a>
                    </div>

                    <button type="submit" class="btn">Đăng nhập</button>
                </form>
            </div>

            <!-- Popup thông báo lỗi -->
            <div class="popup" id="error-popup">
                <div class="popup-content">
                    <span id="popup-message"><h1>Nhập sai tên đăng nhập hoặc mật khẩu!</h1></span>
                    <button onclick="closePopup()">Đóng</button>
                </div>
            </div>
            
        <script src="../js/login.js"></script>
    </body>
</php>