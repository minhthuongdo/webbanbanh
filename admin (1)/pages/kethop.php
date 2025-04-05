<!DOCTYPE php>
<php lang="vi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script 
          src="https://kit.fontawesome.com/435cea2233.js" 
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="css/style.css"/>
        <title>Lọc đơn kết hợp</title>
    </head>
    <body>
        <div class="container">
          <aside>
            <div class="top">
              <div class="logo">
                <a href="#"><img src="images/logo.jpg" alt="logo"></a>
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
              <a href="../adminlogin.php" class="active">
                <i class="fa-solid fa-right-from-bracket" title="Đăng xuất"></i>
                <h3>Đăng xuất</h3>
              </a>
            </div>
          </aside>
        <!------NGOÀI ASIDE------>
        <main>
          <div class="list">
            <h2>Danh sách lọc đơn hàng kết hợp</h2>

            <div class="filter">
                <select id="filter-time" name="filter-time">
                    <option>--Chọn thời điểm--</option>
                    <option value="">Tuần này</option>
                    <option value="">Tuần trước</option>
                    <option value="" selected>Tất cả thời điểm</option>
                </select>
                <select id="filter-state" name="filter-state">
                    <option>--Chọn tình trạng--</option>
                    <option value="">Chưa xử lý</option>
                    <option value="" selected>Hoàn thành</option>
                    <option value="">Đã hủy</option>
                </select>
                <select id="sort-district" name="sort-district">
                    <option>--Chọn quận--</option>
                    <option value="">Quận 1</option>
                    <option value="">Quận 3</option>
                    <option value="">Quận 4</option>
                    <option value="">Quận 5</option>
                    <option value="">Quận 6</option>
                    <option value="" selected>Quận 7</option>
                    <option value="">Quận 8</option>
                    <option value="">Quận 10</option>
                    <option value="">Quận 11</option>
                    <option value="">Quận 12</option>
                    <option value="">Thành phố Thủ Đức (Q2, Q9,QTĐ)</option>
                    <option value="">Quận Bình Tân</option>
                    <option value="">Quận Bình Thạnh</option>
                    <option value="">Quận Gò Vấp</option>
                    <option value="">Quận Phú Nhuận</option>
                    <option value="">Quận Tân Bình</option>
                    <option value="">Quận Tân Phú</option>
                </select>

                <button type="submit" id="btn"><a href="kethop.php">Tìm kiếm</a></button>
            </div>

            <table>
              <thead>
                <tr>
                  <th>Mã đơn hàng</th>
                  <th>Mã khách hàng</th>
                  <th>Ngày</th>
                  <th>Sản phẩm</th>
                  <th>Tổng tiền</th>
                  <th>Tình trạng</th>
                  <th>Địa chỉ</th>
                  <th>Xem đơn hàng</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>DH132</td>
                    <td>KH001</td>
                    <td>04/12/2024</td>
                    <td>CK01, CK04, CK05</td>
                    <td>90.000đ</td>
                    <td class="success">Hoàn thành</td>
                    <td>Quận 7</td>
                    <td><a href="dh132.php" target="_blank"><i class="fa-solid fa-eye"></i></a></td>
                </tr>
                <tr>
                    <td>DH129</td>
                    <td>KH012</td>
                    <td>03/12/2024</td>
                    <td>CK04, CK05, CC02</td>
                    <td>90.000đ</td>
                    <td class="success">Hoàn thành</td>
                    <td>Quận 7</td>
                    <td><a href=""><i class="fa-solid fa-eye"></i></a></td>
                </tr>
                <tr>
                    <td>DH112</td>
                    <td>KH012</td>
                    <td>01/12/2024</td>
                    <td>CK04, CK05, CC02</td>
                    <td>90.000đ</td>
                    <td class="success">Hoàn thành</td>
                    <td>Quận 7</td>
                    <td><a href=""><i class="fa-solid fa-eye"></i></a></td>
                </tr>
                  
              </tbody>
            </table>
            <div class="pagination">
              <a href="#">&laquo;</a>
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#">&raquo;</a>
            </div>
          </div>
        </main>
        <!------HẾT PHẦN MAIN------>

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
      <script src="js/script.js"></script>
    </body>
</php>