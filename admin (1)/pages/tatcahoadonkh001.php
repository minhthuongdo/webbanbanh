<!DOCTYPE php>
<php lang="vi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script 
          src="https://kit.fontawesome.com/435cea2233.js" 
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="css/tatcahoadon.css"/>
        <title>Tất cả hóa đơn</title>
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

        <main>
          <div class="allorders">
            <h2>Tất cả hóa đơn của khách hàng: KH001</h2>
            <table>
              <thead>
                <tr>
                  <th>Lần mua</th>
                  <th>Mã hóa đơn</th>
                  <th>Ngày mua</th>
                  <th>Sản phẩm</th>
                  <th>Tổng tiền</th>
                  <th>Xem hóa đơn</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>25</td>
                    <td>HD132</td>
                    <td>04/12/2024</td>
                    <td>CK01, CK04, CK05</td>
                    <td>110.000đ</td>
                    <td><a href="hoadonkh001/hoadon1.php" target="_blank"><i class="fa-solid fa-eye"></i></a></td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>HD121</td>
                    <td>28/11/2024</td>
                    <td>BK02</td>
                    <td>270.000đ</td>
                    <td><a href="hoadonkh001/hoadon2.php" target="_blank"><i class="fa-solid fa-eye"></i></a></td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>HD102</td>
                    <td>24/11/2024</td>
                    <td>BK05, CC02</td>
                    <td>300.000đ</td>
                    <td><a href="hoadonkh001/hoadon3.php" target="_blank"><i class="fa-solid fa-eye"></i></a></td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>HD096</td>
                    <td>22/11/2024</td>
                    <td>CK01, DN05, SK04</td>
                    <td>100.000đ</td>
                    <td><a href="hoadonkh001/hoadon4.php" target="_blank"><i class="fa-solid fa-eye"></i></a></td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>HD084</td>
                    <td>20/11/2024</td>
                    <td>BK03</td>
                    <td>300.000đ</td>
                    <td><a href="hoadonkh001/hoadon5.php" target="_blank"><i class="fa-solid fa-eye"></i></a></td>
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
          
        </div>
      </div>
    <script src="js/script.js"></script>
    </body>
</php>