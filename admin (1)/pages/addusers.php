<!DOCTYPE php>
<php lang="vi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script 
          src="https://kit.fontawesome.com/435cea2233.js" 
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="css/addusers.css"/>
        <title>Thêm khách hàng</title>
    </head>
    <body>
        <div class="container">
          <aside>
            <div class="top">
              <div class="logo">
                <a href="../index.php"><img src="images/logo.jpg" alt="logo"></a>
                <h1>Bread House</h1>
              </div>
              <div class="close" id="close-btn">
                <i class="fa-solid fa-xmark"></i>
              </div>
            </div>

            <div class="sidebar">
              <a href="../admin.php" class="active">
                <i class="fa-solid fa-table-columns" title="Bảng tin"></i>
                <h3>Bảng tin</h3>
              </a>
              <a href="products.php" class="active">
                <i class="fa-solid fa-cubes-stacked" title="Sản phẩm"></i>
                <h3>Sản phẩm</h3>
              </a>
              <a href="user.php" class="active">
                <i class="fa-solid fa-user" title="Khách hàng"></i>
                <h3>Khách hàng</h3>
              </a>
              <a href="orders.php" class="active">
                <i class="fa-solid fa-truck-fast" title="Đơn hàng"></i>
                <h3>Đơn hàng</h3>
              </a>
              <a href="statistics.php" class="active">
                <i class="fa-solid fa-chart-simple" title="Thống kê"></i>
                <h3>Thống kê</h3>
              </a>
              <a href="messages.php" class="active">
                <i class="fa-regular fa-envelope" title="Tin nhắn"></i>
                <h3>Tin nhắn</h3>
                <span class="message-count">2</span>
              </a>
              <a href="adminlogin.php" class="active">
                <i class="fa-solid fa-right-from-bracket" title="Đăng xuất"></i>
                <h3>Đăng xuất</h3>
              </a>
            </div>
          </aside>
        <!------NGOÀI ASIDE------>
        <main>
          <h1>Thêm khách hàng</h1>
          <div class="form-container">
            <form action="#" method="post" class="add-user-form">
              
                <div class="smallrow">
                  <div>
                    <label for="user-id">Mã khách hàng:</label>
                    <input type="text" id="user-id" name="user-id" placeholder="Nhập mã khách hàng" required>
                  </div>

                  <div>
                    <label for="user-login-name">Tên đăng nhập (nickname):</label>
                    <input type="text" id="user-login-name" name="user-login-name" placeholder="Nhập tên đăng nhập (nickname)" required>
                  </div>

                  <div>
                    <label for="user-pass">Mật khẩu tài khoản: </label>
                    <input type="text" id="user-pass" name="user-pass" placeholder="Nhập mật khẩu tài khoản" required>
                  </div>
                </div>
                
                <div class="row">
                  <div>
                    <label for="user-name">Họ và tên:</label>
                    <input type="text" id="user-name" name="user-name" placeholder="Nhập tên khách hàng" required>
                  </div>

                  <div>
                    <label for="address">Địa chỉ:</label>
                    <input type="text" id="address" name="address" placeholder="Nhập địa chỉ" required>
                  </div>
                </div>

                <div class="row">
                  <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Nhập email" required>
                  </div>
                  
                  <div>
                    <label for="tel">Số điện thoại:</label>
                    <input type="tel" id="tel" name="tel" placeholder="Nhập số điện thoại" required>
                  </div>

                </div>
                
                <button type="submit" class="submit-btn">Thêm người dùng</button>
            </form>

            <!-- POPUP KHI THÊM NGƯỜI DÙNG THÀNH CÔNG-->
            <div id="popup-success" class="popup hidden">
              <p>Thêm người dùng thành công!</p>
              <button onclick="closePopup()">Đóng</button>
            </div>
            
          </div>

        </main>
        <!------GÓC PHẢI TRÊN CÙNG------>

        <div class="right">
          <div class="top">
            <button id="menu-btn">
              <i class="fa-solid fa-bars"></i>
            </button>
            <div class="profile">
              <div class="info">
                <p>Hé lô, <b>Kyle</b></p>
                <p>Quản trị viên</p>
              </div>
              <div class="profile-photo">
                <img src="images/adminpic.png" alt="adminpic"/>
              </div>
            </div>
          </div>
          <!------HẾT PHẦN TOP------>


        </div>
      </div>
      <script src="js/addusers.js"></script>
    </body>
</php>