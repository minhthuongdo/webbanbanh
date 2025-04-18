<!DOCTYPE php>
<php lang="vi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script 
          src="https://kit.fontawesome.com/435cea2233.js" 
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="css/admin.css"/>
        <title>Bread House Admin</title>
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
              <a href="#" class="active">
                <i class="fa-solid fa-table-columns" title="Bảng tin"></i>
                <h3>Bảng tin</h3>
              </a>
              <a href="pages/products.php" class="active">
                <i class="fa-solid fa-cubes-stacked" title="Sản phẩm"></i>
                <h3>Sản phẩm</h3>
              </a>
              <a href="pages/user.php" class="active">
                <i class="fa-solid fa-user" title="Khách hàng"></i>
                <h3>Khách hàng</h3>
              </a>
              <a href="pages/orders.php" class="active">
                <i class="fa-solid fa-truck-fast" title="Đơn hàng"></i>
                <h3>Đơn hàng</h3>
              </a>
              <a href="pages/statistics.php" class="active">
                <i class="fa-solid fa-chart-simple" title="Thống kê"></i>
                <h3>Thống kê</h3>
              </a>
              <a href="pages/messages.php" class="active">
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
          <h1>Bảng tin</h1>

          <div class="date">
            <input type="date">
          </div>

          <div class="insights">
            <div class="sales">
              <i class="fa-solid fa-chart-line"></i>
              <div class="middle">
                <div class="left">
                  <h3>Doanh số bán hàng</h3>
                  <h1>950.000đ</h1>
                </div>
                <div class="progress">
                  <svg>
                    <circle cx="38" cy="38" r="36"></circle>
                  </svg>
                  <div class="number">
                    <h4>81%</h4>
                  </div>
                </div>
              </div>
              <p>24 giờ qua</p>
            </div>
            <!------HẾT PHẦN BÁN HÀNG------>
            <div class="expenses">
              <i class="fa-solid fa-money-bill"></i>
              <div class="middle">
                <div class="left">
                  <h3>Tổng chi tiêu</h3>
                  <h1>450.000đ</h1>
                </div>
                <div class="progress">
                  <svg>
                    <circle cx="38" cy="38" r="36"></circle>
                  </svg>
                  <div class="number">
                    <h4>45%</h4>
                  </div>
                </div>
              </div>
              <p>24 giờ qua</p>
            </div>
            <!------HẾT PHẦN CHI TIÊU------>
            <div class="incomes">
              <i class="fa-solid fa-money-bill-trend-up"></i>
              <div class="middle">
                <div class="left">
                  <h3>Tổng thu nhập</h3>
                  <h1>500.000đ</h1>
                </div>
                <div class="progress">
                  <svg>
                    <circle cx="38" cy="38" r="36"></circle>
                  </svg>
                  <div class="number">
                    <h4>50%</h4>
                  </div>
                </div>
              </div>
              <p>24 giờ qua</p>
            </div>
            <!------HẾT PHẦN THU NHẬP------>
          </div>
          <!------HẾT PHẦN INSIGHTS------>
          <div class="recent-orders">
            <h2>Các đơn hàng gần đây</h2>
            <table>
              <thead>
                <tr>
                  <th>Mã đơn hàng</th>
                  <th>Mã khách hàng</th>
                  <th>Tổng tiền</th>
                  <th>Trạng thái</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>DH134</td>
                  <td>KH008</td>
                  <td>310.000đ</td>
                  <td class="chuaxuly">Chưa xử lý</td>
                </tr>
                <tr>
                    <td>DH133</td>
                    <td>KH003</td>
                    <td>115.000đ</td>
                    <td class="chuaxuly">Chưa xử lý</td>
                </tr>
                <tr>
                    <td>DH132</td>
                    <td>KH024</td>
                    <td>90.000đ</td>
                    <td class="success">Hoàn thành</td>
                </tr>
                <tr>
                    <td>DH131</td>
                    <td>KH015</td>
                    <td>280.000đ</td>
                    <td class="success">Hoàn thành</td>
                </tr>
                <tr>
                    <td>DH130</td>
                    <td>KH007</td>
                    <td>270.000đ</td>
                    <td class="cancel">Đã hủy</td>
                </tr>
                <tr>
                    <td>DH129</td>
                    <td>KH012</td>
                    <td>90.000đ</td>
                    <td class="success">Hoàn thành</td>
                </tr>
                
              </tbody>
            </table>
            <a href="pages/orders.php">Hiển thị tất cả</a>
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

          <div class="recent-updates">
            <h2>Cập nhật gần đây</h2>
            <div class="updates">
              <div class="update">
                <div class="profile-photo">
                  <img src="images/adminpic.png">
                </div>
                <div class="message">
                  <p>Đơn của <b>Chi Em</b> đã hoàn thành</p>
                  <p>2 phút trước</p>
                </div>
              </div>
              <div class="update">
                <div class="profile-photo">
                  <img src="images/adminpic.png">
                </div>
                <div class="message">
                  <p>Đơn của <b>Chi Anh</b> đang được vận chuyển</p>
                  <p>3 phút trước</p>
                </div>
              </div>
              <div class="update">
                <div class="profile-photo">
                  <img src="images/adminpic.png">
                </div>
                <div class="message">
                  <p>Đơn của <b>Anh Em</b> đã hoàn thành</p>
                  <p>5 phút trước</p>
                </div>
              </div>
            </div>
          </div>
          <!------HẾT PHẦN CẬP NHẬP GẦN ĐÂY------>

          <div class="sales-analytics">
            <a href="pages/statistics.php"><h2>Bảng thống kê</h2></a>

            <div class="item online">
              <div class="icon">
                <i class="fa-solid fa-box"></i>
              </div>
              <div class="right">
                <div class="info">
                  <h3>Đơn hàng mua trực tuyến</h3>
                  <p>24 giờ qua</p>
                </div>
                <h3>+897</h3>
              </div>
            </div>

            <div class="item offline">
              <div class="icon">
                <i class="fa-solid fa-hands-holding"></i>
              </div>
              <div class="right">
                <div class="info">
                  <h3>Đơn hàng mua trực tiếp</h3>
                  <p>24 giờ qua</p>
                </div>
                <h3>+587</h3>
              </div>
            </div>

            <div class="item customers">
              <div class="icon">
                <i class="fa-solid fa-people-group"></i>
              </div>
              <div class="right">
                <div class="info">
                  <h3>Khách hàng mới</h3>
                  <p>24 giờ qua</p>
                </div>
                <h3>+57</h3>
              </div>
            </div>
            
          </div>

        </div>
      </div>
      <script src="js/admin.js"></script>
    </body>
</php>