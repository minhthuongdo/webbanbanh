<!DOCTYPE php>
<php lang="vi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script 
          src="https://kit.fontawesome.com/435cea2233.js" 
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="css/orders.css"/>
        <title>Quản lý đơn hàng</title>
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
              <a href="user.php" class="active">
                <i class="fa-solid fa-user" title="Khách hàng"></i>
                <h3>Khách hàng</h3>
              </a>
              <a href="#" class="active">
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
            <h2>Danh sách đơn hàng</h2>
            <!-- Bộ lọc thời gian -->
            <div class="filter">
              <label for="start-date">Từ ngày:</label>
              <input type="date" id="start-date">
              <label for="end-date">Đến ngày:</label>
              <input type="date" id="end-date">
              <button id="filter-btn"><a href="orders.php">Xem đơn hàng</a></button>
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
                <tr>
                    <td>DH132</td>
                    <td>KH001</td>
                    <td>04/12/2024</td>
                    <td>CK01, CK04, CK05</td>
                    <td>110.000đ</td>
                    <td class="success">Hoàn thành</td>
                    <td>Quận 7</td>
                    <td><a href="dh132.php" target="_blank"><i class="fa-solid fa-eye"></i></a></td>
                </tr>
                <tr>
                    <td>DH131</td>
                    <td>KH015</td>
                    <td>04/12/2024</td>
                    <td>BK01, CK03</td>
                    <td>300.000đ</td>
                    <td class="success">Hoàn thành</td>
                    <td>Quận 8</td>
                    <td><a href="dh131.php" target="_blank"><i class="fa-solid fa-eye"></i></a></td>
                </tr>
                <tr>
                    <td>DH130</td>
                    <td>KH007</td>
                    <td>03/13/2024</td>
                    <td>BK04</td>
                    <td>270.000đ</td>
                    <td class="cancel">Đã hủy</td>
                    <td>Quận 1</td>
                    <td><a href=""><i class="fa-solid fa-eye"></i></a></td>
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

          <!--TOOLS-->
          <div class="tools">
            <h2>Tùy chọn</h2>

            <div class="item time">
              <div class="icon">
                <i class="fa-solid fa-filter"></i>
              </div>
              <div class="right">
                <div class="info">
                  <h3>Lọc đơn hàng theo thời điểm</h3>
                  <form action="filterbytime.php" method="get" class="filter">
                    <div>
                      <select id="filter-time" name="filter-time" onchange="navigateFilterTime()">
                          <option>--Chọn thời điểm--</option>
                          <option value="tuannay.php">Tuần này</option>
                          <option value="tuantruoc.php">Tuần trước</option>
                          <option value="tuannay.php">Tất cả thời điểm</option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            
            <div class="item state">
              <div class="icon">
                <i class="fa-solid fa-filter"></i>
              </div>
              <div class="right">
                <div class="info">
                  <h3>Lọc đơn hàng theo tình trạng</h3>
                  <form action="filterbystate" method="get" class="filter">
                    <div>
                      <select id="filter-state" name="filter-state" onchange="navigateFilterState()">
                          <option>--Chọn tình trạng--</option>
                          <option value="chuaxuly.php">Chưa xử lý</option>
                          <option value="hoanthanh.php">Hoàn thành</option>
                          <option value="dahuy.php">Đã hủy</option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="item dis">
              <div class="icon">
                <i class="fa-solid fa-sort"></i>
              </div>
              <div class="right">
                <div class="info">
                  <h3>Sắp xếp đơn hàng theo quận</h3>
                  <form action="sortbydistrict.php" method="post" class="sort">
                    <div>
                      <select id="sort-district" name="sort-district" onchange="navigateSortDistrict()">
                          <option>--Sắp xếp theo quận--</option>
                          <option value="quan1.php">Quận 1</option>
                          <option value="">Quận 3</option>
                          <option value="">Quận 4</option>
                          <option value="">Quận 5</option>
                          <option value="">Quận 6</option>
                          <option value="">Quận 7</option>
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
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="item multi">
              <div class="icon">
                <i class="fa-solid fa-list-check"></i>
              </div>
              <div class="right">
                <div class="info">
                  <h3>Lọc đơn hàng kết hợp</h3>
                  <form class="filter">
                    <div>
                      <select id="filter-time" name="filter-time">
                          <option>--Chọn thời điểm--</option>
                          <option value="">Tuần này</option>
                          <option value="">Tuần trước</option>
                          <option value="">Tất cả thời điểm</option>
                      </select>
                      <select id="filter-state" name="filter-state">
                        <option>--Chọn tình trạng--</option>
                        <option value="">Chưa xử lý</option>
                        <option value="">Hoàn thành</option>
                        <option value="">Đã hủy</option>
                    </select>
                    <select id="sort-district" name="sort-district">
                        <option>--Chọn quận--</option>
                        <option value="">Quận 1</option>
                        <option value="">Quận 3</option>
                        <option value="">Quận 4</option>
                        <option value="">Quận 5</option>
                        <option value="">Quận 6</option>
                        <option value="">Quận 7</option>
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
                    </div>
                  </form>

                  <button type="submit" id="btn"><a href="kethop.php">Tìm kiếm</a></button>
                  
                </div>
              </div>
            </div>

          </div>

        </div>
      <script src="js/orders.js"></script>
    </body>
</php>