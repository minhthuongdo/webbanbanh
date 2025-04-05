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
        <title>Đơn hàng chưa xử lý</title>
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
            <h2>Danh sách đơn hàng chưa xử lý</h2>

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
                  <td>DH134</td>
                  <td>KH008</td>
                  <td>04/12/2024</td>
                  <td>BK03, DN01</td>
                  <td>310.000đ</td>
                  <td class="chuaxuly">Chưa xử lý</td>
                  <td>Quận 1</td>
                  <td><a href=""><i class="fa-solid fa-eye"></i></a></td>
                </tr>
                <tr>
                    <td>DH133</td>
                    <td>KH003</td>
                    <td>04/12/2024</td>
                    <td>DN01, DN02, DN03, DN04, DN05</td>
                    <td>115.000đ</td>
                    <td class="chuaxuly">Chưa xử lý</td>
                    <td>Quận 1</td>
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