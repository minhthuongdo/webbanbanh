<!DOCTYPE php>
<php lang="vi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script 
          src="https://kit.fontawesome.com/435cea2233.js" 
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="css/addproducts.css"/>
        <title>Thêm sản phẩm</title>
    </head>
    <body>
        <div class="container">
          <aside> <!--PHẦN CHỨC NĂNG CHO ADMIN-->
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
              <a href="adminlogin.php" class="active">
                <i class="fa-solid fa-right-from-bracket" title="Đăng xuất"></i>
                <h3>Đăng xuất</h3>
              </a>
            </div>
          </aside>
        
        <!--MAIN-->
        <main>
          <h1>Thêm sản phẩm</h1>
          <div class="form-container">
            <form action="#" method="post" class="add-product-form">
              
              <!-- Mã sản phẩm và Tên sản phẩm -->
              <div class="row">
                <div>
                    <label for="product-id">Mã sản phẩm:</label>
                    <input type="text" id="product-id" name="product-id" placeholder="Nhập mã sản phẩm" required>
                </div>
                <div>
                    <label for="product-name">Tên sản phẩm:</label>
                    <input type="text" id="product-name" name="product-name" placeholder="Nhập tên sản phẩm" required>
                </div>
              </div>

              <!-- Danh mục và Tình trạng -->
              <div class="smallrow">
                  <div>
                      <label for="product-catalogue">Danh mục:</label>
                      <select id="product-catalogue" name="product-catalogue" required>
                          <option>--Chọn danh mục--</option>
                          <option value="banhkem">Bánh kem</option>
                          <option value="cookie">Cookie</option>
                          <option value="cupcake">Cupcake</option>
                          <option value="donut">Donut</option>
                          <option value="sukem">Su kem</option>
                      </select>
                  </div>
                  <div>
                      <label for="product-state">Tình trạng:</label>
                      <select id="product-state" name="product-state" required>
                          <option>--Chọn tình trạng--</option>
                          <option value="hethang">Hết hàng</option>
                          <option value="conhang">Còn hàng</option>
                      </select>
                  </div>
                  <div>
                    <label for="product-amount">Số lượng: </label>
                    <input type="text" id="product-amount" name="product-amount" placeholder="Nhập số lượng" required>
                  </div>
              </div>

              <!-- Giá bán và Ảnh sản phẩm -->
              <div class="row">
                  <div>
                      <label for="product-price">Giá bán:</label>
                      <input type="text" id="product-price" name="product-price" placeholder="Nhập giá sản phẩm" required>
                  </div>
                  <div>
                      <label for="product-image">Ảnh sản phẩm:</label>
                      <input type="file" id="product-image" name="product-image" required>
                  </div>
              </div>

              <!-- Mô tả sản phẩm -->
              <label for="product-description">Mô tả sản phẩm:</label>
              <textarea id="product-description" name="product-description" placeholder="Nhập mô tả sản phẩm" required></textarea>

              <button type="submit" class="submit-btn">Thêm sản phẩm</button>
            </form>
            
            <!-- POPUP KHI THÊM SẢN PHẨM THÀNH CÔNG-->
            <div id="popup-success" class="popup hidden">
              <p>Thêm sản phẩm thành công!</p>
              <button onclick="closePopup()">Đóng</button>
            </div>
        </div>
        </main>

        <!--PHẦN TOP-->
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
      <script src="js/addproducts.js"></script>
    </body>
</php>