<!DOCTYPE php>
<php lang="vi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script 
          src="https://kit.fontawesome.com/435cea2233.js" 
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="css/statistics.css"/>
        <title>Quản lý thống kê</title>
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
              <a href="orders.php" class="active">
                <i class="fa-solid fa-truck-fast" title="Đơn hàng"></i>
                <h3>Đơn hàng</h3>
              </a>
              <a href="#" class="active">
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
          <div class="statistics">
            <h2>Thống kê kinh doanh</h2>
        
            <!-- Bộ lọc thời gian -->
            <div class="filter">
              <label for="start-date">Từ ngày:</label>
              <input type="date" id="start-date">
              <label for="end-date">Đến ngày:</label>
              <input type="date" id="end-date">
              <button id="filter-btn"><a href="statistics.php">Xem thống kê</a></button>
            </div>
        
            <!-- Bảng thống kê mặt hàng -->
            <div class="table-section">
              <h3>Thống kê mặt hàng</h3>
              <table>
                <thead>
                  <tr>
                    <th>Mã sản phẩm</th>
                    <th>Sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Số lượng bán ra</th>
                    <th>Giá tiền</th>
                    <th>Tổng tiền</th>
                    <th>Xem hóa đơn</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>CC02</td>
                    <td>Cupcake Redvelvet</td>
                    <td><img src="images/cupcake_2.jpg"></td>
                    <td>212</td>
                    <td>30.000đ</td>
                    <td>6.360.000đ</td>
                    <td><a href="tatcahoadoncc02.php"><i class="fa-solid fa-eye"></i></a></td>
                  </tr>
                  <tr>
                    <td>SK04</td>
                    <td>Bánh Su Kem Chocolate Vỏ Giòn</td>
                    <td><img src="images/banhsukem_4.jpg"></td>
                    <td>190</td>
                    <td>30.000đ</td>
                    <td>5.700.000đ</td>
                    <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
                  </tr>
                  <tr>
                    <td>DN03</td>
                    <td>Bánh Donut Hallowen</td>
                    <td><img src="images/donut_3.jpg"></td>
                    <td>178</td>
                    <td>20.000đ</td>
                    <td>3.560.000đ</td>
                    <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
                  </tr>
                  <tr>
                    <td>SK03</td>
                    <td>Bánh Su Kem Chocolate</td>
                    <td><img src="images/banhsukem_3.jpg"></td>
                    <td>167</td>
                    <td>25.000đ</td>
                    <td>4.175.000đ</td>
                    <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
                  </tr>
                  <tr>
                    <td>CK04</td>
                    <td>Cookies Dâu Sprinkles</td>
                    <td><img src="images/banhquy_4.jpg"></td>
                    <td>159</td>
                    <td>30.000đ</td>
                    <td>3.180.000đ</td>
                    <td><a href="#" target="_blank"><i class="fa-solid fa-eye"></i></a></td>
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
        
            <!-- Bảng thống kê khách hàng -->
            <div class="table-section">
              <h3>Thống kê khách hàng</h3>
              <table>
                <thead>
                  <tr>
                    <th>Mã khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Tổng doanh thu</th>
                    <th>Số lần mua</th>
                    <th>Xem hóa đơn</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>KH001</td>
                    <td>0987654321</td>
                    <td>1.980.000đ</td>
                    <td>25</td>
                    <td><a href="tatcahoadonkh001.php"><i class="fa-solid fa-eye"></i></a></td>
                  </tr>
                  <tr>
                    <td>KH003</td>
                    <td>0987456321</td>
                    <td>1.890.000đ</td>
                    <td>21</td>
                    <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
                  </tr>
                  <tr>
                    <td>KH006</td>
                    <td>0984567321</td>
                    <td>1.780.000đ</td>
                    <td>18</td>
                    <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
                  </tr>
                  <tr>
                    <td>KH008</td>
                    <td>0986754321</td>
                    <td>1.740.000đ</td>
                    <td>16</td>
                    <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
                  </tr>
                  <tr>
                    <td>KH012</td>
                    <td>0956784321</td>
                    <td>1.650.000đ</td>
                    <td>15</td>
                    <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
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
            <a href="statisticsinfo.php"><h2>Thông tin</h2></a>
            <div class="item total-sales">
              <div class="icon">
                <i class="fa-solid fa-money-bill"></i>
              </div>
              <div class="right">
                <div class="info">
                  <a href="statisticsinfo.php"><h3>Tổng doanh thu</h3></a>
                </div>
              </div>
            </div>
            
            <div class="item best">
              <div class="icon">
                <i class="fa-solid fa-thumbs-up"></i>
              </div>
              <div class="right">
                <div class="info">
                  <a href="statisticsinfo.php"><h3>Mặt hàng bán chạy nhất</h3></a>
                </div>
              </div>
            </div>

            <div class="item unsold">
              <div class="icon">
                <i class="fa-solid fa-thumbs-down"></i>
              </div>
              <div class="right">
                <div class="info">
                  <a href="statisticsinfo.php"><h3>Mặt hàng ế nhất</h3></a>
                </div>
              </div>
            </div>

          </div>
        </div>
      <script src="js/statistics.js"></script>
    </body>
</php>