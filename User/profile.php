<!DOCTYPE php>
<php lang="vi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script 
          src="https://kit.fontawesome.com/435cea2233.js" 
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="../css/profile.css"/>
        <title>Hồ sơ</title>
        <link rel="shortcut icon" type="Imageslogo" href="../Images/logo.jpg">
    </head>
    <body>
        <header class="header">
            <div href="" class="logo">
                <img src="../Images/panner.jpg"alt="Logo" class="ImagesLogo">
            </div>

            <nav class="navbar">
                <a href="../User/User.php">TRANG CHỦ</a>
                <a href="../User/User.php">SẢN PHẨM</a>
                <a href="../Sp/bestseller.php">BÁN CHẠY</a>
                <a href="../User/User.php#Contact">LIÊN HỆ</a>
                <a href="../User/User.php#About">GIỚI THIỆU</a>
            </nav>
            <div class="icons">
                <div class="search-icon" ><i class="fa-solid fa-magnifying-glass"></i></div>
                <div class="cart-icon"><i class="fa-solid fa-cart-plus"></i></div>
                <a href="../User/profile.php" class="user-icon"><i class="fa-solid fa-user"></i></a>
                <div class="menu-icon"><i class="fas fa-bars"></i></div>
            </div>
        </header>
        
        <!-- Nút mở popup -->
        <div class="menu">
            <button onclick="openPopup('popup-profile')">Hồ sơ</button>
            <button onclick="openPopup('popup-orders')">Đơn hàng</button>
            <button onclick="openPopup('popup-support')">Hỗ trợ</button>
        </div>

        <!-- Popup Hồ sơ -->
        <div id="popup-profile" class="popup">
            <div class="popup-content">
                <span class="close" onclick="closePopup('popup-profile')">&times;</span>
                <h2>Hồ sơ</h2>
                <form id="profile-form">
                    <div class="form-group">
                        <label for="profile-image">Hình ảnh:</label>
                        <!-- Hình ảnh hiển thị trước khi thay đổi -->
                        <img id="profile-image-preview" src="../Images/userpic.jpg" alt="Hình ảnh hồ sơ" style="max-width: 150px; height: auto; border-radius: 50%; margin-bottom: 10px;">
                        <input type="file" id="profile-image" name="profile-image" accept="Image/*" onchange="previewImage(event)">
                    </div>
                    <div class="form-group">
                        <label for="name">Họ tên:</label>
                        <input type="text" id="name" name="name" value="Ngoan xinh iu">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="ngoanxinhiu@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại:</label>
                        <input type="tel" id="phone" name="phone" value="0987654321">
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ:</label>
                        <input type="text" id="address" name="address" value="Los Angeles">
                    </div>
                    <button type="submit">Lưu thay đổi</button>
                </form>
            </div>
        </div>

        <!-- Popup Đơn hàng -->
        <div id="popup-orders" class="popup">
            <div class="popup-content">
                <span class="close" onclick="closePopup('popup-orders')">&times;</span>
                <h2>Đơn hàng</h2>
                <table>
                    <thead>
                      <tr>
                        <th>Mã đơn hàng</th>
                        <th>Đơn hàng</th>
                        <th>Tổng tiền</th>
                        <th>Tình trạng</th>
                        <th>Chi tiết</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>MD001</td>
                        <td>Chocolate Cookies, Donut</td>
                        <td>50.000đ</td>
                        <td class="success">Hoàn thành</td>
                        <td><i class="fa-solid fa-eye"
                            onclick="showOrderDetails('10:30 12/12/2024', 'MD001', 'Chocolate Cookies, Donut', '50.000đ', 'Hoàn thành')"></i></td>
                      </tr>
                      <tr>
                          <td>MD001</td>
                          <td>Chocolate Cookies, Donut</td>
                          <td>50.000đ</td>
                          <td class="success">Hoàn thành</td>
                          <td><i class="fa-solid fa-eye"
                            onclick="showOrderDetails('10:30 12/12/2024', 'MD001', 'Chocolate Cookies, Donut', '50.000đ', 'Hoàn thành')"></i></td>
                      </tr>
                      <tr>
                          <td>MD001</td>
                          <td>Chocolate Cookies, Donut</td>
                          <td>50.000đ</td>
                          <td class="success">Hoàn thành</td>
                          <td><i class="fa-solid fa-eye"
                            onclick="showOrderDetails('10:30 12/12/2024', 'MD001', 'Chocolate Cookies, Donut', '50.000đ', 'Hoàn thành')"></i></td>
                      </tr>
                      <tr>
                          <td>MD001</td>
                          <td>Chocolate Cookies, Donut</td>
                          <td>50.000đ</td>
                          <td class="success">Hoàn thành</td>
                          <td><i class="fa-solid fa-eye"
                            onclick="showOrderDetails('10:30 12/12/2024', 'MD001', 'Chocolate Cookies, Donut', '50.000đ', 'Hoàn thành')"></i></td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Popup hiển thị chi tiết đơn hàng -->
        <div id="popup-order-details" class="popup">
            <div class="popup-content">
            <span class="close" onclick="closePopup('popup-order-details')">&times;</span>
            <h2>Chi tiết đơn hàng</h2>
            <p><strong>Thời gian đặt hàng:</strong> <span id="order-time"></span></p>
            <p><strong>Mã đơn hàng:</strong> <span id="order-id"></span></p>
            <p><strong>Sản phẩm:</strong> <span id="order-items"></span></p>
            <p><strong>Tổng tiền:</strong> <span id="order-total"></span></p>
            <p><strong>Tình trạng:</strong> <span id="order-status"></span></p>
            </div>
        </div>

        <!-- Popup Hỗ trợ -->
        <div id="popup-support" class="popup">
            <div class="popup-content">
                <span class="close" onclick="closePopup('popup-support')">&times;</span>
                <h2>Hỗ trợ</h2>
                <form id="support-form">
                    <div class="form-group">
                        <label for="support1">
                        <input type="checkbox" id="support1" name="support1">
                        Tôi cần tư vấn
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="support2">
                        <input type="checkbox" id="support2" name="support2">
                        Thắc mắc khi giao hàng bánh có bình an không
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="support3">
                        <input type="checkbox" id="support3" name="support3">
                        Cách giữ bánh lâu
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="support4">
                        <input type="checkbox" id="support4" name="support4">
                        Khác
                        </label>
                    </div>
                    <button type="submit">Gửi</button>
                </form>
                <h3>Liên hệ với chúng tôi để được hỗ trợ.</h3>
            </div>
        </div>

        <script src="../js/profile.js"></script>
    </body>
</php>