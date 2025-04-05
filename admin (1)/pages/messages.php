<!DOCTYPE php>
<php lang="vi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script 
          src="https://kit.fontawesome.com/435cea2233.js" 
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="css/messages.css"/>
        <title>Tin nhắn</title>
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
              <a href="#" class="active">
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
          <div class="messages">
            <h2>Tin nhắn</h2>
            <table>
              <thead>
                <tr>
                  <th>Người gửi</th>
                  <th>Ngày</th>
                  <th>Nội dung</th>
                  <th>Trạng thái</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jeon Jung Kook</td>
                  <td>04/12/2024</td>
                  <td>Tôi muốn đặt làm bánh kem siu to khổng lồ!</td>
                  <td class="red">Chưa trả lời</td>
                </tr>
                <tr>
                  <td>Kim Tae Hyung</td>
                  <td>04/12/2024</td>
                  <td>Tôi muốn đặt bánh cookies theo hình</td>
                  <td class="red">Chưa trả lời</td>
                </tr>
                <tr>
                  <td>Park Ji Min</td>
                  <td>04/12/2024</td>
                  <td>Tôi muốn đặt số lượng lớn bánh cookies cho sinh nhật bạn tôi</td>
                  <td class="green">Đã trả lời</td>
                </tr>
                <tr>
                  <td>Kim Nam Joon</td>
                  <td>04/12/2024</td>
                  <td>Bạn có thể bán phần bánh không và thêm nguyên liệu để trang trí không? Tôi muốn tự trang trí bánh</td>
                  <td class="green">Đã trả lời</td>
                </tr>
                <tr>
                  <td>Jung Ho Seok</td>
                  <td>04/12/2024</td>
                  <td>Tôi muốn đặt bán cupcake theo hình</td>
                  <td class="green">Đã trả lời</td>
                </tr>
                <tr>
                  <td>Min Yoon Gi</td>
                  <td>04/12/2024</td>
                  <td>Tiệm bạn có làm bánh theo mẫu không?</td>
                  <td class="green">Đã trả lời</td>
                </tr>
                <tr>
                  <td>Kim Seok Jin</td>
                  <td>04/12/2024</td>
                  <td>Cho tôi xin công thức làm bánh cookies prinkles được không?</td>
                  <td class="green">Đã trả lời</td>
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
      <script src="js/messages.js"></script>
    </body>
</php>