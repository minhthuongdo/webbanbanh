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
                <form action="">
                    <h1>Đăng ký</h1>
                    <div class="input-box">
                        <span class="details">Tên người dùng: </span>
                        <input type="text" required>
                        <i class="fa-solid fa-user"></i>
                        <label>*</label>
                    </div>

                    <div class="input-box">
                        <span class="details">Mật khẩu: </span>
                        <input type="text" required>
                        <i class="fa-solid fa-lock"></i>
                        <label>*</label>
                    </div>
                    
                    <div class="input-box">
                        <span class="details">Email: </span>
                        <input type="email" required> 
                        <i class="fa-solid fa-envelope"></i>
                        <label>*</label>
                    </div>

                    <div class="input-box">
                        <span class="details">Địa chỉ: </span>
                        <input type="text" required>
                        <i class="fa-solid fa-house"></i>
                        <label>*</label>
                    </div>
                    
                    <button type="submit" class="btn" >Đăng ký</button>
                    <p class="account-link">Đã có tài khoản? <a href="login.php">Đăng nhập tại đây</a></p>
                </form>
            </div>

            <!--Popup khi đăng ký thành công-->
            <div class="popup" id="successPopup">
                <div class="popup-content">
                    <h1>Đăng ký thành công!</h1>
                    <button id="closePopup">Đóng</button>
                </div>
            </div>
            
        <script src="../js/signup.js"></script>
    </body>
</php>