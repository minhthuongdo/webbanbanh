<!DOCTYPE php>
<php lang="vi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script 
          src="https://kit.fontawesome.com/435cea2233.js" 
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="css/user.css"/>
        <title>Quản lý khách hàng</title>
    </head>
    <body>
        <div class="container">
          <aside>
            <div class="top">
              <div class="logo">
                <a href="/index.php"><img src="images/logo.jpg" alt="logo"></a>
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
              <a href="#" class="active">
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
                <i class="fa-regular fa-envelope"  title="Tin nhắn"></i>
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
            <h2>Danh sách khách hàng</h2>
            <table>
              <thead>
                <tr>
                  <th>Mã khách hàng</th>
                  <th>Tên đăng nhập (nickname)</th>
                  <th>Mật khẩu</th>
                  <th>Họ và tên</th>
                  <th>Địa chỉ</th>
                  <th>Email</th>
                  <th>Số điện thoại</th>
                  <th>Chức năng</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>KH001</td>
                  <td>congchualatui</td>
                  <td>xinhxeo</td>
                  <td>Nguyễn Ngọc Ánh</td>
                  <td>TP Hồ Chí Minh</td>
                  <td>congchua@gmail.com</td>
                  <td>0987654321</td>
                  <td>
                    <button class="edit" type="button" title="Sửa"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="lock" type="button" title="Khóa"><i class="fa-solid fa-lock-open"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>KH002</td>
                  <td>contuilahoangtu</td>
                  <td>deptroai</td>
                  <td>Nguyễn Thanh Minh</td>
                  <td>TP Hồ Chí Minh</td>
                  <td>hoangtu@gmail.com</td>
                  <td>0987654123</td>
                  <td>
                    <button class="edit" type="button" title="Sửa"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="lock" type="button" title="Khóa"><i class="fa-solid fa-lock-open"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>KH003</td>
                  <td>hoanghaucuoicung</td>
                  <td>guongkia</td>
                  <td>Trần Anh Thư</td>
                  <td>TP Hồ Chí Minh</td>
                  <td>hoanghau@gmail.com</td>
                  <td>0987456321</td>
                  <td>
                    <button class="edit" type="button" title="Sửa"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="lock" type="button" title="Khóa"><i class="fa-solid fa-lock-open"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>KH004</td>
                  <td>kysidungmanh</td>
                  <td>doembikmk</td>
                  <td>Trần Minh Ngọc</td>
                  <td>TP Hồ Chí Minh</td>
                  <td>kysi@gmail.com</td>
                  <td>0967854321</td>
                  <td>
                    <button class="edit" type="button" title="Sửa"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="lock" type="button" title="Khóa"><i class="fa-solid fa-lock-open"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>KH005</td>
                  <td>laudaitinhai</td>
                  <td>khongcomk</td>
                  <td>Nguyễn Trần Đàm</td>
                  <td>TP Hồ Chí Minh</td>
                  <td>laudai@gmail.com</td>
                  <td>0987623451</td>
                  <td>
                    <button class="edit" type="button" title="Sửa"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="lock" type="button" title="Khóa"><i class="fa-solid fa-lock-open"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>KH006</td>
                  <td>khongcotinhyeu</td>
                  <td>docthanvuitinh</td>
                  <td>Phan Chiếc Ghế</td>
                  <td>TP Hồ Chí Minh</td>
                  <td>foreveralone@gmail.com</td>
                  <td>0984567321</td>
                  <td>
                    <button class="edit" type="button" title="Sửa"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="lock" type="button" title="Khóa"><i class="fa-solid fa-lock-open"></i></button>
                  </td>
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

          <div class="tools">
            <h2>Tùy chọn</h2>
            <div class="item add">
              <div class="icon">
                <i class="fa-solid fa-plus"></i>
              </div>
              <div class="right">
                <div class="info">
                  <a href="addusers.php"><h3>Thêm khách hàng</h3></a>
                </div>
              </div>
            </div>
          </div>
            
        </div>

    <!-- Popup sửa thông tin khách hàng -->
    <div id="editPopup" class="popup hidden">
      <div class="popup-content">
          <h3>Sửa khách hàng</h3>
          <form id="editUserForm">
              <label for="editUserId">Mã khách hàng</label>
              <input type="text" id="editUserId" readonly />

              <label for="editNickname">Nickname</label>
              <input type="text" id="editNickname" />

              <label for="editUserPass">Mật khẩu</label>
              <input type="text" id="editUserPass" />

              <label for="editUserName">Họ tên</label>
              <input type="text" id="editUserName" />

              <label for="editAddress">Địa chỉ</label>
              <input type="text" id="editAddress" />

              <label for="editEmail">Email</label>
              <input type="text" id="editEmail" />

              <label for="editTel">Số điện thoại</label>
              <input type="text" id="editTel" />

              <div class="popup-actions">
                  <button type="button" class="cancel" onclick="closePopup()">Hủy</button>
                  <button type="submit" class="confirm">Lưu thay đổi</button>
              </div>
          </form>
      </div>
    </div>

      <!-- Popup xác nhận khóa -->
      <div id="lock-popup" class="popup hidden">
        <div class="popup-content">
          <h3>Bạn có chắc chắn muốn khóa người dùng này?</h3>
          <div class="popup-buttons">
            <button id="cancel-lock" class="cancel">Hủy</button>
            <button id="confirm-lock" class="confirm">Khóa</button>
          </div>
        </div>
      </div>
      

      <script src="js/user.js"></script>
    </body>
</php>