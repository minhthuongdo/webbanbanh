<!DOCTYPE php>
<php lang="vi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script 
          src="https://kit.fontawesome.com/435cea2233.js" 
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="css/statisticsinfo.css"/>
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
          <div class="statistics">
            <h2>Thống kê kinh doanh</h2>
        
            <!-- Bộ lọc thời gian -->
            <div class="filter">
              <label for="start-date">Từ ngày:</label>
              <input type="date" id="start-date">
              <label for="end-date">Đến ngày:</label>
              <input type="date" id="end-date">
              <button id="filter-btn">Xem thống kê</button>
            </div>
        
            <div class="charts">
                <!-- Bảng thống kê mặt hàng -->
                <div class="charts-card">
                    <p class="chart-title">Sản phẩm bán chạy/ế trong tuần</p>
                    <div id="area-chart"></div>
                </div>
            </div>

            <div class="charts">
                <!-- Bảng thống kê khách hàng -->
                <div class="charts-card">
                    <p class="chart-title">5 Khách hàng phát sinh nhiều đơn hàng nhất trong tháng</p>
                    <div id="bar-chart"></div>
                </div>
            </div>

            <div class="charts">
                <!-- Bảng thống kê doanh thu -->
                <div class="charts-card">
                    <p class="chart-title">Tổng doang thu theo tháng (triệu đồng)</p>
                    <div id="line-chart"></div>
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

        <!--ApexCharts-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/4.1.0/apexcharts.min.js"></script>
        <script src="js/statisticsinfo.js"></script>
    </body>
</php>